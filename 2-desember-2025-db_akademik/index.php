<?php
    include("koneksi.php");
    $query = "select * from mahasiswa";
    $sql = $koneksi->query($query);
    $no = 1;
?>   
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <table class="table caption-top">
        <h1>List Data Mahasiswa</h1>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($sql as $row): ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['nim']; ?></td>
                    <td><?php echo $row['nama_mhs']; ?></td>
                    <td><?php echo $row['tgl_lahir']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td>
                        <a href="hapus.php?nim=<?php echo $row['nim'] ?>"><button type="button" name="hapus" class="btn btn-secondary">Hapus</button></a> |
                        <a href="edit.php?nim=<?php echo $row['nim'] ?>"><button type="button" name="edit" class="btn btn-secondary">Edit</button></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    
    <a href="create.php"><button type="button" name="create" class="btn btn-primary">Tambahkan Data</button></a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

