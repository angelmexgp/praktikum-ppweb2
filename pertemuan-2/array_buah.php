<?php
    $ar_buah = ["pepaya", "mangga", "pisang", "jambu"];
    echo $ar_buah[1];
    echo "<br/>jumlah buah" . count ($ar_buah);
    echo "<ol>";
    foreach ($ar_buah as $buah) {
        echo "<li>". $buah ."</li>";
    } echo "</ol>";

    //menambahkan buah
    $ar_buah[] = "apel";

    //menghapus buah index ke 1
    unset($ar_buah[1]);

    //mengubah buah index ke 2 jd kolak
    $ar_buah[2] = "kolak";

    //menampilkan seluruh buah dengan indexnya

    echo "<ul>";
    foreach ($ar_buah as $buah => $V) {
        echo "<li>buah index - " .$buah . " adalah " . $V . "</li>";
    } echo "</ul>";
?>