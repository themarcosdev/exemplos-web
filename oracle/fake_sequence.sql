select nvl (MAX(tab.colum_id), 0 ) + 1 as res
  from owner.db_tab tab
