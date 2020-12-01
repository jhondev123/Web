<?php
if(isset($_POST['email'])&&!empty($_POST['email'])&&isset($_POST['Senha'])&&!empty($_POST['Senha'])){
require 'Index2.php';
require 'Usuario.class.php';
$u=new Usuario();
$login=addslashes($_POST['email']);
$Senha=addslashes($_POST['Senha']);
$u->login($email,$Senha);
}else{

    header("Location: login.html");

}
?>