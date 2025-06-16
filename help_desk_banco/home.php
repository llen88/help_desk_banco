<?php
require_once "validador_acesso.php";
require_once "config.php";
//require
//include
//include_once
 
$sql = "SELECT perfil FROM usuarios WHERE id_usuario = {$_SESSION['id']}";
$res = $conexao->query($sql);
$row = $res->fetch_object();
 
?>
 
 
 
<html>
 
<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/darkly/bootstrap.min.css">
  <link rel="icon" href="img/iconSite.png" type="image/x-icon">
 
 
  <style>
    .card-home {
      padding: 50px 0 0 0;
      width: 100%;
      margin-top: 20px;
 
    }
 
    button {
      border-radius: 10px;
      color: 'white';
      background-color: yellow;
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
 
    .card-body {
      background-color: #343A40;
      color: white;
    }
 
    .imagemCentral {
      width: 45%;
      margin: 50px auto;
      display: block;
    }
 
    p {
      text-align: 'center';
      color: chocolate;
      font-weight: bold;
    }
 
    a {
      text-decoration: none;
      text-align: 'center';
 
    }
 
    .row {
      flex: 1;
      align-items: center;
      justify-content: 'center';
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
                <a href="./CRUD_Chamado/abrir_chamado.php">
                  <img src="./img/formulario.png" width="70" height="70">
                  <p>Abrir chamado</p>
                </a>
              </div>
 
                <div class="col-2 d-flex justify-content-center">
                <a href="./CRUD_Chamado/consultar_chamado.php">
                  <img src="./img/consultar-chamado.png" width="70" height="70">
                  <p>Consultar</p>
                </a>
                </div>
 
                <?php if (isset($row->perfil) && $row->perfil != 'Adm' && $row->perfil != 'Tec') { ?>
                <!-- Acesso restrito - botões desabilitados -->
                <div class="col-2 d-flex justify-content-center">
                  <a href="#" style="filter: grayscale(100%); opacity: 0.5;">
                  <img src="./img/editar-chamado.png" width="70" height="70">
                  <p>Editar</p>
                  </a>
                </div>
 
                <div class="col-2 d-flex justify-content-center">
                  <a href="#" style="filter: grayscale(100%); opacity: 0.5;">
                  <img src="./img/autorizar.png" width="70" height="70">
                  <p>Autorizar</p>
                  </a>
                </div>
 
                <div class="col-2 d-flex justify-content-center">
                  <a href="#" style="filter: grayscale(100%); opacity: 0.5;">
                  <img src="./img/icon-usuario.png" width="70" height="71">
                  <p>Usuarios</p>
                  </a>
                </div>
 
                <div class="col-2 d-flex justify-content-center">
                  <a href="#" style="filter: grayscale(100%); opacity: 0.5;">
                  <img src="./img/consulta-de-pesquisa.png" width="70" height="70">
                  <p>Relatorios</p>
                  </a>
                </div>
 
                <?php } elseif (isset($row->perfil) && $row->perfil == 'Tec') { ?>
                <!-- Técnico - só até o botão de editar funciona -->
 
                <div class="col-2 d-flex justify-content-center">
                  <a href=" ./CRUD_Chamado/editar_chamado.php">
                  <img src="./img/editar-chamado.png" width="70" height="70">
                  <p>Editar</p>
                  </a>
                </div>
 
                <div class="col-2 d-flex justify-content-center">
                  <a href="#" style="filter: grayscale(100%); opacity: 0.5;">
                  <img src="./img/autorizar.png" width="70" height="70">
                  <p>Autorizar</p>
                  </a>
                </div>
 
                <div class="col-2 d-flex justify-content-center">
                  <a href="#" style="filter: grayscale(100%); opacity: 0.5;">
                  <img src="./img/icon-usuario.png" width="70" height="71">
                  <p>Usuarios</p>
                  </a>
                </div>
 
                <div class="col-2 d-flex justify-content-center">
                  <a href="#" style="filter: grayscale(100%); opacity: 0.5;">
                  <img src="./img/consulta-de-pesquisa.png" width="70" height="70">
                  <p>Relatorios</p>
                  </a>
                </div>
               
                <?php } elseif (isset($row->perfil) && $row->perfil == 'Adm') { ?>
                <!-- Administrador - acesso total -->
 
                <div class="col-2 d-flex justify-content-center">
                  <a href="./CRUD_Chamado/editar_chamado.php">
                  <img src="./img/editar-chamado.png" width="70" height="70">
                  <p>Editar</p>
                  </a>
                </div>
 
                <div class="col-2 d-flex justify-content-center">
                  <a href="./CRUD_Usuarios/autorizar_usuario.php">
                  <img src="./img/autorizar.png" width="70" height="70">
                  <p>Autorizar</p>
                  </a>
                </div>
 
                <div class="col-2 d-flex justify-content-center">
                  <a href="CRUD_Usuarios/usuarios.php">
                  <img src="./img/icon-usuario.png" width="70" height="71">
                  <p>Usuarios</p>
                  </a>
                </div>
 
                <div class="col-2 d-flex justify-content-center">
                  <a href="./relatorios/relatorios.php">
                  <img src="./img/consulta-de-pesquisa.png" width="70" height="70">
                  <p>Relatorios</p>
                  </a>
                </div>
                <?php } ?>
 
            </div>
          </div>
        </div>
        <img class="imagemCentral" src="./img/central.webp" alt="">
      </div>
    </div>
  </div>
</body>
 
</html>

<!-- /*
 ./CRUD_Chamado/consultar_chamado.php
 ./CRUD_Chamado/editar_chamado.php
 ./CRUD_Usuarios/autorizar_usuario.php
  CRUD_Usuarios/usuarios.php
 Relatorio/relatorios.php
 
 
*/ -->
 