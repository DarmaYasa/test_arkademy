<?php

  function ganti_kata($kata, $hurufAwal, $hurufGanti) {
    for ($i=0; $i< strlen($kata); $i++) {
      if($kata[$i]==$hurufAwal){
        $kata[$i]=$hurufGanti;
      }
    }
    echo $kata;
  }

  ganti_kata("purwakarta", 'a', 'o');
