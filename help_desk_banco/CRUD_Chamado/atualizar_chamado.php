<?php
require_once "../validador_acesso.php";
require_once "../config.php";

$sql = "SELECT * FROM chamados WHERE id_chamado = {$_GET['id']}";
$res =  $conexao -> query($sql);
$qtd = $res->num_rows;
$row=$res->fetch_object();

$sql = "SELECT * FROM usuarios";
$resusuarios = $conexao -> query($sql);
$qtdusuarios = $resusuarios-> num_rows; 
?>


<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <link rel="icon" href="../img/iconSite.png" type="image/x-icon">
  <style>
    .card-abrir-chamado {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
    }
    .hide-on-small {
      display: none;
    }
    body{
      background-color: rgb(34, 34, 35);

    }
    .card-body{
          background-color: rgb(25, 25, 25);
    }
    .label{
      color:#fff;
    }
    .btn{
      color:#fff

    }
    a :hover{
      color:black

    }
    #ordemServico{
      font-weight:bold ;
    }
    @media (min-width: 1000px) {
      .hide-on-small {
        display: inline;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php">
      <img src="../img/logoChapeu.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Editar Chamado</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="editar_chamado.php">VOLTAR</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">
      <div class="card-abrir-chamado">
        <div class="card">
          <div  id="OrdemServico" class="card-header">Ordem de Serviço <?php print $row->id_chamado; ?></div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <!-- formulario com o caminho dos chamdos -->
                <form action="conf_atualizar.php" method="POST">
                <!--  numero do chamado-->
                   <input name="id_chamado" type="hidden" class="form-control" value="<?php print $row->id_chamado; ?>" required>
                    
                  <div class="form-group">
                  
                    <!-- titulo -->
                     <label for="titulo">Titulo</label>
                    <input name="titulo" type="text" class="form-control" value="<?php print $row->titulo; ?>" required autofocus>
                  </div>

                  <div class="card-body">
                    <div class="row">
                      <div class="col-6 d-flex justify-content-center">
                        <label  class="label"class="col-2 d-flex justify-content-center align-self-center hide-on-small">Categoria: </label>
                            <!-- categoria -->
                        <select name="categoria" class="form-control" required>
                          <option value="<?php print $row->categoria; ?>" selected><?php print $row->categoria; ?></option>
                          <option value="Criação Usuário">Criação Usuário</option>
                          <option value="Impressora">Impressora</option>
                          <option value="Hardware">Hardware</option>
                          <option value="Software">Software</option>
                          <option value="Rede">Rede</option>
                          <option value="Formatação">Formatação</option>
                          <option value="Orçamento">Orçamento</option>
                          <option value="Desenvolvimento">Desenvolvimento</option>
                          <option value="Outros">Outros</option>
                        </select>
                 </div>
                        </select>
                                <!-- status -->
                         <div class="col-6 d-flex justify-content-center">
                        <label class="label" class="col-2 d-flex justify-content-center align-self-center hide-on-small">Status: </label>
                        <select name="status" class="form-control" required>
                          <option value="" disabled selected>Escolha</option>
                          <option value="Aberto">Aberto</option>
                          <option value="Andamento">Em andamento</option>
                          <option value="Finalizado">Finalizado</option>
                        </select>
                      </div>
                    </div>
                  </div>
                    <!-- descrição do Usuario -->
                   <div class="form-group">
                    <label class="label">Descrição do Usuário</label>
                    <textarea name="descricao" class="form-control" rows="3" required disabled><?php echo trim($row->descricao); ?></textarea>
                  </div>

                      <!-- </div> -->
                       <!-- Descrição do Técnio -->
                  <div class="form-group">
                    <label class="label">Descrição do Técnico</label>
                    <textarea name="descricaotecnico" class="form-control" rows="3" required><?php echo trim($row->descricaotecnico); ?></textarea>
                  </div>
                
                    <!-- valor -->
                <div class="form-group">
                <label class="label">Valor</label>
                <input name="valor" type="text" class="form-control" value="<?php print $row->valor; ?>" required autofocus>
                </div>

                <div class="row mt-5">
                    <div class="col-6">
                      <a rel="prev" class="btn btn-lg btn-warning btn-block" href="editar_chamado.php">Cancelar</a>
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