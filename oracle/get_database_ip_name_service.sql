select sys_context('userenv','service_name') as service_name,
       ora_database_name,
       sys_context('USERENV','IP_ADDRESS') as database_ip 
  from dual;
