<!-- predikat terhadap hasil ujian diberikan ketika mendapatkan predikat a jika nilai 
lebih dari 90, mendapatkan predikat b jika nilai lebih dari 75, selain itu mendapatkan predikat c -->

<?php
 
 $nilai= 100;

 if ($nilai >= 90) {
    echo "$nilai predikat a";
} elseif ($nilai >= 75) {
    echo "$nilai predikat b";
} else {
    echo "$nilai predikat c";
}

?>