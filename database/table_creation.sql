USE y7snb0jclmyepnar;

CREATE TABLE Products(
	product_id INTEGER NOT NULL AUTO_INCREMENT,
	product_name VARCHAR(50) NOT NULL,
    category VARCHAR(50) NOT NULL,
	number_of_items INTEGER NULL,
	quantity FLOAT(10, 1) NULL,
	unit VARCHAR(50) NULL,
    price FLOAT(10,2) NOT NULL,
    PRIMARY KEY (product_id)
);

CREATE TABLE Orders(
	order_id INTEGER NOT NULL AUTO_INCREMENT,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    city VARCHAR(50) NULL,
    zip_code VARCHAR(50) NULL,
    street VARCHAR(50) NULL,
    building_number VARCHAR(10) NULL,
    flat_number INTEGER NULL,
	price FLOAT(30, 2) NOT NULL,
    items JSON NOT NULL,
    PRIMARY KEY (order_id)
);
