<?php 

require_once("config.php");

$root = new Usuario();

$root->loadById(2);

echo $root;

?>