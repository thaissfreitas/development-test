<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Produtos</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/development-test/includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?= base_url('../includes/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('../includes/js/jquery.forms/jquery.forms.js') ?>"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    	.container {
    		margin-top: 50px;
    	}
    </style>
    <script>
    </script>
  </head>

  <body>
          
      
    <div class="container">

         <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Processo Seletivo</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="http://localhost/development-test/index.php/">Produtos</a></li>
              <li class="active"><a href="http://localhost/development-test/index.php/c_produtos/create" >Cadastrar Produtos</a></li>
              <li><a  href="http://localhost/development-test/index.php/c_pedidos/" >Pedidos</a></li>
              <li><a  href="http://localhost/development-test/index.php/c_pedidos/create" >Gerar Pedidos</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>



        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">CADASTRAR</h3>
            </div>
            <div class="panel-body">
             <form role="form" method="post" action="http://localhost/development-test/index.php/c_produtos/addProduto" id="formulario_produto">
                <div class="form-group">
                  <label for="nome">Descrição</label>
                  <input type="text" class="form-control" id="descricao" name="descricao">
                </div>
                <div class="form-group">
                  <label for="text">Preço</label>
                  <input type="text" class="form-control" id="preco" name="preco" onKeyUp="maskIt(this,event,'###.###.###,##',true)">
                </div>
                <div class="form-group">
                  <label for="number">Quant. Estoque</label>
                  <input type="number" class="form-control" id="quantEstoque" name="quantEstoque">
                </div>
                <input type="hidden" name="idProduto" id="idProduto" value="" />
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                
              </form>	    
            </div>
        </div>	

    </div>

  </body>
</html>


<script type="text/javascript">
function maskIt(w,e,m,r,a){
// Cancela se o evento for Backspace
if (!e) var e = window.event
if (e.keyCode) code = e.keyCode;
else if (e.which) code = e.which;
// Variáveis da função
var txt  = (!r) ? w.value.replace(/[^\d]+/gi,'') : w.value.replace(/[^\d]+/gi,'').reverse();
var mask = (!r) ? m : m.reverse();
var pre  = (a ) ? a.pre : "";
var pos  = (a ) ? a.pos : "";
var ret  = "";
if(code == 9 || code == 8 || txt.length == mask.replace(/[^#]+/g,'').length) return false;
// Loop na máscara para aplicar os caracteres
for(var x=0,y=0, z=mask.length;x<z && y<txt.length;){
if(mask.charAt(x)!='#'){
ret += mask.charAt(x); x++; } 
else {
ret += txt.charAt(y); y++; x++; } }
// Retorno da função
ret = (!r) ? ret : ret.reverse()	
w.value = pre+ret+pos; }
// Novo método para o objeto 'String'
String.prototype.reverse = function(){
return this.split('').reverse().join(''); };
</script>
