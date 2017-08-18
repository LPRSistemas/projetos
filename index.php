<!DOCTYPE html>
<html lang="pt-br">
  <head>
		<title>LPR Sistemas e Informática</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>

		<link rel="stylesheet" type="text/css" href="css/css_barra.css">
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="js/camera.min.js"></script>
		<script type="text/javascript" src="js/myscript.js"></script>
		<script src="js/sorting.js" type="text/javascript"></script>
		<script src="js/jquery.isotope.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/jquery.nav.js"></script>		
		<?php
		REQUIRE_ONCE("estilos.php");
		?>
		<script>
			jQuery(function(){
					jQuery('#camera_wrap_1').camera({
					transPeriod: 500,
					time: 3000,
					height: '490px',
					thumbnails: false,
					pagination: true,
					playPause: false,
					loader: false,
					navigation: false,
					hover: false
				});
			});
		</script>		
	</head>
	<body>

    <!--Inicio-->
    
    <div id="home">
    	<div class="headerLine">
	<div id="menuF" class="default">
		<div class="container">
			<div class="row">
				<div class="logo col-md-4">
					<div>
						<a href="#"><img src="logo3.png"></a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="navmenu"style="text-align: center;">
						<ul id="menu">
							<li class="active" ><a href="#home">Início</a></li>
							<li><a href="#about">Sobre</a></li>
							<li><a href="#projetos">Projetos</a></li>
							<li><a href="#news">Notícias</a></li>
							<li class="last"><a href="#contact">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="row wrap">
				<div class="col-md-12 gallery"> 
						<div class="camera_wrap camera_white_skin" id="camera_wrap_1">
							<div data-thumb="" data-src="images/slides/blank.gif">
								<div class="img-responsive camera_caption fadeFromBottom">
									<img src="img_planejamento.png" width="100%">
								</div>
							</div>
							<div data-thumb="" data-src="images/slides/blank.gif">
								<div class="img-responsive camera_caption fadeFromBottom">
									<img src="discussoes.png" width="85%">
								</div>
							</div>
							<div data-thumb="" data-src="images/slides/blank.gif">
								<div class="img-responsive camera_caption fadeFromBottom">
									<img src="desenvolvimento.png" width="100%">
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 project">
					<!--<h3 id="counter">0</h3>-->
					<h4 style="margin-top: 15%;">Desenvolvimento</h4>
					<p>Tranalhamos com desenvolvimento de Sistemas Web e Sites.</p>
				</div>
				<div class="col-md-4 project">
					<!--<h3 id="counter1">0</h3>-->
					<h4 style="margin-top: 15%;">Peça já o seu</h4>
					<p>Crie o seu sistema e tenha mais visibilidade para seu negócio, fale conosco na <a href="#contact">área de contato.</a></p>
				</div>
				<div class="col-md-4 project">
					<!--<h3 id="counter2" style="margin-left: 20px;">0</h3>-->
					<h4 style="margin-left: 20px; margin-top: 15%;">Orçamento</h4>
					<p>Faça o levantamento de requisitos e orçamento para seu site ou sistema sem custos.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 cBusiness">
					<h3>Sistemas 100% personalizados...</h3>
					<h4>Trabalhamos com o desenvolvimento de ferramentas indispensáveis, seja para utilizar em seu negócio ou divulgar seu trabalho.</h4>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 centPic">
					<img class="img-responsive"  src="images/bizPic.png"/>
				</div>
			</div>
		</div>   
    </div>
    
    <!--about start-->    
    
    <div id="about">
    	<div class="line2">
			<div class="container">
				<div class="row Fresh">
					<div class="col-md-4 Des">
						<i class="fa fa-heart"></i>
						<h4>Design rápido e limpo</h4>
						<p>Técnicas para desenvolvimento de aplicações rápidas e com design limpo.</p>
					</div>
					<div class="col-md-4 Ver">
						<i class="fa fa-cog"></i>
						<h4>Personalizado</h4>
						<p>Aplicativos, sistemas web e sites personalizados de acordo com as necessidades do cliente.</p>
					</div>
					<div class="col-md-4 Fully">
						<i class="fa fa-tablet"></i>
						<h4>Design responsivo</h4>
						<p>Sites responsivos, adaptam-se a qualquer tipo de dispositivo, seja Desktop, tablet ou celular.</p>
					</div>		
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 wwa">
					<span name="about" ></span>
					<h3>Time LP Sistemas de Informação</h3>
					<h4>Ocupações e subdivisões dentro da empresa</h4>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row team">
				<!--<div class="col-md-4 b1">
						<img class="img-responsive" src="images/picTeam/picT1.png">
						<h4>Darlan Machado</h4>
						<h5>Diretor Executivo</h5>
						<p>Gestão da empresa...<br/>Gerencia a empresa e conduz todos os projetos.</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
						</ul>
				</div>-->
			
			
				<div class="col-md-6">
						<img class="img-responsive" src="marketing.png" width="10%">
						<h4>Jacsson Piazer</h4>
						<h5>Marketing e Gestão de Projeto</h5>
						<p>Gestão da qualidade e orçamento...<br/>Gerencia o projeto como um todo, conduz etapas de desenvolvimento e faz o marketing.</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
						</ul>
				</div>
		
			
				<div class="col-md-6 b3">
						<img class="img-responsive" src="programacao.png" width="10%">
						<h4>Gabriel Leiria</h4>
						<h5>Programador Sênior</h5>
						<p>Planejamento e gestão de programação...<br/>Gerencia equipes e atua diretamente no desenvolvimento dos sistemas.</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
						</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 hr1">
					<hr/>
					<center><h2>Linguagens utilizadas nos desenvolvimentos</h2>
						<p>Porcentagem da utilização das linguagens no sistema...</p></center>
				</div>
			</div>
		</div>		
		<div class="container">
			<div class="row">
				<div class="col-md-3 bar">
					<div class="progB chart" data-percent="29"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="29">
							  <span class="percent">29</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3>HTML5</h3>
						<p>Estrutura da página.</p>
					</div>
				</div>
				<div class="col-md-3 bar">
					<div class="progB chart" data-percent="22"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="22">
							  <span class="percent">22</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3>CSS3</h3>
						<p>Personalização do visual da página.</p>
					</div>
				</div>
				<div class="col-md-3 bar ">
					<div class="progB chart" data-percent="15"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="15">
							  <span class="percent">15</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3>Java Script</h3>
						<p>Lógicas e interação da página com o usuário.</p>
					</div>
				</div>
				<div class="col-md-3 bar ">
					<div class="progB chart" data-percent="34"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="34">
							  <span class="percent">34</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3>PHP5 + SQL</h3>
						<p>PHP5: Lógicas, conexão com o banco de dados;<br>SQL: Criação do banco de dados.</p>
					</div>
				</div>
			</div>
		</div>	
		
		
		<div class="container">
			<div class="row aboutUs">
				<div class="col-md-12 ">
					<h3>Sobre os envolvidos na empresa...</h3>
				</div>
			</div>
		</div>
		
		<div style="position: relative;">
		
			<div class="container">
				<div class="row about">
					<div class="col-md-6">
						<div class="about1">
						<!--<img class="pic1Ab" src="">-->
							<h3>Gabriel C. Leiria</h3>
							<p>Acadêmico de Bacharelado em Sistemas de Informação.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about2">
						<!--<img class="pic2Ab" src="">-->
							<h3>Jacsson P. Costa</h3>
							<p>Acadêmico de Bacharelado em Sistemas de Informação.</p>
						</div>
					</div>
				</div>
			</div>
		<div class="col-md-12 hr1"><hr/></div>
			<!--<div class="horL"></div>-->
		
			<!--<div class="container">
				<div class="row about">
					<div class="col-md-6">
						<div class="about1">
						<img class="pic1Ab" src="">
							<h3>Darlan Machado</h3>
							<p>A auctor mauris scelerisque eu proin nec urna quis justo adipiscing auctor ut auctor feugiat fermentum quisque eget pharetra, felis et venenatis aliquam, nulla nisi lobortis elit, acnterdum ante feugiat vitae.</p>
						</div>
					</div>
				</div>
			</div>-->
		
		</div>
    </div>
    <!--project start-->    
    <div id="project">    	
		<div class="line3">
			<div class="container">
				<div id="project1" ></div>
				<div class="row Ama">
					<div class="col-md-12">
					<span name="projects" id="projectss"></span>
					<h3>Projetos Desenvolvidos</h3>
					<p>Exemplos de alguns projetos e sistemas desenvolvidos</p>
					</div>
				</div>
			</div>
		</div>          
    <div class="container">
    <center>
    <p id="margem">"Desenvolvimento de sites e sistemas web de acordo com suas necessidades, sempre pensado no melhor para você e sua empresa"</p>
    </div></center>

    <style type="text/css">
    #margem{
    	margin-top: 5%;
    	margin-bottom: 5%;
    }
    </style>
    
       <div class="container">
       		<div id="projetos">

       		<div class="row news">
       			<div class="col-md-6">
				<img src="proj1.jpg" class="img-responsive picsGall" style="width:100%;cursor:zoom-in"onclick="document.getElementById('modal1').style.display='block'">
				<h3>Site para agendamento de consultas...</h3>

					<center><p>Sistema de plataforma web desenvolvido com a finalidade de agendar e gerenciar consultas médicas, feitas pelos próprios paciêntes.</p></center>
					<hr class="hrNews">
					</div>

			  	<div id="modal1" class="w3-modal" onclick="this.style.display='none'">
			  	<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
			  	<div class="w3-modal-content w3-animate-zoom">
			  	<img src="proj1.jpg" style="width:100%">
			  	</div>
			  	</div>
			  		
			  		<div class="col-md-6 text-right">
					<img src="proj2.jpg" class="img-responsive picsGall" style="width:100%;cursor:zoom-in"onclick="document.getElementById('modal2').style.display='block'">
					<h3>Segmento do sistema de agendamento.</h3>
					
					<hr class="hrNews">
					</div>

					<div id="modal2" class="w3-modal" onclick="this.style.display='none'">
			  	<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
			  	<div class="w3-modal-content w3-animate-zoom">
			  	<img src="proj2.jpg" style="width:100%">
			  	</div>
			  	</div>

			  </div>

			  <div class="row news">
       			<div class="col-md-6">
				<img src="proj3.jpg" class="img-responsive picsGall" style="width:100%;cursor:zoom-in"onclick="document.getElementById('modal3').style.display='block'">
				<h3>Site sobre tecnologia...</h3>

					<center><p>Web site sobre tecnologia e jogos com notícias, anúncios e loja virtual.</p></center>
					<hr class="hrNews">
					</div>

			  	<div id="modal3" class="w3-modal" onclick="this.style.display='none'">
			  	<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
			  	<div class="w3-modal-content w3-animate-zoom">
			  	<img src="proj3.jpg" style="width:100%">
			  	</div>
			  	</div>
			  		
			  		<div class="col-md-6 text-right">
					<img src="proj4.jpg" class="img-responsive picsGall" style="width:100%;cursor:zoom-in"onclick="document.getElementById('modal4').style.display='block'">
					<h3>Anúncios de produtos do site sobre tecnologia e games.</h3>
					
					<hr class="hrNews">
					</div>

					<div id="modal4" class="w3-modal" onclick="this.style.display='none'">
			  	<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
			  	<div class="w3-modal-content w3-animate-zoom">
			  	<img src="proj4.jpg" style="width:100%">
			  	</div>
			  	</div>

			  </div>

			  <div class="row news">
       			<div class="col-md-6">
				<img src="proj5.jpg" class="img-responsive picsGall" style="width:100%;cursor:zoom-in"onclick="document.getElementById('modal5').style.display='block'">
				<h3>Sistema gerencial 1...</h3>

					<center><p>Sistema gerencial completo, ideal para empresas de médio e grande porte.</p></center>
					<hr class="hrNews">
					</div>

			  	<div id="modal5" class="w3-modal" onclick="this.style.display='none'">
			  	<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
			  	<div class="w3-modal-content w3-animate-zoom">
			  	<img src="proj5.jpg" style="width:100%">
			  	</div>
			  	</div>
			  		
			  		<div class="col-md-6 text-right">
					<img src="proj6.jpg" class="img-responsive picsGall" style="width:100%;cursor:zoom-in"onclick="document.getElementById('modal6').style.display='block'">
					<h3>Sistema gerencial 2...</h3>
					
					<center><p>Sistema desenvolvido para empresas de pequeno porte e negócios locais, ideal para facilitar os negócios e economizar tempo.</p></center>
					<hr class="hrNews">
					</div>

					<div id="modal6" class="w3-modal" onclick="this.style.display='none'">
			  	<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
			  	<div class="w3-modal-content w3-animate-zoom">
			  	<img src="proj6.jpg" style="width:100%">
			  	</div>
			  	</div>

			  </div>
       		</div>		
    	</div>    
    
    <!--news start-->
    
    <div id="news">
    	<div class="line4">		
			<div class="container">
				<div class="row Ama">
					<div class="col-md-12">
					<h3>Notícias relacionadas</h3>
					<!--<p>Últimas notícias e atualizações referentes a Up Sistemas de Informação</p>-->
					</div>
				</div>
			</div>
		</div>
			<div class="container">
				<div class="row news">
					<div class="col-md-6  text-left">
					<center>
					<img class="img-responsive picsGall" src="Noticias/n1.jpg"/ width="83%">
					<h3><a href="https://aldabra.com.br/artigo/importancia-do-site-para-empresa" target="_blank">A importância de um Web site bem construído</h3></a>
					
					<p>Um site de qualidade significa, acima de tudo, valorizar a marca, acreditando na comunicação com o público.</p>
					</center>
					<hr class="hrNews">
					</div>

					<div class="col-md-6 text-right">
					<center><img class="img-responsive picsGall" src="Noticias/n2.jpg"/ width="105%">
					<h3><a href="http://www.bonde.com.br/colunistas/administracao-e-tecnologia/a-importancia-dos-sistemas-de-informacao-54857.html" target="_blank">A importância dos Sistemas de Informação</a></h3>
					
					<p>Um dos grandes desafios dos Sistemas de Informação é assegurar a qualidade e agilidade da informação, imprescindível para as corporações e seus gestores.</p></center>
					<hr class="hrNews">
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row news">
					<div class="col-md-6  text-left">
					<center>
					<img class="img-responsive picsGall" src="Noticias/n43.png"/ width="100%">
					<h3><a href="https://www.sebrae.com.br/sites/PortalSebrae/artigos/o-que-e-um-site-responsivo,4a6ad1eb00ad2410VgnVCM100000b272010aRCRD" target="_blank">O que é um site responsivo</h3></a>
					
				<p>Criados para se adaptarem a plataformas mobile, esses sites se tornaram uma importante ferramenta para o e-commerce.</p>
					</center>
					<hr class="hrNews">
					</div>

					<div class="col-md-6 text-right">
					<center><img class="img-responsive picsGall" src="Noticias/n4.jpg"/>
					<h3><a href="http://www.administradores.com.br/artigos/marketing/a-importancia-da-sua-empresa-ter-um-site/21267/" target="_blank">A importância da sua empresa ter um Site</a></h3>
					
					<p>Um site na internet não é mais um luxo para poucos, e sim uma regra geral para empresas que querem sobreviver em um mercado cada vez mais agressivo e um mundo globalizado.</p></center>
					<hr class="hrNews">
					</div>
				</div>
			</div>
			
			<!--SECTION OCULTA
			
			<div class="container hideObj2" style="display:none;">
				<div class="row news2 news">
					<div class="col-md-6 text-right">
					<img class="img-responsive picsGall" src="images/picNews/news6.jpg"/>
					<h3><a href="#">Nam in Nisl id Ipsum Feugiat Posuere ut sit Amet Sem</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					<div class="col-md-6 text-left">
					<img class="img-responsive picsGall" src="images/picNews/news5.jpg"/>
					<h3 ><a href="#">Lorem Ipsum Dolor sit Amet Pelenntesque Sodales!</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div>
			<div class="container">
			<div class="row cBtn">
				<div class="col-md-12" style="text-align: center; margin-bottom: -90px; z-index: 10;">
					<ul class="mNews">
						<li class="dowbload bhide2"><a href="#"><i class="fa fa-arrow-down"></i>Mais Notícias</a></li>
					</ul>
				</div>
			</div>
		</div>-->
    </div>
    
    
    <!--contato-->
    
    <div id="contact">
    	<div class="line5">					
			<div class="container">
				<div class="row Ama">
					<div class="col-md-12">
					<h3>Contato</h3>
					<p>Contate-nos preenchendo os campos.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-xs-12 forma">
					<form id="form1" name="formulario" method="post" action="confirmacao_email.php">
						<input type="text" class="col-md-5 col-xs-12 name" name='nome' placeholder='Nome' required/>
						<input type="text" class="col-md-6 col-xs-12 Email" name='email' placeholder='Seu e-mail' required/>
						<input type="text" class="col-md-12 col-xs-12 Subject" name='assunto' placeholder='Assunto'required/>
						<textarea type="text" class="col-md-12 col-xs-12 Message" name='mensagem' placeholder='Mensagem...' required></textarea>
						<div class="cBtn col-xs-12">
							<ul>
				<input type="button" class="w3-btn w3-black" value="Limpar Formulário" onClick="limpa()">
								<input type="submit" class="w3-btn w3-black" value="Enviar Mensagem">
							</ul>
						</div>
					</form>
				</div>
				<div class="col-md-3 col-xs-12 cont">
					<ul>
						<!--<li><i class="fa fa-home"></i>Rua: Rincão da Cruz | nº: 2628</li>-->
						<li><i class="fa fa-phone"></i>(55) 3433-7433</li>
						<li><i class="fa fa-phone"></i>(55) 99931-0114</li>
						<li><i class="fa fa-phone"></i>(55) 99967-1324</li>
						<li><a href="#"><i class="fa fa-envelope"></i>contatolpsistemas@gmail.com</li></a>
						<!--<li><a href="#"><i class="fa fa-twitter"></i>Twitter</li></a>-->
						<li><a href="#"><i class="fa fa-facebook-square"></i>Facebook</li></a>
						<!--<li><a href="#"><i class="fa fa-youtube-play"></i>YouTube</li></a>-->
					</ul>
				</div>
			</div>
		</div>
		<!-- google maps tem que mudar
		<div class="line6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d48386.401887313725!2d-73.9407136!3d40.7147117!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1402409149092" width="100%" height="750" frameborder="0" style="border:0"></iframe>			
		</div>-->
		<!--<div class="container">
			<div class="row ftext">
				<div class="col-md-12">
				<a id="features"></a>
				<h3>ALGUMA COISA</h3>
				<p>mais alguma coisa</p>
				</div>
				
			</div>
		</div>-->
		<div class="line7">
			<div class="container">
				<div class="row footer">
					<div class="col-md-12">
						<h3>Inscreva-se para receber notícias</h3>
						<p>Deixe seu E-mail para receber notícias e notificações sobre a Up Sistemas de Informação</p>
						<div class="fr">
						<div style="display: inline-block;">
							<input class="col-md-6 fEmail" name='Email' placeholder='Informe seu e-mail'/>
							<a href="#" class="subS">Inscrever!</a>
						</div>
						</div>
					</div>
					<div class="soc col-md-12">
						<p>Siga-nos também nas redes sociais</p>
						<ul>
							<li class="soc1"><a href="#"></a></li>
							<li class="soc2"><a href="#"></a></li>
							<li class="soc3"><a href="#"></a></li>							
							<li class="soc6"><a href="#"></a></li>
							<li class="soc7"><a href="#"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="lineBlack">
			<div class="container">
				<div class="row downLine">
					<!-- PARTE DE PESQUISA NO SITE
					<div class="col-md-12 text-right">
						input  id="searchPattern" type="search" name="pattern" value="Search the Site" onblur="if(this.value=='') {this.value='Search the Site'; }" onfocus="if(this.value =='Search the Site' ) this.value='';this.style.fontStyle='normal';" style="font-style: normal;
						<input  id="searchPattern" type="search" placeholder="Search the Site"/><i class="glyphicon glyphicon-search" style="font-size: 13px; color:#a5a5a5;" id="iS"></i>
					</div>-->
					
					<div class="col-md-6 text-right dm">
						<ul id="downMenu">
							<li class="active"><a href="#home">Início</a></li>
							<li><a href="#about">Sobre</a></li>
							<li><a href="#project1">Projetos</a></li>
							<li><a href="#news">Notícias</a></li>
							<li class="last"><a href="#contact">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>		
		
		
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script>
			$(document).ready(function(){
			$(".bhide").click(function(){
				$(".hideObj").slideDown();
				$(this).hide(); //.attr()
				return false;
			});
			$(".bhide2").click(function(){
				$(".container.hideObj2").slideDown();
				$(this).hide(); // .attr()
				return false;
			});
				
			$('.heart').mouseover(function(){
					$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
				}).mouseout(function(){
					$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
				});
				
				function sdf_FTS(_number,_decimal,_separator)
				{
				var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
				var separator=(typeof(_separator)!='undefined')?_separator:'';
				var r=parseFloat(_number)
				var exp10=Math.pow(10,decimal);
				r=Math.round(r*exp10)/exp10;
				rr=Number(r).toFixed(decimal).toString().split('.');
				b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
				r=(rr[1]?b+'.'+rr[1]:b);

				return r;
}
				
			setTimeout(function(){
					$('#counter').text('0');
					$('#counter1').text('0');
					$('#counter2').text('0');
					setInterval(function(){
						
						var curval=parseInt($('#counter').text());
						var curval1=parseInt($('#counter1').text().replace(' ',''));
						var curval2=parseInt($('#counter2').text());
						if(curval<=5){
							$('#counter').text(curval+1);
						}
						if(curval1<=12280){
							$('#counter1').text(sdf_FTS((curval1+20),0,' '));
						}
						if(curval2<=245){
							$('#counter2').text(curval2+1);
						}
					}, 2);
					
				}, 500);
			});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#menu').slicknav();
		
	});
	</script>
	
	<script type="text/javascript">
    $(document).ready(function(){
       
        var $menu = $("#menuF");
            
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("default")
                           .fadeIn('fast');
                });
            }
        });
	});
    //jQuery
	</script>
	<script>
		/*menu*/
		function calculateScroll() {
			var contentTop      =   [];
			var contentBottom   =   [];
			var winTop      =   $(window).scrollTop();
			var rangeTop    =   200;
			var rangeBottom =   500;
			$('.navmenu').find('a').each(function(){
				contentTop.push( $( $(this).attr('href') ).offset().top );
				contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
			})
			$.each( contentTop, function(i){
				if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
					$('.navmenu li')
					.removeClass('active')
					.eq(i).addClass('active');				
				}
			})
		};
		
		$(document).ready(function(){
			calculateScroll();
			$(window).scroll(function(event) {
				calculateScroll();
			});
			$('.navmenu ul li a').click(function() {  
				$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
				return false;
			});
		});		
	</script>	
	<script type="text/javascript" charset="utf-8">

		jQuery(document).ready(function(){
			jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
			
		});
	</script>
	<script type="text/javascript">
		function limpa(){
		formulario.reset();
	}
	</script>
	</body>
	
</html>