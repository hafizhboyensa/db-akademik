<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
    include("koneksi.php");
    $edit = mysqli_query($koneksi, "SELECT * FROM tamu where id=$_GET[id]");
    $data = mysqli_fetch_array($edit);
    
    ?>
    <div class="container">
        <h1>Ubah Data Buku Tamu</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['nama']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="<?php echo $data['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
                <textarea class="form-control" name="komentar" id="exampleFormControlTextarea1" rows="3"> <?php echo $data['komentar']; ?></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary" value="update">Edit</button>
            <a href="index.php"><button type="button" name="index" class="btn btn-primary">Lihat Buku Tamu</button></a>
        </form>
    </div>
    <?php

    if(isset($_POST['submit'])){
        $update = mysqli_query($koneksi, "UPDATE tamu SET nama='$_POST[nama]', email='$_POST[email]', komentar='$_POST[komentar]' WHERE id=$_GET[id]");
        if($update){
            header ("Location:index.php");
        }else{
            print "Maaf, data gagal diubah";
        }
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>