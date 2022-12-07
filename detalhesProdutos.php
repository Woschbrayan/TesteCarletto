<!DOCTYPE html>
<?php
  include('Sql.php');
                $id_produto = $_GET['numPedido'] ??  NULL;
                $querySelect = "SELECT * FROM produto WHERE id_produto = $id_produto";
                
  try{ 
                $result_query = mysqli_query($mysqli, $querySelect);
                
  }catch(\Exception $e){

                //Se o try não der certo exibe erro
                echo"erro: ".$e;

                }

  $selectProdutos = mysqli_fetch_array($result_query);     
  $idproduto = $selectProdutos[0];
  $produto = $selectProdutos[1];
  $descricao = $selectProdutos[2];
  $tipo = $selectProdutos[3];
  $valor = $selectProdutos[4];
  $quantidade = $selectProdutos[5];
  $data = $selectProdutos[6];
  $detalhes = $selectProdutos[7];
                        
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <title>Detalhes</title>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
  body{
    font-family: 'Poppins';         
    margin: 0;           
    padding: 0; 
    text-align: center;
  }
  .descricao{
    display: flex;
    column-gap: 5%;
  }
     
  .cotainerPrincipal{
    width: 50%;
    height: 38%;
    position: relative;  
    border-radius: 6px;
    box-shadow: 2px 5px 10px 2px rgb(0 0 0 / 30%);
    color: #1572a1;
    text-align: center;
  }

  .botoes{
    display: flex;
    column-gap: 5%;
    margin-left: 35%;
  }
  .tableProdutos{
    background-color: #1572a1;
    color: white;
  }
  </style>
</head>
<body>

<div class="cotainerPrincipal">
             
<table class="table">
<thead class="table">
        <tbody>
          <tr class="tableProdutos">
            <th  class="scope-col" scope="col">ID</th>
            <th class="scope-col" scope="col">Produto</th>
            <th class="scope-col" scope="col">Descrição</th>
            <th class="scope-col" scope="col">Tipo</th>
            <th class="scope-col" scope="col">Valor</th>
            <th class="scope-col" scope="col">Quantidade</th>
            <th class="scope-col" scope="col">Detalhes</th>
          </tr>
            <tr>
               <td><?php       echo $id_produto;    ?></td>
               <td><?php       echo $produto;       ?></td>
               <td><?php       echo $descricao;     ?></td>
               <td><?php       echo $tipo;          ?></td>
               <td><?php       echo $valor;         ?></td>
               <td><?php       echo $quantidade;    ?></td>
               <td><?php       echo $detalhes;      ?></td>
               


           </tr>
      </tbody>
    </table>
</table>
<div class="botoes">
<button type='button'name="btnVizualizar" id="btnDeletar" class='btn btn-danger' <?php deletar() ?> >Deletar</button>
</div>

</div>



</div>  
</body>
</html>