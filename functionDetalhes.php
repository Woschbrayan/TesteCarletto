<?php

function deletar(){
               include('Sql.php');
               $id_produto = $_GET['numPedido'] ??  NULL;
               $deletarBd =  mysqli_query($mysqli, "DELETE FROM produto WHERE id_produto = $id_produto");
               header("local: ../TesteCarlettoCrud/home.php/");
             }   
?>