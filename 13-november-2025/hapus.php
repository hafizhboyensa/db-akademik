<?php
    include("koneksi.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM tamu WHERE id= $id";
    $query = $koneksi->query($sql);
    if($query){
        header("Location:index.php");
    }else{
        print "Gagal menghapus data";
    }
?>