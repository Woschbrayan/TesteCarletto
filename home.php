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
        text-align: center;
        position: fixed;
      }
      table{
        margin: 5%;
      }
      .btn-group{
      position: relative;
      display: -ms-inline-flexbox;
      display: inline-grid;
      vertical-align: middle;
      }   
      .btn-primary{
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
<?php

include('functionHome.php');
if ($result_query  == null) {
	echo "Erro: Nenhum registro encontrado!" . $produtos_erro;
	} else{

    //laço de repetição para criar a tabela de produtos
	while($produtos = mysqli_fetch_array($result_query)):

    //Pegando valores do arrray
    $id_produto = $produtos[0];
    $produto = $produtos[1];
    $descricao = $produtos[2];
    $tipo = $produtos[3];
    $valor = $produtos[4];
    $quantidade = $produtos[5];
    $data = $produtos[6];

?>
<table class="table">
			<thead class="table">
        <tbody>
          <tr class="table-ligth">
            <th  class="scope-col" scope="col">N° Produto</th>
            <th class="scope-col" scope="col">Produto</th>
            <th class="scope-col" scope="col">Descrição</th>
            <th class="scope-col" scope="col">Tipo</th>
            <th class="scope-col" scope="col">Valor</th>
            <th class="scope-col" scope="col">Quantidade</th>
            <th class="scope-col" scope="col">Ver</th>
            <th class="scope-col" scope="col">Editar</th>
          </tr>
            <tr>
              <th scope='row'><?php echo $id_produto; ?></th>
                <td><?php echo $produto;    ?></td>
                <td><?php echo $descricao;  ?></td>
                <td><?php echo $tipo;       ?></td>
                <td><?php echo $quantidade; ?></td>
                <td><?php echo $data;       ?></td>
                <td class='acoes'><a href='detalhesPedidos.php'><button type='button'name="btnVizualizar" class='btn btn-primary' value="$id_produto">Visualizar</button></a></td>
                <td class='acoes'><a href='views/editar-pedidos.php?numpedido=$id_produto'><button type='button' class='btn btn-warning'>Editar</button></a></td>
            </tr>
<?php endwhile; } ?>
      </tbody>
    </table>
</table>
</div>
</body>
</html>