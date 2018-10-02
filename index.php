<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * From tb_usuarios");
	
echo json_encode($usuarios);*/


$root = new Usuario();

$root->loadById(4);

echo $root;
	
?>