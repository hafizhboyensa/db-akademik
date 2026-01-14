<?php
    //PERULANGAN / LOOPING
    //for, while, do while, foreach

    //FOR
    $teks = "Hello World";
    for($a = 1 ; $a <= 5 ; $a++){
        echo "<h" . $a . ">" . $teks . "</h" . $a . ">"; 
    }

    echo "<select name ='tahun'>";
    for($tahun = 1970; $tahun <= 2020; $tahun++){
        echo "<option value=' " .$tahun. "'>" .$tahun. "</option>";
    }
    echo "</select>";

    echo "<br><br>";

    //WHILE
    $bil = 1;
    while($bil <= 3){
        echo $bil. "<br />";
        $bil++;
    }

    echo "<br><br>";

    //DO ... WHILE
    $cetak = 0;
    do
    {
        echo "Ane mau mencetak jobsheet di printer baru";
    } while ($cetak > 1);

    echo "<br><br>";

    //FOREACH = perulangan untuk array
    $fruits = ["Apel", "Mangga", "Pisang", "Semangka"]; //array numerik
    foreach($fruits as $fruit){
        echo "Buah $fruit <br>";
    }
?>