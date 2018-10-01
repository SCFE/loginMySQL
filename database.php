<?php
/*
$conexion = mysql_connect('localhost', 'root', 'cloud') 
or die('No se pudo conectar: ' . mysql_error());

echo 'conexion satisfactoria';

mysql_select_db('company') or die ('No se pudo seleccionar la base de datos');
*/


try
{
        $mbd = new PDO('mysql:host=localhost;dbname=company', 'root', '');
        echo 'Conexion exitosa';
}
catch(PDOException $e)
{
        die('fallo en la conexion: '. $e->getMessage());
}


?>