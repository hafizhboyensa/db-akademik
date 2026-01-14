<?php
    //FOR
    $ayam = 10;
    echo "Anak ayam turun $ayam";
    echo "<br>";
    for($i=$ayam; $i>1; $i--){
        echo "Anak ayam turun $i, mati satu tinggal " .($i-1);
        echo "<br>";
    }
    echo "Anak ayam turun $i, mati satu tinggal induknya";

    echo "<br><br>";

    //WHILE
    echo "Anak ayam turun $ayam";
    echo "<br>";
    while ($ayam > 1){
        echo "Anak ayam turun $ayam, mati satu tinggal " .($ayam-1);
        echo "<br>";
        $ayam--;
    }
    echo "Anak ayam turun $i, mati satu tinggal induknya";

    echo "<br><br>";

    //DO ... WHILE
    $jumlah = 10;
    echo "Anak ayam turun $jumlah";
    echo "<br>";
    do
    {
        echo "Anak ayam turun $jumlah, mati satu tinggal " .($jumlah-1);
        echo "<br>";
        $jumlah--;
    } while($jumlah > 1);
    echo "Anak ayam turun $i, mati satu tinggal induknya";

?>