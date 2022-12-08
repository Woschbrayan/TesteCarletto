<?php
include('Sql.php');
$query = "SELECT * FROM produto";

 try{
   $result_query = mysqli_query($mysqli, $query); //exibi resultado da consulta
}catch(\Exception $e){
echo"erro: ".$e;

}
?>