-- REGEX NÚMERICO NA COLUNA ;
SELECT REGEXP_REPLACE(sua_coluna, '[^0-9]', '') AS numeros , sua_coluna AS num_original
  FROM sua_tabela;

-- REGEX NÚMERICO NO FILTRO WHERE ;
SELECT *
  FROM sua_tabela
 WHERE REGEXP_LIKE(sua_coluna, '^[0-9]+')
 ;
