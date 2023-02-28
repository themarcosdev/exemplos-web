-- Randomizando uma string ;
SELECT SUBSTR(MD5(RAND()),1,1) AS random FROM DUAL ;
