select nvl (MAX(tab.colum_id), 0 ) + 1 as res
  from owner.db_tab tab

-- FUNCTION : 
CREATE OR REPLACE FUNCTION ret_sequence(p_coluna IN VARCHAR2, p_tabela IN VARCHAR2)
  RETURN NUMBER
IS
  v_max_value NUMBER;
BEGIN
  -- Executa a consulta para obter o maior valor da coluna na tabela
  EXECUTE IMMEDIATE 'SELECT NVL(MAX(' || p_coluna || '), 0) + 1 FROM ' || p_tabela INTO v_max_value;

  -- Retorna o valor obtido
  RETURN v_max_value;
END;
