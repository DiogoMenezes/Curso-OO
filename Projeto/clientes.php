<?php
require_once('BancoClientes.php');
$banco = new BancoClientes();
$cliente = $banco->getCliente($_GET['id']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">Gestão de Clientes</a>
        </div>
    </nav>
</div>
<div class="container">
    <main>
        <div class="panel panel-primary">
                <div class="panel-heading"> <?php echo $cliente->getNome()?> </div>
                <div class="panel-body">
                        <?php
                            echo "<b>Nome: </b>".$cliente->getNome()."<br>";
                            echo "<b>Endereço: </b>".$cliente->getEndereco()."<br>";
                            echo "<b>CPF: </b>".$cliente->getCPF()."<br>";
                        ?>
                    </div>
                <div class="panel-footer">
                        <a href="index.php" class="btn btn-default">Voltar</a>
                    </div>
            </div>
    </div>
</body>
</html>