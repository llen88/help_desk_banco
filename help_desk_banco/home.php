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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-home {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
    }

    button {

      border-radius: 5px;
      color: 'white';
    }

    button:hover {

      color: 'white';
      background-color: #343A40;
      color: '#ffff';
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
                  <img src="img/formulario_abrir_chamado.png" width="70" height="70">
                </a>
              </div>


              <div class="col-2 d-flex justify-content-center">
                <a href="consultar_chamado.php">
                  <img src="img/formulario_consultar_chamado.png" width="70" height="70">
                </a>
              </div>

              <div class="col-2 d-flex justify-content-center">
                <a href="abrir_chamado.php">
                  <img src="formulario_abrir_chamado.png" width="70" height="70">
                </a>
              </div>

              <div class="col-2 d-flex justify-content-center">
                <a href="abrir_chamado.php">
                  <img src="formulario_abrir_chamado.png" width="70" height="70">
                </a>
              </div>

              <div class="col-2 d-flex justify-content-center">
                <a href="abrir_chamado.php">
                  <img src="formulario_abrir_chamado.png" width="70" height="70">
                </a>
              </div>

                            <div class="col-2 d-flex justify-content-center">
                <a href="abrir_chamado.php">
                  <img src="formulario_abrir_chamado.png" width="70" height="70">
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