<?php
require_once 'resources/php/action/connection.php';

$default_foto = glob("../../../public/contacts/{$_POST['emailOriginal']}.*");
$default_foto = explode("/", "$default_foto[0]");
$default_foto = $default_foto[5];


require 'functions.php';

$tipo = $_FILES['foto']['name'];
$arquivo = $_FILES['foto']['tmp_name'];
$result = up_image($tipo, $arquivo, $_POST['email']);

$nameImage = (empty($result)) ? $default_foto : $result;

$sqlEdit = "UPDATE contatos SET email='{$_POST['email']}', nome='{$_POST['nome']}', sexo='{$_POST['sexo']}', nascimento='{$_POST['nascimento']}', telefone='{$_POST['numero']}', pais='{$_POST['pais']}', imagem='{$nameImage}' WHERE email='{$_POST['emailOriginal']}'";

$resultEdit = $connection->query($sqlEdit);
if ($resultEdit) {
    $mensagem = 'Sucesso ao editar';
    $tipoMensagem = 'Sucesso';
} else {
    $mensagem = "Ocorreu um erro ao tentar editar o contato. Talvez o novo email inserido já existe em outro contato";
    $tipoMensagem = 'Erro';
}
$connection->close();
header("Location: ../../../?pg=editar_contato&mensagem={$mensagem}&tipo={$tipoMensagem}");