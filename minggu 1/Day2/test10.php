<!-- berapa kemungkinan bilangan 90 bisa dibagi habis dengan bilangan kelipatan 3(3-30) -->
<?php

    for ($i = 3; $i <= 30; $i+=3) {
        if (90 % $i == 0 ) {
            echo "$i";
        }
    } 

?>
