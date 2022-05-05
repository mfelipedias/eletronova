<!doctype html>
<html lang="en">
<?php 
error_reporting(0);
$retorno = $_GET['retorno']; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Eletronova - Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
</head>

<body class="text-center">


    <main class="form-signin">      
        <div class="col" style="width: 300px;">
            <?php
            if ($retorno != "") {
                include './includes/return/erro.php';
            }
            ?>
        </div>

        <form action="scripts/login_.php" method="post">
            <img class="mb-4" src="./img/01.png" alt="" width="100%" height="100%">

            <div class="form-floating">
                <input type="text" class="form-control" id="u_user" name="u_user" placeholder="Usuário" required>
                <label for="floatingInput">Usuário</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="u_psw" name="u_psw" placeholder="Senha" required>
                <label for="floatingPassword">Senha</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Lembrar
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>