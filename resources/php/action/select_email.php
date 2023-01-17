<?php
include_once 'resources/php/action/connection.php';

$sql = "SELECT * FROM contatos ORDER BY email";
$result = $connection->query($sql);

while ($registro = $result->fetch_assoc()) {
    $email = $registro['email'];
    print "<option value='$email'>$email</option>";
}