<?php
	@session_start();
	if(isset($_SESSION['login'])){
		
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="icons_google.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!--Icones-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>-->

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>LPR </span>- Sistemas e Informática</a>
				<ul class="user-menu">
					<li class="pull-right">
						<a href="sair.php"  data-toggle="glyph stroked cancel"><svg class="glyph stroked male-user"><use xlink:href="#stroked-cancel"></use></svg> Sair </a>						
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<!--<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>--><hr>
		<ul class="nav menu">
			<li><a href="tela_principal.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Início</a></li>
			<li><a href="servicos.php"><svg class="glyph stroked download"><use xlink:href="#stroked-download"/></svg> Serviços</a></li>
			<li><a href="#"><svg class="glyph stroked notepad"><use xlink:href="#stroked-notepad"/></svg> Sistemas</a></li>
			<!--<li><a href="#"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> </a></li>
			<li><a href="#"><svg class="glyph stroked external hard drive"><use xlink:href="#stroked-external-hard-drive"></use></svg> Empacotamento</a>-->
			<li><a href="#"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Lista</a></li>
			<!--<li><a href="#"><svg class="glyph stroked upload"><use xlink:href="#stroked-upload"/></svg> Saídas</a></li>-->
			<li role="presentation" class="divider"></li>
			<li><a href="#"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Caixa</a></li>
		</ul>

		<div class="attribution">Criado por:<br>
		<a href="https://www.facebook.com/LPR-Sistemas-de-informa%C3%A7%C3%A3o-1976387579261768/" target="_blank">LPR - Sistemas e Informática</a>
		</div>
	</div>
	<?php
}else{
	header("location: index.php");
}
	?>
