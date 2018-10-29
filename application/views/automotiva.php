<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="utf-8">
	<title>Automotiva - Chaveiro Abelhinha</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/scrolling-nav.css'); ?>" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/apple-icon-57x57.png'); ?>">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/apple-icon-60x60.png'); ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/apple-icon-72x72.png'); ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/apple-icon-76x76.png'); ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/apple-icon-114x114.png'); ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/apple-icon-120x120.png'); ?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/apple-icon-144x144.png'); ?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/apple-icon-152x152.png'); ?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/apple-icon-180x180.png'); ?>">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url('assets/android-icon-192x192.png'); ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon-32x32.png'); ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/favicon-96x96.png'); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/favicon-16x16.png'); ?>">
	<link rel="manifest" href="<?php echo base_url('assets/manifest.json'); ?>">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo base_url('assets/ms-icon-144x144.png'); ?>">
	<meta name="theme-color" content="#ffffff">
	
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php echo base_url('assets/abelhinha.png');?>" />
	<meta property="og:title" content="Chaveiro 24 horas em Campinas" />
	<meta property="og:description" content="Trabalhamos com todos os tipos de chaves e serviços de chaveiro, chaves Yale, forjada, tetra e automotivas de todas as marcas com sistema de transponder." />
	<meta property="og:url" content="https://chaveiroabelhinha.com.br/" />
	<meta property="og:site_name" content="CHAVEIRO ABELHINHA" />
	<style>
		.mapouter {
			text-align: right;
			height: 190px;
			width:100%;
		}
		.gmap_canvas {
			overflow: hidden;
			background: none !important;
			height: 180px;
			width: 100%;
		}

		.navbar a {
			color: #444444;
			font-weight: 800;
			-moz-transition: all .2s ease-in;
			-o-transition: all .2s ease-in;
			-webkit-transition: all .2s ease-in;
			transition: all .2s ease-in;
		}

		.navbar a:hover {
			color: #000000;
			font-weight: 800;
			-moz-transition: all .2s ease-in;
			-o-transition: all .2s ease-in;
			-webkit-transition: all .2s ease-in;
			transition: all .2s ease-in;
		}

		footer a {
			color: #333333;
			text-decoration: none;
			-moz-transition: all .2s ease-in;
			-o-transition: all .2s ease-in;
			-webkit-transition: all .2s ease-in;
			transition: all .2s ease-in;
		}

		footer a:hover {
			color: #000;
			text-decoration: none;
			-moz-transition: all .2s ease-in;
			-o-transition: all .2s ease-in;
			-webkit-transition: all .2s ease-in;
			transition: all .2s ease-in;
		}

		.whatsapp-plug-icon{
			position: fixed; 
			z-index: 1000; 
			bottom: 20px;
			right: 20px; 
			width: 50px; height: 50px; 
			-webkit-border-radius: 50%; cursor: pointer; 
			background-color: #0ba360; 
			transition: .3s; 
			background-position: center; 
			background-repeat: no-repeat; 
			background-image: url('./assets/images/whatsapp.svg'); background-size: 50% auto;
		}
		.whatsapp-plug-icon:hover{background-color: #15cc74;}
		.whatsapp-plug-icon::after,
		.whatsapp-plug-icon::before{
			content: ''; 
			position: absolute; 
			opacity: 0; 
			border: 4px solid #0ba360; 
			left: -10px; 
			top: -10px; 
			right: -10px; 
			bottom: -10px; 
			-webkit-border-radius: 50%;
			 animation: WaveWhatsApp 1.5s ease infinite;
		}
		.whatsapp-plug-icon::after{
			animation-delay: .5s;
		}
		.whatsapp-plug-icon:hover::after{
			border: 4px solid #15cc74;
		}
		.whatsapp-plug-icon:hover::before{
			border: 4px solid #15cc74;
		}
		@keyframes WaveWhatsApp {
			0% { 
				transform: scale(0.5);
			} 

			50% { 
				opacity: 1; 
			} 

			100% { 
				transform: scale(1.2); 
				opacity: 0; 
			}
		}
	</style>
</head>
<body id="page-top">
	<a target="_blank" class="whatsapp-plug-icon" href="https://api.whatsapp.com/send?phone=5519995530476"></a>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2&appId=2240715949497138&autoLogAppEvents=1';
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

    <!-- Navigation -->
	<nav 
		class="navbar navbar-expand-lg navbar-light fixed-top" 
		id="mainNav"
		style="background-color: #ffeb3b;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img src="<?php echo base_url('assets/images/logo_topo.png');?>">
		</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Outros Serviços
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url();?>residencial">Linha Residencial</a>
								<a class="dropdown-item" href="<?php echo base_url();?>cofres">Cofres</a>
							</div>
						</li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#descricao">Linha Automotiva</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

	<header 
		class="bg-primary text-white" 
		style="
		margin-top: 155px;
		min-height: 500px;
		background-image: url('<?php echo base_url('assets/images/banner_topo.jpg');?>');
		background-size: cover;
		background-position: bottom right;
		background-repeat: no-repeat;">
      <div class="container text-center">
        <h1>&nbsp;</h1>
      </div>
    </header>

    <section id="descricao">
      <div class="container">
        <div class="row">
          <div class="col-sm-12" style="margin-top: 30px;">
            <h1 style="text-align:center;">LINHA AUTOMOTIVA</h1>
            <br/><br/>
				    <p style="text-align: justify; font-size: 1.2em;">
              A chave codificada foi criada para atrapalhar todos os ladrões de automóveis. Ela assume as funções de equipamento eletrônico, que imobiliza a partida.
            </p>
            <br/>
            <p style="text-align: justify; font-size: 1.2em;">
              Na era dos imobilizadores de partida, tarefas como fazer uma cópia da chave do veículo ou substituir a central que controla o sistema de injeção eletrônica – UCE deixaram de ser simples e diretas. Agora o profissional deve dominar os conceitos e as particularidades que envolvem os sistemas. Só assim conseguirá realizar os procedimentos com coerência e sucesso.
            </p>
            <br/>
            <p style="text-align: justify; font-size: 1.2em;">
              <b>O que é um sistema imobilizador de partida?</b><br/>
              O Imobilizador de partida é um sistema eletrônico, integrado à injeção eletrônica, que tem o objetivo de aumentar a proteção contra tentativas de roubo. Popularizou-se no Brasil a partir de 1996 com os veículos da família FIAT Pálio.
            <br/>
            Nos veículos com sistema imobilizador, a chave de ignição possui um dispositivo (transponder) que transmite um código secreto (por intermédio do tradutor “módulo do imobilizador”) à unidade de comando eletrônico da injeção – UCE. A partida só é permitida se o código for reconhecido pela UCE.
            <br/>
            <br/>
            É um sistema <b>passivo</b>, significa que não necessita da ação do proprietário do veículo para funcionar.
            <br/>
            <h5 style="text-align: center;">
              <img 
                style="margin: 0 auto; border-radius: 5px;"
                src="<?php echo base_url('/assets/images/auto_001.png');?>">
            </h5>
            <br/>
            <p style="text-align: justify;">
              <b>O sistema é composto basicamente por</b>:<br/>
						<br/>
						•	Chaves eletrônicas com código secreto (transponder);<br/>
						•	Módulo do Imobilizador;<br/>
						•	Bobina ou Antena;<br/>
						•	Unidade de comando de injeção – UCE com linha de comunicação com o módulo do imobilizador.<br/>
						<br/>
						A chave possui um transponder (chip) que possui um código eletrônico.<br/>
						<br/>
						Os transponder utilizados nos sistemas imobilizadores são do tipo “magnético” só emitem o sinal quando da proximidade de um campo magnético, no caso, a bobina (antena) localizada junto ao cilindro de ignição do veículo.<br/>
						<br/>
						<b>Módulo do imobilizador</b><br/>
						Recebe o código do transponder que é excitado pela antena e envia para a central da injeção.<br/><br/>
						Podemos encontrar centrais de imobilizador separadas (Fiat e VW), centrais que formam um conjunto com a antena (GM) e centrais de injeção que possuem o imobilizador incorporado (Ford, exceto F-250 e alguns Mondeo).<br/>
						<br/>
						<b>Bobina ou Antena</b><br/>
						As antenas podem vir integradas com as centrais do imobilizador ou separadas.<br/>
						<br/>
						<b>Chaves eletrônicos com código secreto (transponder)</b><br/>
						A palavra transponder é o resultado da junção de “transmitter + responder”, ela foi utilizada pela primeira vez por volta de 1944.<br/>
						<h5 style="text-align: center;">
              <img 
                style="margin: 0 auto; border-radius: 5px;"
                src="<?php echo base_url('/assets/images/auto_002.png');?>">
            </h5>
            <h5 style="text-align: center; margin-top: 50px;">Realizamos todos os tipos de Chave e Serviços de Chaveiro</h5>
            <h2 style="text-align:center;">Plantão 24 horas</h2>
				</div>
      </div>
    </section>

    <section id="contact" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <center><h2>Entre em Contato Conosco!</h2></center>
            <br>
            <p class="lead" style="text-align: center;">
            <a 
                href="https://api.whatsapp.com/send?phone=5519995530476" 
                target="_new"
                class="btn" 
                style="background-color: #26d367; color: #ffffff;"><b><i class="fab fa-whatsapp"></i></b> (19) 99553-0476</a><br/>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5" style="background-color: #ffeb3b; color: #000000;">
      <div class="container">
		  <div class="row">
			<div class="col-md-4">
				<b>CONTATO</b><br/><br/>
				<p style="font-size: 0.9em;">
				Endereço<br/>
				<b>Avenida Palmital, 148 - Flamboyant 
				<br/>Campinas - SP
				<br/>CEP: 13091-133</b><br/><br/>
				WhatsApp: <b><a href="https://api.whatsapp.com/send?phone=5519995530476">(19) 99553-0476</a></b><br/>
				E-mail: <b><a href="mailto:contato@chaveiroabelhinha.com.br">contato@chaveiroabelhinha.com.br</a></b>
				</p>
			</div>
			
			<div class="col-md-4">
				<b>NOSSA LOCALIZAÇÃO</b><br/><br/>
				<div class="mapouter">
					<div class="gmap_canvas">
						<iframe 
							width="100%"
							height="190" 
							id="gmap_canvas" 
							src="https://maps.google.com/maps?q=chaveiro%20abelhinha&t=&z=13&ie=UTF8&iwloc=&output=embed" 
							frameborder="0" 
							scrolling="no" 
							marginheight="0" 
							marginwidth="0"></iframe>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<b>NOSSAS REDES</b><br/><br/>
				<div 
					class="fb-page" 
					data-href="https://www.facebook.com/chaveiroabelhinha/" 
					data-height="180" 
					data-small-header="false" 
					data-adapt-container-width="true" 
					data-hide-cover="false" 
					data-show-facepile="true">
					<blockquote cite="https://www.facebook.com/chaveiroabelhinha/" 
					class="fb-xfbml-parse-ignore">
					<a href="https://www.facebook.com/chaveiroabelhinha/">Chaveiro Abelhinha</a></blockquote></div>

		  	</div>
		  </div>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom JavaScript for this theme -->
		<script src="<?php echo base_url('assets/js/scrolling-nav.js');?>"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120700632-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-120700632-1');
		</script> 

  </body>

</body>
</html>
