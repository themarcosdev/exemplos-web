SELECT *
  FROM all_indexes
 WHERE table_owner = 'OWNER'
   and index_name like '%TABPK%'
 order by index_name 
