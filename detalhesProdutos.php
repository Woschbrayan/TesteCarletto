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
  <title>Detalhes</title>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
  body{
    font-family: 'Poppins';         
    margin: 0;           
    padding: 0; 
  }

  .containerPrincipal{
    position: relative;
    left: 30%;
    width: 50%;
    height: 38%;
    border-radius: 6px;
    box-shadow: 2px 5px 10px 2px rgb(0 0 0 / 30%);
  }
  
  .inContainer{
    position: relative;
    display: flex;
  }
  label, h1 {
    color: #1572a1;
  }

  </style>
</head>
<body>
  <div class="containerPrincipal">

    <div class="cabecalhoDetalhes"> <h1 style="text-align: center;">Detalhes</h1></div> 
      <div class="inContainer">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label" >Produto:</label>
              <?php  echo $produto;  ?></br>

              <label for="inputPassword4" class="form-label" >Descrição:</label>
              <?php  echo $descricao;  ?></br>

              <label for="inputCity" class="form-label">Tipo:</label>
              <?php  echo $tipo;  ?></br>

              <label for="inputPassword4" class="form-label" >Detalhes:</label>
              <?php  echo $detalhes;  ?></br>
            </div>

            <div class="col-md-6">

              <label class="form-label" >Valor:</label>
              <?php  echo $valor;  ?></br>
            
              
              <label class="form-label">Qtde:</label>
              <?php  echo $quantidade;  ?></br>

              <label class="form-label">Data:</label>
              <?php  echo $data;  ?></br>

            </div>


       
      </div>
      <a href="home.php"><button type="submit" class="btn btn-primary"> Voltar</button> </a> 
      </div>
    
  </div>
</body>
</html>