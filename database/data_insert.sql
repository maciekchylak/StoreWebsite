USE y7snb0jclmyepnar;

INSERT INTO Products(product_name, category, quantity, unit, price)
VALUES
    ('chleb razowy', 'pieczywo', 20, 'sztuka', 4.19),
    ('bułki', 'pieczywo', 100, 'sztuka', 0.39),
    ('chleb tostowy', 'pieczywo', 30, 'sztuka', 3.09),
    ('chleb pszenny', 'pieczywo', 30, 'sztuka', 3.59),
    ('chleb żytni', 'pieczywo', 10, 'sztuka', 5.69),
    ('bułka tarta', 'pieczywo', 5, 'sztuka', 5.09),
    ('drożdżówka z makiem', 'pieczywo', 20, 'sztuka', 2.49),
    ('pączek', 'pieczywo', 15, 'sztuka', 2.59),
    ('banan', 'owoce i warzywa', 30, 'sztuka', 1.49),
    ('orzechy', 'owoce i warzywa', 10, 'kg', 17.49),
    ('jabłko', 'owoce i warzywa', 20, 'kg', 10.99),
    ('winogrona', 'owoce i warzywa', 10, 'kg', 20.99),
    ('gruszka', 'owoce i warzywa', 10, 'kg', 11.99),
    ('marchewka', 'owoce i warzywa', 13, 'kg', 3.99),
    ('pietruszka', 'owoce i warzywa', 9, 'kg', 4.99),
    ('ziemniaki', 'owoce i warzywa', 20, 'kg', 5.99),
    ('mleko', 'nabiał', 50, 'sztuka', 3.19),
    ('masło', 'nabiał', 30, 'sztuka', 7.99),
    ('jogurt naturalny', 'nabiał', 30, 'sztuka', 2.39),
    ('jogurt owocowy', 'nabiał', 40, 'sztuka', 1.99),
    ('twaróg', 'nabiał', 10, 'sztuka', 3.99),
    ('szynka parmeńska', 'mięso i wędliny', 50, 'kg', 30.99),
    ('szynka szwarcwaldzka', 'mięso i wędliny', 10, 'kg', 31.99),
    ('szynka gotowana', 'mięso i wędliny', 50, 'sztuka', 4.99),
    ('mielonka', 'mięso i wędliny', 10, 'sztuka', 3.99),
    ('parówki', 'mięso i wędliny', 40, 'sztuka', 5.99),
    ('mięso mielone', 'mięso i wędliny', 100, 'kg', 21.99),
    ('pepsi', 'napoje', 10, 'sztuka', 6.99),
    ('woda niegazowana', 'napoje', 50, 'sztuka', 1.99),
    ('woda gazowana', 'napoje', 50, 'sztuka', 1.99),
    ('sok pomarańczowy', 'napoje', 10, 'sztuka', 4.99),
    ('sok jabłkowy', 'napoje', 10, 'sztuka', 4.99),
    ('sok pomidorowy', 'napoje', 10, 'sztuka', 3.99),
    ('lemoniada', 'napoje', 5, 'sztuka', 5.99);

INSERT INTO Orders(first_name, last_name, city, zip_code, street, building_number,
flat_number, price, items)
VALUES
    ('Seba', 'D', 'Warszawa', '00-631', 'Koszykowa', '10a', 10, 121.42, '[{"product_name":"bułki", "number_of_items":"3", "quantity":"NULL", "unit":"NULL"}, {"product_name":"jabłko", "number_of_items":"NULL", "quantity":"0.1111", "unit":"kg"}]');
