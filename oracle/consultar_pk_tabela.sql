-- Pegar as pks de uma tabela ;
SELECT column_name as coluna_pk
  FROM all_cons_columns
 WHERE table_name = 'TAB_NAME'
   AND owner = 'OWNER'
   AND constraint_name =
       (SELECT constraint_name
          FROM all_constraints
         WHERE table_name = 'TAB_NAME'
           AND owner = 'OWNER'
           AND constraint_type IN ('P'))
 ORDER BY position;
