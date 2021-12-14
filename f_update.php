<?php
require_once "db.php";
$id = $_GET['id'];

$query = "SELECT * FROM data WHERE id=$id";
$result = $db->query($query)->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ubah</title>
</head>

<body>
    <div class="container">
    <div class="text-center">
        <h3>Ubah Data</h3>
    </div>
        <form method="POST" action="update.php">
            <input type="hidden" value="<?= $id?>" name="id" id="id">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $result['nama']?>">
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input type="text" class="form-control" id="umur" name="umur" value="<?= $result['umur']?>">
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>