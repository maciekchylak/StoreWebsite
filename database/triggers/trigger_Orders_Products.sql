USE y7snb0jclmyepnar;

CREATE TRIGGER products_update AFTER INSERT ON Orders FOR EACH ROW
	UPDATE /*+ NO_MERGE(diff) */ Products p, 
	(
		SELECT 
			o.timestamp,
			order_info.product, 
			SUM(order_info.number_of_items) AS number_of_items, 
			SUM(order_info.quantity) AS quantity, 
			NULLIF(unit, "NULL") AS unit 
		FROM 
			Orders o, 
			JSON_TABLE(
				items,
				"$[*]" 
				COLUMNS(
					product VARCHAR(100) PATH "$.product_name",
					number_of_items DECIMAL PATH "$.number_of_items",
					quantity DECIMAL(10, 1) PATH "$.quantity",
					unit VARCHAR(100) PATH "$.unit"
				)
			) AS order_info
		WHERE 
			abs(o.timestamp - current_timestamp()) <= 1
		GROUP BY
			order_info.product, o.timestamp, unit
		) AS diff
	SET 
		p.number_of_items = CASE WHEN diff.unit IS NULL THEN p.number_of_items - diff.number_of_items ELSE p.number_of_items END,
		p.quantity = CASE WHEN diff.unit IS NOT NULL THEN p.quantity - diff.quantity ELSE p.quantity END
	WHERE 
		diff.product=p.product_name;
    