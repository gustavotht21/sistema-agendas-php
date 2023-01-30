<?php
function connect(): mysqli
{
    $server = 'localhost';
    $user = 'u548085719_gustavo';
    $password = '+3n5UwfY5';
    $database = 'u548085719_sistema_agenda';

    return new mysqli($server, $user, $password, $database);
}
$connection = connect();