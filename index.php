<!DOCTYPE html>
<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
               <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
               <title>Teste Carletto</title>
               <style>
                              @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
                              body{
                              font-family: 'Poppins';         
                              margin: 0;           
                              padding: 0; 
                              }
                              .ContainerLogin{
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
                              .titleLogin{
                                             background-color: #1572a1;
                                             width: 100%;
                                             color: white;
                                             text-align: center;
                                             font-size:20px ;
                              }
               </style>
</head>
<body>
<div class="ContainerLogin">
 <div class="titleLogin"><p style="text-align:center; font-size:20px;">Login</p></div>

     <form action="home.php" method="POST">
               <div class="form-group">
                   <label for="usr">Nome / ID:</label>
                   <input type="text" class="form-control" id="usr" placeholder="Nome/#ID">
               </div>

               <div class="form-group">
                 <label for="pwd">Senha:</label>
                 <input type="password" class="form-control" id="pwd" placeholder="Senha">
               </div>
<input class="btn btn-outline-primary" type="submit"  >

    </form>
      <a href="###">Esqueci a Senha </a></br>
      <a href="cadastrar.php">Cadastrar-se</a>



</div>

               
</body>
</html>