<?php
require_once 'db.php';
if (isset($_GET['hal'])) {
    $query = "SELECT * FROM data LIMIT {$_GET['hal']}, 4";
} else {
    $query = "SELECT * FROM data LIMIT 0, 4";
}
$result = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Crud</title>
    <style>
        a {
            text-decoration: none;
        }

        .page-link {
            color: white;
        }
    </style>
</head>

<body>
    <div class="fluid-container">
        <div class="text-center">
            <h3>Data Mahasiswa</h3>
        </div>
        <div class="text-end">
            <a href="f_create.php" class="badge bg-primary text-end">Tambah Data</a>
        </div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = $_GET['hal'] + 1 ?>
                <?php foreach ($result as $i) : ?>
                    <tr>
                        <td><?= $count ?></td>
                        <td><?= $i['nama'] ?></td>
                        <td><?= $i['umur'] ?></td>
                        <td>
                            <a href="delete.php?id=<?= $i['id'] ?>" class="badge bg-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                            <a href="f_update.php?id=<?= $i['id'] ?>" class="badge bg-success">Edit</a>
                        </td>
                    </tr>
                    <?php $count++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link bg-dark" href="?hal=<?php if (isset($_GET['hal']))
                                                                                        echo $_GET['hal'] - 4;
                                                                                    else echo 0;
                                                                                    ?>">Previous</a></li>
                    <li class="page-item"><a class="page-link bg-dark" href="?hal=<?php if (isset($_GET['hal']))
                                                                                        echo $_GET['hal'] + 4;
                                                                                    else echo 4;
                                                                                    ?>">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>