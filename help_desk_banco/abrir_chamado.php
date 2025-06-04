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
  <link rel="icon" href="img/iconSite.png" type="image/x-icon">

  <style>
    .card-abrir-chamado {
      padding: 20px 0 0 0;
      width: 40%;
      margin: 0 auto;
      text-align: center;
    }

    .card {
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(red, green, blue, alpha);
      overflow: hidden;
    }

    .card-header {
      font-size: 1.3rem;
      font-weight: 500;
      background-color: #212529;
      color: #fff;
    }

    .card-body {
      background-color: #343A40;
      padding: 20px;
    }

    .form-control,
    .form-select {
      background-color: #495057;
      border: none;
      color: #fff;
      box-shadow: none;
    }

    .form-control:focus,
    .form-select:focus {
      background-color: white;
      color: grey;
      border: 1px solidrgb(0, 221, 255);
      transition: all 0.5s ease-in-out;

    }

    .btn {
      border-radius: 15px;
      width: 100%;
      margin: 0 auto;
      padding: 14px;
      font-weight: bold;
      transition: all 0.3s ease-in-out;
      box-shadow: 0 10px 5px rgba(0, 0, 0, 0.2);
    }

    .btn-info:hover {
      background-color: #138496;
      transform: translateY(-8px);
    }

    .btn-warning:hover {
      background-color: #ff8c00;
      transform: translateY(-8px);

    }

  @media (max-width: 1040px) {
    .card-abrir-chamado {
      width: 60%;
    }
  }

  @media (max-width: 768px) {
    .card-abrir-chamado {
      width: 80%;
    }

    .card-header {
      font-size: 1.1rem;
    }

    .btn {
      padding: 12px;
      font-size: 1rem;
    }
  }

  @media (max-width: 480px) {
    .card-abrir-chamado {
      width: 95%;
    }

    .card-header {
      font-size: 1rem;
    }

    .card-body {
      padding: 15px;
    }

    .btn {
      padding: 10px;
      font-size: 0.95rem;
    }
    }
  </style>

</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="img/logoChapeu.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-abrir-chamado">
        <div class="card">
          <div class="card-header">
            Abertura de chamado
            <?php if (isset($_GET['cadastro']) && $_GET['cadastro'] === 'efetuado') { ?>
              <script>
                alert('Chamado cadastrado com sucesso')
              </script>
            <?php } ?>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">

                <form action="registra_chamado.php" method="POST">
                  <div class="form-group">
                    <label>Título</label>
                    <input type="text" class="form-control" name="titulo" placeholder="Título">
                  </div>

                  <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">
                      <option>Criação Usuário</option>
                      <option>Impressora</option>
                      <option>Hardware</option>
                      <option>Software</option>
                      <option>Rede</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control" rows="3" name=descricao></textarea>
                  </div>

                  <div class="row mt-5">
                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info" type="submit">Abrir</button>
                      </div>
                    </div>
                  </div>
                  <script>


                  </script>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>