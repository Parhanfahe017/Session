<?php
for ($i = 1; $i <= 10; $i++) {
    if($i%2 == 1) {
        $sg = "ganjil";
    }
    else {
        $sg = "Genap";
    }
    echo "$i x $i adalah bilangan ".$sg."<br>";
}
?>