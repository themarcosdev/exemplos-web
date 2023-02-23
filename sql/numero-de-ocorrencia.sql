-- exemplo : 
SELECT id,
       nome,
       COUNT(*) AS 'Nº_DE_REPETICOES'
FROM   tabela
GROUP  BY id
HAVING COUNT(*) > 1; 
