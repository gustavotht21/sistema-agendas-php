<?php
function connect(): mysqli
{
    $server = 'laradock_mysql_1';
    $user = 'root';
    $password = 'root';
    $database = 'sistema_agendas';

    return new mysqli($server, $user, $password, $database);
}
$connection = connect();



