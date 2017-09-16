<?php
require 'Cliente.php';
require 'ListaClientes.php';
session_start();
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo center">Clientes</a>
          </div>
        </nav>
      </div>
      <div class="container">
        <main>
          <div class="espacamento">
            <a class="waves-effect waves-light btn" href="index.php?ordem=crescente">Ordem Crescente</a>
            <a class="waves-effect waves-light btn right" href="index.php?ordem=decrescente">Ordem Decrescente</a>
          </div>
          <?
          if(is_null($_SESSION['$clientes'])){
              $_SESSION['$clientes'] = $clientes;
          }
          if ($_GET['ordem'] == "crescente" ) {
                $_SESSION['$clientes'] = $clientes;
                sort($_SESSION['$clientes']);
              ?>
              <?php
          } else if ($_GET['ordem'] == "decrescente") {
                $_SESSION['$clientes'] = $clientes;
                rsort($_SESSION['$clientes']);
          }
          foreach ($_SESSION['$clientes'] as $cliente) {

              if ($_GET['ref'] == $cliente->getId()) {
                  ?>
                  <table>
                      <thead>
                          <tr>
                              <th>Nome</th>
                              <th>CPF</th>
                              <th>Endereço</th>
                              <th>Telefone</th>
                          </tr>
                      </thead>

                      <tbody>
                          <tr>
                              <td><?= $cliente->getNome(); ?></td>
                              <td><?= $cliente->getCpf(); ?></td>
                              <td><?= $cliente->getEndereco(); ?></td>
                              <td><?= $cliente->getTelefone(); ?></td>
                      <br>
                      </tr>
                      </tbody>
                  </table>
      <?php } else { ?>
                  <form method='get'>
                      <input type="hidden" name="ref" value="<?= $cliente->getId(); ?>">
                      <ul class="collection">
                          <li class="collection-item"><?= $cliente->getNome(); ?><button class="secondary-content" type="submit" name="enviar"><i class="material-icons">send</i></button></li>
                      </ul>
                  </form>
      <?php
            }
        }
        ?>
        </main>
      </div>
    </body>
</html>
