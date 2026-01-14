<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $nim=$_POST['nim'];
        $nama=$_POST['nama'];
        $tanggal=$_POST['tanggal'];
        $alamat=$_POST['alamat'];

        $sql= "INSERT INTO mahasiswa(nim,nama_mhs,tgl_lahir,alamat) VALUES ('$nim','$nama','$tanggal','$alamat')";
        $query = $koneksi->query($sql);
        header("Location: index.php");
        exit(); 
    }
?>