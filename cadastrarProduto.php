<!DOCTYPE html>
<html lang="en">
<head>   

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<title>Cadastrar Produto</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    body{
    font-family: 'Poppins';         
    margin: 0;           
    padding: 0; 
    }

    .col-12{
      display: flex;
      margin: 2%;
    }
    .col-12 input{
      width:20%;
    }
    .form-control
    {
      width: 70%;
      margin-left: 2%;
    }
    .CadProduto{
      position: relative;
      width: 60%;
      height: 40%;
      margin-top: 15%;
      left: 20%;
      border-radius: 6px;
      box-shadow: 2px 5px 10px 2px rgb(0 0 0 / 30%);
      color: #1572a1;
      padding: 1%;
                    
    }
    .cabecalhoCad{
      background-color: #1572a1;
      width: 100%;
      color: white;
      text-align: center;
      font-size:20px ;
    }
    .btn-primary{
      margin: 5%;
    }
    #selectTipo{
      width: 40%; 
    }
    .col-12{
      display: flex;
      column-gap:10% ;

      
    }
   
</style>
</head>
<body>

<!--Formulario de Cadastro de Produtos-->
<div class="CadProduto">

 <div class="cabecalhoCad"> <p>Cadastrar Produtos</p></div>    

  <form class="row g-3" action="functionCadastro.php" method="post">

    <div class="col-md-6">
      <label for="inputEmail4" class="form-label" >Produto</label>
      <input type="text" class="form-control" id="inputEmail4" name="produto">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label" >Descrição</label>
      <input type="text" class="form-control" id="inputPassword4" name="descricao">
    </div>
  
    <div class="col-md-6">
      <label for="inputAddress2" class="form-label" >Valor</label>
      <input type="number" class="form-control" id="inputAddress2" placeholder="00,00" name="valor">
    </div>

    <div class="col-md-6">
      <label for="inputCity" class="form-label">Qtde</label>
      <input type="number" class="form-control" id="inputCity" placeholder="00" name="qtd">
    </div>

      <div class="col-md-6">
      <label for="inputCity" class="form-label">Tipo</label>
        <select class="form-control" name="tipo" id="selectTipo">
          <option value="eletronicos">Eletronico</option>
          <option value="alimento">Alimento</option>
          <option value="moda">Moda</option>
        </select>
        
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label" >Detalhes</label>
      <input type="text" class="form-control" id="inputPassword4" name="detalhes">
    </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

  </form>

  <a href="home.php"><button type="submit" class="btn btn-primary"> Voltar</button> </a>  

</div>

</body>
</html>