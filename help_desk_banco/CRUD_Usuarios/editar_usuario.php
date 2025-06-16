<?php
require_once "../validador_acesso.php";
require_once "../config.php";

$sql = "SELECT * from usuarios WHERE id_usuario = {$_GET['id']}";
$res = $conexao->query($sql);
$qld = $res->num_rows;
$row = $res->fetch_object();
?>

<html>

<head>
    <meta charset="utf-8" />
    <title>App help desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="../img/logoChapeu.png" type="image/x-icon">

    <style>
        .card-abrir-chamado {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <nav class="nav-bar navbar-dark bg-dark">
        <a class="navbar-brand" href="../home.php">
            <img src="" alt="">
            <img src="../img/logoChapeu.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App help desk
        </a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-abrir-chamado">
                <div class="card">
                    <div class="card-header">Editar chamado</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="conf_edit_usuario.php" method="POST">

                                    <input name="id_usuario" type="hidden" class="form-control"
                                        value="<?php print $row->id_usuario; ?>" required>

                                    <div class="form-group">
                                        <label>ID: </label>
                                        <input name="id" type="text" class="form-control"
                                            value="<?php print $row->id_usuario; ?>" required disabled>
                                    </div>

                                    <div class="form-group">
                                        <label>Nome: </label>
                                        <input name="nome" type="text" class="form-control"
                                            value="<?php print $row->nome; ?>" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label>E-mail:</label>
                                        <input name="email" type="text" class="form-control"
                                            value="<?php print $row->email; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Perfil</label>
                                        <select name="perfil" class="form-control" required>
                                            <option value="" disabled selected><?php print $row->perfil; ?></option>
                                            <option value="Usuario">Adm</option>
                                            <option value="Adm">Adm</option>
                                            <option value="Tec">Tec</option>
                                        </select>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a class="btn btn-lg btn-warning btn-block" href="usuarios.php" rel="prev">Cancelar</a>
                                        </div>

                                        <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Salvar</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>