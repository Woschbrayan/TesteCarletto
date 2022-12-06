<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
               <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
               <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

               <title>Home</title>
               <style>
                              @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
                              body{
                              font-family: 'Poppins';         
                              margin: 0;           
                              padding: 0; 
                              }
                              
                              .menu{
                                             text-align: center;
                                             margin: 5%;
                              }
                              </style>
</head>
<body>
<div class="menu">
<div class="btn-group">
<a href="cadastrarProduto.php">  <button type="button" class="btn btn-primary">Cadastrar Produto</button></a>
<a href="meuPerfil.php"><button type="button" class="btn btn-primary">Meu perfil</button></a> 
<a href="alterarSenha.php"><button type="button" class="btn btn-primary">Alterar Senha</button></a>
</div>
</div>
          
<div class="container ">
        
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID item</th>
        <th scope="col">item</th>
        <th scope="col">Qtd</th>
        <th scope="col">Valor</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>#51647</td>
        <td>iphone</td>
        <td>10</td>
        <td>2.000,00</td>
        
      </tr>
      <tr>
      <td>#562437</td>
        <td>iphone</td>
        <td>10</td>
        <td>2.000,00</td>
      </tr>
      <tr>
       <td>#545744</td>
        <td>iphone</td>
        <td>10</td>
        <td>2.000,00</td>
      </tr>
      <tr>
       <td>#56654</td>
        <td>iphone</td>
        <td>10</td>
        <td>2.000,00</td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>