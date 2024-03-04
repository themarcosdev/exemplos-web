-- Get All Functions 
SELECT object_name
  FROM user_objects
 WHERE object_type = 'FUNCTION';

-- Get Function Text
SELECT TEXT
  FROM ALL_SOURCE
 WHERE TYPE = 'FUNCTION'
   AND NAME = 'MY_FUNCION_NAME';
