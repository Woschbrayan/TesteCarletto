<?php
include('Sql.php');
$query = "SELECT * FROM produto";
 try{
   $result_query = mysqli_query($mysqli, $query); //resultado da consulta
}catch(\Exception $e){
echo"erro: ".$e;

}
?>