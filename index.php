<?php
switch ($_GET['pg']) {
    case 'home':
        $body = 'resources/php/pages/home.php';
        $title = 'Home';
        break;
    case 'adicionar_contato':
        $body = 'resources/php/pages/adicionar_contato.php';
        $title = 'Adicionar contatos';
        break;
    case 'excluir_contato':
        $body = 'resources/php/pages/excluir_contato.php';
        $title = 'Excluir contatos';
        break;
    case 'editar_contato':
        $body = 'resources/php/pages/editar_contato.php';
        $title = 'Editar contato';
        break;
    case 'consultar_contato':
        $body = 'resources/php/pages/consultar_contato.php';
        $title = 'Consultar contatos';
        break;
    default:
        header('Location: resources/php/pages/error.php');
        break;
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="public/images/contact.png" type="image/x-icon">
    <link rel="stylesheet" href="resources/css/style.css">
    <?php require_once 'resources/php/action/connection.php'?>
</head>
<body style="background-color: #e0f2fe">
    <div class="w-100 mt-3 d-flex justify-content-center">
        <img src="public/images/contact.png" alt="Logo" width="128">
    </div>
<?php require_once 'resources/php/includes/navbar.php' ?>
<?php require_once $body; ?>
</body>
</html>