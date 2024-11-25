<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// echo "<pre/>";
// print_r($_GET);

if (count($_POST) == 0) {
    // die("Timdak Amda Damta yamng dimkimrim");
    header("Location: form.php");
    exit();
}

$data = $_POST;
// echo "<pre/>";
// print_r($_FILES);

if (move_uploaded_file($_FILES)) {
    echo "File berhasil diupload";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data yang dikirim</h1>
    <p>NIM: <?= $data["nim"]?></p>
    <p>Nama: <?= $data["nama"]?></p>
    <p>Alamat: <?= $data["alamat"]?></p>
</body>
</html>