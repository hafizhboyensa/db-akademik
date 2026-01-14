<?php
    //if else
    $bil1 = 6;
    $bil2 = 9;
    $bil3 = 10;

    if ($bil1 > $bil2){
        $max = $bil1;
    }
    else{
        $max = $bil2;
    }

    if($max > $bil3){
        $maxSemua = $max;
    }
    else{
        $maxSemua = $bil3;
    }

    echo "Nilai terbesar dari ketiga bilangan adalah " . $maxSemua;
?>

<br>

<?php
    //switch case
    $angkaBln = date("n"); //mendeteksi bulan sekarang

    switch($angkaBln)
    {
        case 1 : $namaBln = "Januari";
        break;
        case 2 : $namaBln = "Februari";
        break;
        case 3 : $namaBln = "Maret";
        break;
        case 4 : $namaBln = "April";
        break;
        case 5 : $namaBln = "Mei";
        break;
        case 6 : $namaBln = "Juni";
        break;
        case 7 : $namaBln = "Juli";
        break;
        case 8 : $namaBln = "Agustus";
        break;
        case 9 : $namaBln = "September";
        break;
        case 10 : $namaBln = "Oktober";
        break;
        case 11 : $namaBln = "November";
        break;
        case 12 : $namaBln = "Desember";
        break;
    }

    echo "Nama bulan sekarang adalah : " . $namaBln;
?>