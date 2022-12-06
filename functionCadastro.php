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

//sql de para inserir no banco de dados
$sql ="INSERT INTO produto (id_produto, nome_produto, descricao_produto, tipo_produto, valor_produto, quantidade_produto, data_registro) 
VALUE (default,'$produto', '$descricao', '$tipo', $valor, $qtd, CURTIME())";

//tentar executar o sql caso de errado erxibir erro
try{
               mysqli_query($mysqli,$sql);  
             //header('Location: ../TesteCarlettoCrud/cadastrarProduto.php/'); retornar a pagina home
exit;       
}catch(\Exception $e){
               echo"erro: ".$e;
}

?>
