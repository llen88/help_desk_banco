<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/darkly/bootstrap.min.css">

    <noscript>
        <link rel="stylesheet" href="css/bootstrap-darkly.min.css">
    </noscript>


    <style>
        .card {
            padding: 10px 0 10 0;
            margin: auto;
            align-items: center;
        }

        .card-login {
            padding: 10px 0 0 0;
            width: 50%;
            margin: auto;
            margin-top: 20%;
        }

        .form-group {
            margin-bottom: 5px;
        }

        .btn {
            width: 100px;
            justify-content: center;
            align-items: center;
            margin: auto;
        }
    </style>

    <script src="script.js" type="text/javascript" defer></script>


</head>

<body>
    <!--login-->
    <nav class="navbar navbar-dark bg-dark">
        <img src="./img/logoChapeu.png" width="50" height="50" class="d-inline-block align-top" alt="Logo of a hat">
        <a class="navbar-brand" href="#">help desk</a>

    </nav>

    <div class="container">
        <div class="row">
            <div class="card-login">
                <div class="card">
                    <h5 class="card-title">Login</h5>
                    <img src="./img/user.png" width="200" height="200">
                </div>
                <div class="card-body">
                    <form action="valida_login.php" method="post">
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group" method="post">
                            <input name="senha" type="password" class="form-control" placeholder="Senha">
                        </div>

                        <?php
                        if (isset($_GET['login']) && $_GET['login'] === 'erro') { ?>
                            <div class="text-danger"> Usuário ou senha inválido(s)!</div>
                        <?php } ?>

                        <?php

                        if (isset($_GET['login']) && $_GET['login'] === 'erro2') { ?>
                            <div class="text-danger"> login obrigatorio!</div>
                        <?php }  ?>

                        <button class="btn btn-primary d-block mx-auto">Entrar</button>

                </div>
                <div class="form-group">
                    <a href="cadastro.php"><span>Ainda não cadastrado? Cadastre-se Já! 🙂</span></a>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>