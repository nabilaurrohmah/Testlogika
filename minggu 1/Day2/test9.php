<!-- nilai variabel a bisa dibagi dengan 4 dan bisa dibagi dengan 5, berapakah nilai variabel tersebutdari rentang 1-25 -->

<?php
for ($i = 1; $i <= 25; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "Nilai variabel a yang memenuhi kondisi: $i";
    }
}
?>

