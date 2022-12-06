<!DOCTYPE html>
<?php
include('conct.php');
include('functionCadastro.php');
?>
<html lang="en">
<head>
                <meta charset="UTF-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
               <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
               <title>Document</title>
               <style>
                              @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
                              body{
                              font-family: 'Poppins';         
                              margin: 0;           
                              padding: 0; 
                              }

                              .titleCad{
                              background-color: #1572a1;
                              width: 100%;
                              color: white;
                              text-align: center;
                              font-size:20px ;
                              }

                              .FormularioCadastrar{
                              position: relative;
                              width: 20%;
                              height: 40%;
                              margin-top: 15%;
                              left: 40%;
                              border-radius: 6px;
                              box-shadow: 2px 5px 10px 2px rgb(0 0 0 / 30%);
                              color: #1572a1;
                              }

                              .form-control{
                              width: 80%;
                              margin-left: 5%;
                              }

                              .btn-outline-primary{
                              margin: 10%;
                              }              
               </style>
</head>
<body>
<div class="FormularioCadastrar">
 <div class="titleCad"><p style="text-align: center;">Cadastrar Login</p></div>

<form action="cadastrar.php" method="POST"></form>

  <div class="form-group">
    <label for="formGroupExampleInput">Nome:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Senha:</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Senha">

    <label for="formGroupExampleInput2">Confirmar Senha:</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Comfirmar Senha">

    <input class="btn btn-outline-primary" type="submit" value="Cadastrar" onclick="InsercaoBanco()" >
    <button class="btn btn-outline-primary"> <a href="index.php">Voltar</button></a>
    </form>
  </div>


</form>
</div>    

</body>
</html>