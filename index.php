<?php 

require_once("config.php");
//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carregar usuario usando login e senha
//$usuario = new Usuario();
//$usuario->login("root", "321");
//echo $usuario;

//Criando um novo usuario
// $aluno = new Usuario("aluno", "@lun0");
// $aluno->insert();
// echo $aluno;

$usuario = new Usuario();
$usuario->loadById(4);
$usuario->update("professor", "123456");
echo $usuario;





 ?>