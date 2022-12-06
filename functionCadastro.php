<?php
//incluindo Conoos
include('Sql.php');
include('cadastrarProduto.php');
$produto = $_POST['produto'] ??  null;
$descricao =$_POST['descricao'] ?? null;
$id = $_POST['id'] ?? null;
$valor =$_POST['valor'] ?? null;
$qtd = $_POST['qtd'] ?? null;

$sql ="INSERT INTO produto (id_produto, nome_produto, descricao_produto, tipo_produto, valor_produto, quantidade_produto) 
VALUE (default,'$produto', '$descricao', 'eletronico', $valor, $qtd)";

try{
               mysqli_query($mysqli,$sql);  
             //  header('Location: ../TesteCarlettoCrud/cadastrarProduto.php/');
exit;       
}catch(\Exception $e){
               echo"erro: ".$e;
}

