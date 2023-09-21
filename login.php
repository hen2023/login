<?php
 require_once "conexao.php";
  session_start();

if(isset($_POST['nome']) && isset($_POST['senha'])){

  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
 


$sql="SELECT * FROM usuarios WHERE nome ='$nome' AND senha ='$senha'";
$result = $conn->query($sql);

if($result->num_rows > 0){
$_SESSION['usuario']=$nome;
header('location:home.php');
exit();
}else{
header('location:index.php');
exit();
}

}else{
  header('location:index.php');
  exit();
}

?>















