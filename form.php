<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir input</title>
</head>
<body>
    <h1>Folmulir Pendaftaran</h1>
    <form action="proses.php" method="post" enctype="mulitpart/form-data">
        <div>
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim">
        </div>
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat">
        </div>
        <div>
            <label for="file">File</label>
            <input type="file" name="file" id="file">
        </div>
        <input type="Submit" value="Kirim">
    </form>
</body>
</html>