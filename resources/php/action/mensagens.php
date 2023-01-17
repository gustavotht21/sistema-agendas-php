<?php
if (isset($_GET['mensagem']) && isset($_GET['tipo'])) {
    $mensagem = $_GET['mensagem'];
    $class = ($_GET['tipo'] == 'Sucesso') ? 'bg-success' : 'bg-danger';
    echo "<p class='{$class} p-2 rounded-2 text-white fw-bold'>$mensagem</p>";
}
?>