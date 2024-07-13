<?php
include './manfunctions.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Oops Crud</h1>
            <div class="col-lg-12 mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sno</th>
                            <th scope="col">Name</th>
                            <th scope="col">Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $res = $mf->getAlldata($link, 'user');
                        foreach ($res as $key => $row) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $key + 1 ?></th>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['number'] ?></td>
                                <td><?php echo $row['place'] ?></td>
                                <td><a href="edit.php?userid=<?php echo $row['id'] ?>"><button class="btn btn-warning">Edit</button></a>
                                <a href="manfunctions.php?userid=<?php echo $row['id'] ?>&submit=delete"><button class="btn btn-danger">Delete</button></a>
                            </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>