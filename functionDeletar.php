<?php
include('Sql.php');
$id_produto = $_GET['numProduto'] ??  null;
$sql = "DELETE FROM produto WHERE id_produto =$id_produto";
 try{
               mysqli_query($mysqli,$sql);
               echo"<script>window.comfim('Produto Deletado!')</script>";
               header("Location: /TesteCarlettoCrud/home.php/");
               
              
}catch(\Exception $e){
               echo"<script>alert('Erro ao deletar Produto!')</script>";
}



?>