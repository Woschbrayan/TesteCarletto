<?php

include('Sql.php');

//recebendo os valores passado no arquivo anterior
$id_produto = $_POST['idProduto'] ??  null;
$produto = $_POST['EditProduto'] ??  null;
$descricao =$_POST['EditDescricao'] ?? null;
$tipo = $_POST['EditTipo'] ?? null;
$valor =$_POST['EditValor'] ?? null;
$qtd = $_POST['EditQtd'] ?? null;
$detalhes = $_POST['EditDetalhes'] ?? null;

//Comando update
$sql = "UPDATE produto SET 
               nome_produto= '$produto',
               descricao_produto= '$descricao',
               tipo_produto= '$tipo',
               valor_produto= '$valor', 
               quantidade_produto= '$qtd',
               detalhes_produto='$detalhes'
               WHERE id_produto= $id_produto";


//Try Catch
try{
               mysqli_query($mysqli,$sql);
               echo "<script>alert('Produto Atualizado Com Sucesso');</script>";    
               header("Location: /TesteCarlettoCrud/home.php/");
               
}catch(\Exception $e){
               echo "<script>alert('Erro ao Atualizar Produto');</script>";
}

          
?>