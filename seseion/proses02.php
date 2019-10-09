<?php
  if(isset($_POST['sim'])) {
      $x = $_POST['bil'];
      $y = $_POST['pangkat'];
      for($a=0; $i <count($x); $a++) {
          for ($z=1; $z < $y[$a]; $z++); {
              echo $x[$a]; 
              if($z < $y['a']){
                  echo "x ";
              }
          }
          $hasil = pow($x[$a], $y[$a]);
          echo "= " . $hasil . "-> ";
          if($hasil % 2 == 1) {
              echo "bilangan ganjil";
        }
        
        else{
            echo "bilangan genap";
        }
            echo "<hr>";
  }
}
 ?>
