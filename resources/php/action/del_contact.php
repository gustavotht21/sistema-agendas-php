<?php
require_once 'resources/php/action/connection.php';

$email = $_POST['email'];

$sqlDelete = "DELETE FROM contatos WHERE email='$email'";
$resultDelete = $connection->query($sqlDelete);

$verifyDuplicateImages = glob("../../../public/contacts/$email.*");
if ($verifyDuplicateImages > 0) {
    foreach ($verifyDuplicateImages as $img) {
        unlink($img);
    }
}

if ($resultDelete) {
    $mensagem = 'Contato excluído com sucesso';
    $tipoMensagem = 'Sucesso';
} else {
    $mensagem = 'Ocorreu um erro ao tentar deletar o contato';
    $tipoMensagem = 'Erro';
}
header("Location: ../../../?pg=excluir_contato&mensagem={$mensagem}&tipo={$tipoMensagem}");

