<?php  

require_once("config.php");

// $user = new Usuario();
// $user->loadById(4);
// echo $user;

// $lista = Usuario::getList();
// echo json_encode($lista);

// $search = Usuario::search("a");
// echo json_encode($search);

// $user = new Usuario();
// $user->login("alfredo", "alf45");
// echo $user;

// $user = new Usuario("aluno", "$%^d");

// $user->insert();

// echo $user;

// $user = new Usuario();
// $user->loadById(8);
// $user->update("prof", "sdfsdf");

// echo $user;

$user = new Usuario();
$user->loadById(7);
$user->delete();

echo $user;
?>
