<?php
$username = "elodies"; // à personnaliser
$password = "akira";  // à personnaliser
$randomword = "kdhjgukdfsg;hw"; // ce que tu veux

//on peut mettre l'IP du visteur pour plus de securité
// decommenter la ligne çi-dessous
$randomword .= $_SERVER['REMOTE_ADDR']; 

$cookie = md5($password.$randomword);
?>