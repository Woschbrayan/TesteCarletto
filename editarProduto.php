<!DOCTYPE html>

<?php
  include('Sql.php');
  $id_produto = $_GET['numproduto'] ??  NULL;
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
    <title>Editar</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    body{
    font-family: 'Poppins';         
    margin: 0;           
    padding: 0; 
    }

    .containerPrincipal{
    position: relative;
    width: 60%;
    height: 40%;
    left: 20%;
    border-radius: 6px;
    box-shadow: 2px 5px 10px 2px rgb(0 0 0 / 30%);
    color: #1572a1;
    margin-top: 1%;
    }
    .cabecalhoEdit{
                  background-color: #1572a1;
                  text-align: center;
                  
    }
    .EditarProduto{
                  padding: 2%;
    }

    .btn-primary{
                  position: relative;
                  margin: 5%;
    }
    a{
                  color: white;
                  font-style: none;
    }
    a:hover{
                  color: white;
                  font-style: none;
    }
    .btn-danger{
    width: 20%;
    }
    .btns{
    width: 50%;
    }
    
    
</style>
</head>
<body>
<div class="containerPrincipal">

<div class="cabecalhoEdit"> <h1 style="color: white;">Editar Produto</h1></div> 
<div class="EditarProduto">
              <form class="row g-3" action="functionUpdate.php?numproduto=<?php echo $id_produto; ?>" method="POST">

              <div class="col-md-6">
                              <label for="idProduto" class="form-label">ID do Produto</label>
                              <input type="text" class="form-control" id="idProduto" name="idProduto"  value="<?php echo "$idproduto"; ?>">
              </div>

              <div class="col-md-6">
                              <label for="EditProduto" class="form-label">Nome do Produto</label>
                              <input type="text" class="form-control" id="EditProduto" name="EditProduto"  value="<?php echo "$produto"; ?>">
              </div>

              <div class="col-md-6">
                              <label for="EditDescricao" class="form-label" >Descrição do Produto</label>
                              <input type="text" class="form-control" id="EditDescricao" name="EditDescricao" value="<?php echo "$descricao"; ?>">
              </div>
                                            
              <div class="col-md-6">
                              <label for="EditValor" class="form-label" >Valor</label>
                              <input type="number" class="form-control" id="EditValor" name="EditValor" value="<?php echo "$valor"; ?>">
              </div>

              <div class="col-md-6">
                              <label for="EditQtd" class="form-label">Quantidade</label>
                              <input type="number" class="form-control" id="EditQtd" name="EditQtd" value="<?php echo "$quantidade"; ?>">
              </div>

              <div class="col-md-6">
                              <label for="EditTipo" class="form-label">Tipo de Produto</label>
                              <select class="form-control" name="EditTipo" id="EditTipo" value="<?php echo "$tipo"; ?>">
                              <option value="eletronicos">Eletronico</option>
                              <option value="alimento">Alimento</option>
                              <option value="moda">Moda</option>
                              </select>    
              </div>

              <div class="col-md-6">
                              <label for="EditDetalhes" class="form-label" >Detalhes</label>
                              <input type="text" class="form-control" id="EditDetalhes" name="EditDetalhes" value="<?php echo "$detalhes"; ?>">
              </div>
            <div class="btns">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
              <button type="" class="btn btn-primary"><a href="home.php"> Voltar</button> </a>  
              <button type="" class="btn btn-danger"><a href="/TesteCarlettoCrud/functionDeletar.php?numProduto=<?php echo "$idproduto"; ?>"> Deletar</button> </a>  
            </div>
              
              </form>
</div>
</div>

</body>
</html>