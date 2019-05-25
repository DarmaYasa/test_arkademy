<?php 

  function cetak_gambar($number) {

    if ($number%2==1) {
      for($i = 1; $i <= $number; $i++) {
        echo "<tr>";
          if ($i==1 or $i==$number) {
            for($j = 1; $j <= $number; $j++) {
               echo "<td>x</td> ";
            }
          }

          else {
            for($j = 1; $j <= $number; $j++) {
              if ($j==round($number/2)){
                echo "<td>x</td>";
              }
              else {
                echo "<td>=</td>";
              }   
            }
          }
        echo "</tr>";
      }
    }
    else {
      echo "Bilangan harus ganjil";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 4</title>
    <style>
        td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <?php
            cetak_gambar(7);
        ?>
    </table>
</body>
</html>