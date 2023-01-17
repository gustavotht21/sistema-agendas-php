<?php
include_once 'resources/php/action/connection.php';

$sql = "SELECT * FROM paises";
$result = $connection->query($sql);

while ($registro = $result->fetch_assoc()) {
    $name = $registro['pais'];
    print "<option value='$name'>$name</option>";
}