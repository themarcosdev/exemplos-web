WITH data 
     AS (SELECT granted_role 
         FROM   dba_role_privs 
         CONNECT BY PRIOR granted_role = grantee 
         START WITH grantee = 'YOUR_USER') 
SELECT 'SYSTEM'     typ, 
       grantee      grantee, 
       privilege    priv, 
       admin_option ad, 
       '--'         tabnm, 
       '--'         colnm, 
       '--'         owner 
FROM   dba_sys_privs 
WHERE  grantee = 'YOUR_USER' 
        OR grantee IN (SELECT granted_role 
                       FROM   data) 
UNION 
SELECT 'TABLE'    typ, 
       grantee    grantee, 
       privilege  priv, 
       grantable  ad, 
       table_name tabnm, 
       '--'       colnm, 
       owner      owner 
FROM   dba_tab_privs 
WHERE  grantee = 'YOUR_USER' 
        OR grantee IN (SELECT granted_role 
                       FROM   data) 
ORDER  BY 1;
