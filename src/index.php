<?php
include "database.php";

$db = new Database();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>CRUD OOP PHP mySQL</title>
</head>

<body>
    <div class="container">
        <h1>CRUD OOP PHP</h1>
        <a class="btn btn-info" href="input.php">Tambah data</a>
        <table class="table mt-2" style="border: 1px solid black; width: 700px; ">
            <thead>
                <tr>
                    <th scope="col" style="width: 40px;">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($db->tampil_data() as $user) {
                ?>
                    <tr>
                        <th scope="row" style="width: 40px;"><?php echo $no++ ?></th>
                        <td><?php echo $user['nama'] ?></td>
                        <td><?php echo $user['alamat'] ?></td>
                        <td><?php echo $user['nohp'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $user['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                            <a href="proses.php?id=<?php echo $user['id'] ?>&aksi=delete" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>