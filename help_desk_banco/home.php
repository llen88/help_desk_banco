<?php
require_once "validador_acesso.php";
//require
//include
//include_once

?>



<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/darkly/bootstrap.min.css">


  <style>
    .card-home {
      padding: 50px 0 0 0;
      width: 100%;
      margin-top: 20px;
      
    }

    button {
      border-radius: 10px;
      color: 'white';
      background-color:yellow;
      width: 80px;
      height: 40px;
      margin: 10px auto;
      display: block;
      font-weight: bold;
      font-size: 16px;
    }

    button:hover {
      color: 'white';
      background-color: #343A40;
      color: red;
    }

    .card-body{
      background-color: #343A40;
      color: white; 
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="img/logoChapeu.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
    <div>
      <a href="index.php">
        <button>Sair</button> </a>
    </div>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-home">
        <div class="card">
          <div class="card-header">
            Menu
          </div>
          <div class="card-body">
            <div class="row">


              <div class="col-2 d-flex justify-content-center">
                <a href="abrir_chamado.php">
                  <img src="./img/formulario.png" width="70" height="70">
                </a>
              </div>


              <div class="col-2 d-flex justify-content-center">
                <a href="consultar_chamado.php">
                  <img src="./img/consultar-chamado.png" width="70" height="70">
                </a>
              </div>

              <div class="col-2 d-flex justify-content-center">

                <a href="editar_chamado.php">
                  <img src="./img/editar-chamado.png" width="70" height="70">
                </a>

              </div>

              <div class="col-2 d-flex justify-content-center">
                <a href="edit-chamado">
                  <img src="./img/autorizar.png" width="70" height="70">
                </a>
              </div>

              <div class="col-2 d-flex justify-content-center">
                <a href="autorizar-usuarios.php">
                  <img src="./img/icon-usuario.png" width="70" height="70">
                </a>
              </div>

              <div class="col-2 d-flex justify-content-center">
                <a href="relatorios.php">
                  <img src="./img/consulta-de-pesquisa.png" width="70" height="70">
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>