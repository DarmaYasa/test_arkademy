<?php
  
  function betweenDays($tglAwal, $tglAkhir) {

    while($tglAwal<=$tglAkhir) {
      echo $tglAwal . ", ";
      $tglAwal = date('Y-m-d', strtotime('+1 days', strtotime($tglAwal)));
    }
  }

  betweenDays('2019-01-01', '2019-02-05');
?>