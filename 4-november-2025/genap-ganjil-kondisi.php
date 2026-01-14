<?php
    //IF ELSE
    $bil = 1;

    if($bil % 2 == 0){
        echo "Bilangan anda genap, yaitu " . $bil;
    }
    else{
        echo "Bilangan anda ganjil, yaitu " . $bil;
    }

    echo "<br>";


    //OPERATOR TERNARY >= versi php 8.0
    echo($bil % 2 == 0) ? "Bilangan anda genap, yaitu $bil" : "Bilangan anda ganjil, yaitu $bil";

    echo "<br>";

    //SWITCH CASE
    switch($bil % 2)
    {
        case 0 : 
            echo "Bilangan anda genap, yaitu $bil";
            break;
        case 1 : 
            echo "Bilangan anda ganjil, yaitu $bil";
            break;
        default :
            echo "Bilangan tidak valid";
    }
?>