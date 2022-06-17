<?php 

require_once("config.php");

//carrga um usuário
//$root = new usuario();
//$root->loadById(1);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("Ge");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new usuario ();
//$usuario->login("Tata", "9298");
//echo $usuario;

// Criando um novo usuario novo
///$aluno = new Usuario("Linkin", "1234");
//Se não tiver o metodo construtor no usuario.php
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");
///$aluno->insert();
///echo $aluno;

//Alterar um usuario
//$usuario = new Usuario ();
//$usuario->loadByid(7);
//$usuario ->update("logistica", "gamagama");
//echo $usuario;

$usuario = new Usuario();
$usuario->loadById(6);
$usuario->delete();
echo $usuario;


// teste começo
//$sql = new sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

 ?>