<?php
//incluindo Conexões
include('Sql.php');
include('cadastrarProduto.php');

//recebendo os valores passado na cadastrarProduto.php
$produto = $_POST['produto'] ??  null;
$descricao =$_POST['descricao'] ?? null;
$tipo = $_POST['tipo'] ?? null;
$valor =$_POST['valor'] ?? null;
$qtd = $_POST['qtd'] ?? null;
$detalhes = $_POST['detalhes'] ?? null;

//sql de para inserir no banco de dados
$sql ="INSERT INTO produto VALUES (default,'$produto', '$descricao', '$tipo', $valor, $qtd, CURTIME(), '$detalhes')";

mysqli_query($mysqli,$sql);  

if(mysqli_insert_id($mysqli)){
	echo "<script>alert('Produto inserido com sucesso');</script>";
}else{
  echo "<script>alert('Erro ao inserir o Produto');</script>";
}

?>
