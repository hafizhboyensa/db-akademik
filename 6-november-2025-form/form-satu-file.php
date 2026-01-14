<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penanganan Form</title>
</head>
<body>
    <h1>Input Nama Anda :</h1>
    <form method="POST" action="">
        Nama Anda : <input type="text" name="textfield"> <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            echo "<p>Selamat datang = <br>" . $_POST['textfield'] . "<br><p>";
        }
    ?>
</body>
</html>