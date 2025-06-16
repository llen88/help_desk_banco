<?php
require_once "../validador_acesso.php";

require "../config.php";

//require
//include
//include_once

if ($_SESSION['perfil'] != 'adm') {
  $sql = "SELECT * FROM chamados WHERE id_usuario = {$_SESSION['id']}";
} else {
  $sql = "SELECT * FROM chamados";
}

$res = $conexao->query($sql);
$qtd = $res->num_rows;

$sql = "SELECT * FROM usuarios";
$resusuarios = $conexao->query($sql);
$qtdusuarios = $resusuarios->num_rows;
?>

<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/slate/bootstrap.min.css">
  <link rel="icon" href="../img/iconSite.png" type="image/x-icon">

  <style>
    
    .card-consultar-chamado {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
    }

    .card{
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(7, 48, 2, 0.3);
      overflow: hidden;
    }

    .card-header {
      font-size: 1.3rem;
      font-weight: 500;
      background-color:rgb(70, 8, 8);
      color: #fff;
    }

    .btn {
      border-radius: 15px;
      width: 50%;
      margin: 0 auto;
      padding: 10px;
      font-weight: bold;
      transition: all 0.3s ease-in-out;
      box-shadow: 0 10px 5px rgba(0, 0, 0, 0.2);
    }

    .btn-block:hover{
      background-color: #ff8c00;
      transform: translateX(8px);
      transform: scale(3px);
    }

    .card-body2{
      background-color:rgb(24, 24, 24);
      width: 100%;
      padding: 20px;
    }


  </style>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="../img/logoChapeu.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header">
            Consulta de chamado
          </div>

          <div class="card-body">

            <?php while ($row = $res->fetch_object()) { ?>

              <div class="card mb-3 bg-light">
                <div class="card-body2">

                  <h5 class="card-title"><?php echo $row->titulo ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"> <?php echo $row->categoria ?></h6>

                  <p class="card-text"><?php echo $row->descricao ?> </p>
                  <h6 class="card-subtitle mb-2 text-muted" style="text-align: center;">
                    <?php
                    $idchamado = $row->id_chamado;
                    $idusuario = $row->id_usuario;
                    $resusuarios->data_seek(0);
                    while ($user = $resusuarios->fetch_object()) {
                      if ($user->id_usuario == $idusuario) {
                        echo '<p style="color: green; margin-bottom: 2px;"> Usuário: ' . $user->nome . '</p>';
                        break; // Sair do loop após encontrar o usuário
                      }
                    }
                    ?>
                  </h6>
                  <h6 class="card-title" style="text-align: right;">Ordem de Serviço: <?php echo $row->id_chamado ?></h6>
                </div>
              </div>
            <?php } ?>


            <div class="row mt-5">
              <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="../home.php">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>