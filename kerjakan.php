<?php
for ($i = 1; $i <= 10; $i++) {
    echo "<br>";
    echo "perkalian $i <br>";

    for ($k = 1; $k <= 10; $k++){
        $hasil = $i*$k;

        if($hasil%2){
            $g = "ganjil";
        }
        else {
            $g = "genap";
        }
        echo "$i x $k = $hasil adalah bilangan ".$g."<br>";
    }

}
?> 