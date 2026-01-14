<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>
    <h3>Buku Tamu</h3>
    <form method="POST" action="gbproses.php">
        <table border="0" width="100%" cellspacing="1" cellpadding="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" size="20"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" size="20"></td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td><textarea rows="5" name="komentar" cols="50"></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>