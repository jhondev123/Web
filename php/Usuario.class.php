<?php
class Usuario{
public function login ($email,$Senha){
global $pdo;
$sql = "SELECT * FROM usuario WHERE email = :email AND Senha = :Senha";
$sql=$pdo->prepare($sql);
$sql->bindvalue("email",$email);
$sql->bindvalue("Senha",md5($Senha));
$sql->execute();

if($sql->rowCount()>0){
    $dado=$pdo->fetch();
    echo $dado ["idusuario"];
}
}

}


?>