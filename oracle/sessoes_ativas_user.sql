-- Sessões ativas do user atual no db oracle ;
SELECT *
  FROM V$SESSION
 WHERE USERNAME = USER
;
