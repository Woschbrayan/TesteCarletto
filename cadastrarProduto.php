<!DOCTYPE html>
<html lang="en">
<head>   
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
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

      .form-control{
        margin: 2%;
      }
      .CadProduto{
        position: relative;
        width: 60%;
        height: 40%;
        margin-top: 1%;
        left: 20%;
        border-radius: 6px;
        box-shadow: 2px 5px 10px 2px rgb(0 0 0 / 30%);
        color: #1572a1;
        
                      
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
      a{
        color: white;
      }
      a:hover{
        color: white;
      }
      form{
        padding: 2%;
      }
    
  </style>
</head>
<body>
<!--Formulario de Cadastro de Produtos-->
<div class="CadProduto">

 <div class="cabecalhoCad"> <h1>Cadastrar Produtos</h1></div>    

  <form class="row g-3" action="functionCadastro.php" method="post">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label" >Produto</label>
      <input type="text" class="form-control" id="inputEmail4" name="produto" placeholder="Nome do Produto">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label" >Descrição</label>
      <input type="text" class="form-control" id="inputPassword4" name="descricao" placeholder="Descrição do produto">
    </div>
  
    <div class="col-md-6">
      <label for="inputAddress2" class="form-label" >Valor</label>
      <input type="text" class="form-control" id="inputAddress2" name="valor" 
      pattern="{1,3}(,\d{3})*(\.\d+)?" 
      value="" data-type="currency" 
      placeholder="$1,000,000.00">
    </div>

    <div class="col-md-6">
      <label for="inputCity" class="form-label">Quantidade</label>
      <input type="number" class="form-control" id="inputCity" placeholder="00" name="qtd">
    </div>

      <div class="col-md-6">
      <label for="inputCity" class="form-label">Tipo</label>
        <select class="form-control" name="tipo" id="selectTipo">
          <option value=""></option>
          <option value="eletronicos">Eletronico</option>
          <option value="alimento">Alimento</option>
          <option value="moda">Moda</option>
        </select>
        
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label" >Detalhes</label>
      <input type="text" class="form-control" id="inputPassword4" name="detalhes" placeholder="Detalhes do Produto">
    </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
  <button type="" class="btn btn-primary" onclick="location.href='home.php'">Voltar</button>
  
  
  
</div>
<script>
// Jquery Formatação de valor para R$

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});

function formatNumber(n) {
  // Formata valor 
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}

function formatCurrency(input, blur) {

  // Pegando o valor do input
  var input_val = input.val();
  
  if (input_val === "") { return; }

  var original_len = input_val.length;
  var caret_pos = input.prop("selectionStart");
  
  if (input_val.indexOf(".") >= 0) {

    var decimal_pos = input_val.indexOf(".");

    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    left_side = formatNumber(left_side);
    right_side = formatNumber(right_side);
    
    if (blur === "blur") {
      right_side += "00";
    }
    
    right_side = right_side.substring(0, 2);
    input_val =left_side + "." + right_side;

  } else {

    input_val = formatNumber(input_val);
    input_val =input_val;
  
    if (blur === "blur") {
      input_val += ",00";
    }
  }
  
  input.val(input_val);

  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}

</script>
</body>
</html>