USE y7snb0jclmyepnar;

CREATE FUNCTION special_characters (s VARCHAR(50))
    RETURNS VARCHAR(50)
    RETURN REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(s, 'ę', 'e'), 'ą', 'a'), 'ć', 'c'), 'ń', 'n'), 'ż', 'z'), 'ź', 'z'), 'ś', 's'), 'ó', 'o'), 'ł', 'l');
