<?php
  /* Reference : https://stackoverflow.com/questions/365191/how-to-get-time-difference-in-minutes-in-php*/

  /* Setando uma data e hora */
  date_default_timezone_set('America/Sao_Paulo');
  $agora = date("Y-m-d H:i:s");
  $data = "2022-02-28 08:00:00";

  /* Definindo uma data inicial */
  $dataInicial = new DateTime($data);

  /* Data final baseada em diff */
  $dataFinal = $dataInicial->diff(new DateTime($agora));
  echo $dataFinal->days . ' Total de dias <br>';
  echo $dataFinal->y . ' Anos<br>';
  echo $dataFinal->m . ' Meses<br>';
  echo $dataFinal->d . ' Dias<br>';
  echo $dataFinal->h . ' Horas<br>';
  echo $dataFinal->i . ' Minutos<br>';
  echo $dataFinal->s . ' Segundos<br>';
