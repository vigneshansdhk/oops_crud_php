<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5    ">
            <div class="col-lg-12">
                <form action="manfunctions.php" method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" type="text" name="name" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Mobile number</label>
                        <input class="form-control" type="number" name="number" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Place</label>
                        <input class="form-control" type="text" name="place" id="">
                    </div>
                    <div class="form-group mt-5">
                        <input class="btn btn-primary" type="submit" name="submit" value="create">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                            crossorigin="anonymous"></script>
</body>

</html>