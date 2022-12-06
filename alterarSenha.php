<!DOCTYPE html>
<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
               <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
               <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
               <title>Alterar Senha</title>
               <style>
                              @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
                              body{
                              font-family: 'Poppins';         
                              margin: 0;           
                              padding: 0; 
                              }
                              .ContainerAlterar{
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
                                             margin: 5%;
                              }
                              .titleSenha{
                                             background-color: #1572a1;
                                             width: 100%;
                                             color: white;
                                             text-align: center;
                                             font-size:20px ;
                              }
               </style>
</head>
<body>
<div class="ContainerAlterar">
           <div class="titleSenha"> <p style="text-align: center;">Alterar Senha</p></div>   
  <div class="mb-3">
               <label for="formGroupExampleInput" class="form-label">ID/Name</label>
               <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name/ID">

               </div>
               <div class="mb-3">
               <label for="formGroupExampleInput2" class="form-label">Nova Senha</label>
               <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nova senha">

               <label for="formGroupExampleInput2" class="form-label">Confirmar Senha</label>
               <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Confirmar senha">

               <input class="btn btn-outline-primary" type="submit" value="Confirmar">
               <a href="home.php"><input class="btn btn-outline-primary" type="submit" value="Voltar"></a>
               
               </div>   
</div>
 
               
</body>
</html>