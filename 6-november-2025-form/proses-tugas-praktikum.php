<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_POST['submit'])){
        echo "<p>No. BP : " . $_POST['nobp'] . "<br></p>";
        echo "<p>Nama : " . $_POST['nama'] . "<br></p>";
        echo "<p>Email : " . $_POST['email'] . "<br></p>";
    }
?>
</body>
</html>