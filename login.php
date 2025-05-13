<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</html>
    <style>
        form
         {
            width: 500px;
        }
        
    </style>

<body class="bg-light">
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4">

        <h1 class="text-center text-secondary">
            Login no Sistema
        </h1>

            <form action="login_processa.php" method="post">
                <p class="mb-3">
                    Digite seu Login <br>
                    <input type="text" name="login" class="form-control">
                </p>

                <p>
                    Digite sua Senha <br>
                    <input type="password" name="senha" class="form-control">
                </p>

                <p>
                    <input type="submit" name="Fazer Login" class="btn btn-secondary">
                </p>

                <p class="text-danger">
                    <?php

                        session_start();

                        if (isset($_SESSION["erro"]));

                    ?>
                </p>

            </form>

    </div>
</div>

</body>
</html>