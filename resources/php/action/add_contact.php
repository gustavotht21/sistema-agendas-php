<?php
require_once 'resources/php/action/connection.php';

$information = [
    'email' => $_POST['email'],
    'nome' => $_POST['nome'],
    'sexo' => $_POST['sexo'],
    'nascimento' => $_POST['nascimento'],
    'numero' => $_POST['numero'],
    'pais' => $_POST['pais'],
];
$default_foto = ($information['sexo'] == 'M') ? "masculino.png" : "feminino.png";

$sqlConfirma = "SELECT * FROM contatos WHERE email='{$information['email']}'";
$result = $connection->query($sqlConfirma);
if ($result->num_rows > 0) {
    $mensagem = "O email inserido já existe em outro contato. Por favor, tente inserir outro";
    $tipoMensagem = 'Erro';
} else {
    require 'functions.php';
    $tipo = $_FILES['foto']['name'];
    $arquivo = $_FILES['foto']['tmp_name'];
    $result = up_image($tipo, $arquivo, $information['email']);

    $nameImage = (empty($result)) ? $default_foto : $result;

    $sqlInsert = "INSERT INTO contatos (email, nome, sexo, nascimento, telefone, pais, imagem) VALUES ('{$information['email']}', '{$information['nome']}', '{$information['sexo']}', '{$information['nascimento']}', '{$information['numero']}', '{$information['pais']}', '$nameImage')";
    $result = $connection->query($sqlInsert);

    if ($result) {
        $mensagem = 'Sucesso ao cadastrar';
        $tipoMensagem = 'Sucesso';
    } else {
        $mensagem = "Ocorreu um erro ao tentar cadastrar o contato";
        $tipoMensagem = 'Erro';
    }

}

$connection->close();
header("Location: ../../../?pg=adicionar_contato&mensagem={$mensagem}&tipo={$tipoMensagem}");

