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
    <script src="<?= base_url('includes/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('includes/js/jquery.forms/jquery.forms.js') ?>"></script>

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
              <li class="active"><a href="#">Produtos</a></li>
              <li><a href="http://localhost/development-test/index.php/c_produtos/create" >Cadastrar Produtos</a></li>
              <li><a  href="http://localhost/development-test/index.php/c_pedidos/" >Pedidos</a></li>
              <li><a  href="http://localhost/development-test/index.php/c_pedidos/create" >Gerar Pedidos</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">PRODUTOS CADASTRADOS</h3>
		  </div>
		  <div class="panel-body">
		    <table class="table">
		    	<tr>
		    		<th>Descrição</th>
		    		<th>Preço</th>
              		    	<th>Estoque</th>
                                <th>Ações</th>

		    	</tr>
		    	<?php foreach ($produtos -> result() as $produto): ?>
                                <tr>
                                        <td><?php echo $produto->descricao; ?></td>
                                        <td><?php echo number_format($produto->preco, 2, ',', '.'); ?></td>
                                        <td><?php echo $produto->quantEstoque; ?></td>
                                        
                                        <td> 
                                            <a href="http://localhost/development-test/index.php/c_produtos/edit/<?php echo $produto->idProduto ?>">
                                                Editar
                                            </a>
                                        </td>
                                </tr>
                        <?php endforeach; ?>
		  </div>
		</div>		
      
    </div><!-- /.container -->
  </body>
</html>


<script language="javascript">
function number_format( number, decimals, dec_point, thousands_sep ) {
    var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
    var d = dec_point == undefined ? "," : dec_point;
    var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
    var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}
</script>
