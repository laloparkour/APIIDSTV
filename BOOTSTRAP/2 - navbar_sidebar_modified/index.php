<?php
    include_once "app/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body class="m-0 vh-100 d-flex align-items-center">
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <img src="public/img/logo.png" alt="" class="d-block mx-auto" width="150px" height="auto">
                <h1 class="d-block mx-auto text-center">Login</h1>
                <form action="<?= BASE_PATH ?>auth" method="POST">

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>

                    <input type="hidden" name="action" value="access">
                    <input type="hidden" name="super_token" value="<?= $_SESSION['super_token']?>">

                    <button type="submit" class="btn btn-primary">Login</button>

                </form>
            </div>
        </div>
    </div>
    <script>
    </script>
</body>
</html>