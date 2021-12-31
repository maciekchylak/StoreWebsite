USE y7snb0jclmyepnar;

CREATE TRIGGER products_update AFTER INSERT ON Orders FOR EACH ROW
	UPDATE /*+ NO_MERGE(diff) */ Products p, 
	(
		SELECT 
			o.timestamp,
			order_info.product, 
			SUM(order_info.quantity) AS quantity
		FROM 
			Orders o, 
			JSON_TABLE(
				items,
				"$[*]" 
				COLUMNS(
					product VARCHAR(100) PATH "$.product_name",
					quantity DECIMAL(10, 1) PATH "$.quantity"
				)
			) AS order_info
		WHERE 
			abs(o.timestamp - current_timestamp()) <= 1
		GROUP BY
			order_info.product, o.timestamp
		) AS diff
	SET 
		p.quantity = p.quantity - diff.quantity
	WHERE 
		diff.product=p.product_name;
    