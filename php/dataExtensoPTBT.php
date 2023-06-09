<?php
  setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
  $dia = date('Y/m/d');
  $timestamp = strtotime($dia);
  $dataExt = strftime('%d de %B de %Y', $timestamp);

  echo $dataExt ;
