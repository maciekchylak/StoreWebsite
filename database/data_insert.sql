USE y7snb0jclmyepnar;

INSERT INTO Products(product_name, category, quantity, unit, price, displayed_name)
VALUES
    ('chleb_razowy', 'pieczywo', 20, 'sztuka', 4.19, 'chleb razowy'),
    ('bulki', 'pieczywo', 100, 'sztuka', 0.39, 'bułka'),
    ('chleb_tostowy', 'pieczywo', 30, 'sztuka', 3.09, 'chleb tostowy'),
    ('chleb_pszenny', 'pieczywo', 30, 'sztuka', 3.59, 'chleb pszenny'),
    ('chleb_zytni', 'pieczywo', 10, 'sztuka', 5.69, 'chleb żytni'),
    ('bulka_tarta', 'pieczywo', 5, 'sztuka', 5.09, 'bułka tarta'),
    ('kajzerka', 'pieczywo', 5, 'sztuka', 0.39, 'kajzerka'),
    ('drozdzowka_z_makiem', 'pieczywo', 20, 'sztuka', 2.49, 'drożdżówka z makiem'),
    ('paczek', 'pieczywo', 15, 'sztuka', 2.59, 'pączek'),
    ('banan', 'owoce i warzywa', 30, 'sztuka', 1.49, 'banan'),
    ('orzechy', 'owoce i warzywa', 10, 'kg', 17.49, 'orzechy'),
    ('jablko', 'owoce i warzywa', 20, 'kg', 10.99, 'jabłko'),
    ('winogrona', 'owoce i warzywa', 10, 'kg', 20.99, 'winogrona'),
    ('gruszka', 'owoce i warzywa', 10, 'kg', 11.99, 'gruszka'),
    ('marchewka', 'owoce i warzywa', 13, 'kg', 3.99, 'marchewka'),
    ('pietruszka', 'owoce i warzywa', 9, 'kg', 4.99, 'pietruszka'),
    ('ziemniaki', 'owoce i warzywa', 20, 'kg', 5.99, 'ziemniaki'),
    ('mleko', 'nabiał', 50, 'sztuka', 3.19, 'mleko'),
    ('maslo', 'nabiał', 30, 'sztuka', 7.99, 'masło'),
    ('jogurt_naturalny', 'nabiał', 30, 'sztuka', 2.39, 'jogurt naturalny'),
    ('jogurt_owocowy', 'nabiał', 40, 'sztuka', 1.99, 'jogurt owocowy'),
    ('twarog', 'nabiał', 10, 'sztuka', 3.99, 'twaróg'),
    ('szynka_parmenska', 'mięso i wędliny', 50, 'kg', 30.99, 'szynka parmeńska'),
    ('szynka_szwarcwaldzka', 'mięso i wędliny', 10, 'kg', 31.99, 'szynka szwarcwaldzka'),
    ('szynka_gotowana', 'mięso i wędliny', 50, 'sztuka', 4.99, 'szynka gotowana'),
    ('mielonka', 'mięso i wędliny', 10, 'sztuka', 3.99, 'mielonka'),
    ('parowki', 'mięso i wędliny', 40, 'sztuka', 5.99, 'parówki'),
    ('mieso_mielone', 'mięso i wędliny', 100, 'kg', 21.99, 'mięso mielone'),
    ('pepsi', 'napoje', 10, 'sztuka', 6.99, 'pepsi'),
    ('woda_niegazowana', 'napoje', 50, 'sztuka', 1.99, 'woda niegazowana'),
    ('woda_gazowana', 'napoje', 50, 'sztuka', 1.99, 'woda gazowana'),
    ('sok_pomaranczowy', 'napoje', 10, 'sztuka', 4.99, 'sok pomarańczowy'),
    ('sok_jablkowy', 'napoje', 10, 'sztuka', 4.99, 'sok jabłkowy'),
    ('sok_pomidorowy', 'napoje', 10, 'sztuka', 3.99, 'sok pomidorowy'),
    ('lemoniada', 'napoje', 5, 'sztuka', 5.99, 'lemoniada');

INSERT INTO Orders(first_name, last_name, city, zip_code, street, building_number,
flat_number, price, items)
VALUES
    ('Seba', 'D', 'sebad@gmail.com', 'Warszawa', '00-631', 'Koszykowa', '10a', 10, 121.42, '[{"product_name":"bułki", "quantity":"1"}, {"product_name":"jabłko", "quantity":"0.1111"}]');
