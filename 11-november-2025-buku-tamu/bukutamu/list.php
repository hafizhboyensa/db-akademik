<h2>List data buku tamu</h2>
<table width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="#99CCFF">
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Komentar</th>
    </tr>

    <?php
        include("koneksi.php");
        $tampil = mysqli_query($db, "select * from tamu");
        while($data = mysqli_fetch_array($tampil)){
    ?>        
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['komentar']; ?></td>
        </tr>
    <?php
    }
    ?>
</table>
<p>
    Klik <a href=gbook.php>di sini</a> untuk Proses input buku tamu
</p>