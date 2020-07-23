<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>CHAVEIRO ABELHINHA - CHAVEIRO 24 HORAS EM CAMPINAS</title>
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
	<meta property="og:image" content="<?php echo base_url('assets/abelhinha.webp');?>" />
	<meta property="og:title" content="Chaveiro 24 horas em Campinas" />
	<meta property="og:description" content="Trabalhamos com todos os tipos de chaves e serviços de chaveiro, chaves Yale, forjada, tetra e automotivas de todas as marcas com sistema de transponder." />
	<meta property="og:url" content="https://chaveiroabelhinha.com.br/" />
	<meta property="og:site_name" content="CHAVEIRO ABELHINHA" />
	<meta name="description" content="O Chaveiro Abelhinha possui uma equipe qualificada e experiente para te atender. Chave codificada em Campinas"/>
	<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/www.chaveiroabelhinha.com.br\/","name":"Chaveiro Abelhinha","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.chaveiroabelhinha.com.br\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
	<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"Organization","url":"https:\/\/www.chaveiroabelhinha.com.br\/","sameAs":[],"@id":"#organization","name":"NAYARA MONTEIRO FAZOLO 39279900862","logo":"https:\/\/www.chaveiroabelhinha.com.br\/assets\/images\/logo_topo.webp"}</script>
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
		class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark"
		id="mainNav"
		style="background-color: #000000 !important; background-image: url('<?php echo base_url('assets/images/background_bee.webp');?>') !important;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
					<img
						src="<?php echo base_url('assets/images/logo_topo.webp');?>"
						alt="logo chaveiro abelhinha">
				</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
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
			background-image: url('<?php echo base_url('assets/images/banner_topo_automotivo.webp');?>');
			background-size: cover;
			background-position: center center;
			background-repeat: no-repeat;">
      <div class="container text-center">
        <h1>&nbsp;</h1>
      </div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
					<div class="col-lg-6 mx-auto">
						<img
							src="<?php echo base_url('assets/images/quem_somos.webp');?>"
							style="width: 100%; border-radius: 5px;">
					</div>
					<div class="col-lg-6 mx-auto">
						<h2 style="text-align: center;">A Empresa Chaveiro Abelhinha, nasceu em 2015</h2><br/>
						<p class="lead" style="text-align: justify;">Diferente de outros chaveiros, pois não herdei a profissão, mas sempre tive a curiosidade de saber qual era o funcionamento de uma fechadura. Pois já sabia a importância dela e todos os nossos bens que ela guarda. Isso se tornou um hobbie em minha vida!</p>
						<br/>
						<p class="" style="text-align: justify;">
							Visando atuar no mercado de uma maneira diferenciada, nos preocupando em primeiro lugar com a segurança e bem-estar de nossos clientes. O Nome Abelhinha surgiu pela admiração do trabalho delas na natureza e decidimos adotar o seu método de trabalho. Levando o nosso melhor a cada lugar que passamos e extraindo uma amizade profissional e duradoura.
						</p>
						<br/>
						<br/>
					</div>
				</div>
				<div class="" style="margin-top: 30px;">
					<p style="text-align: center; font-weight: 600;">
						O Chaveiro Abelhinha possui uma equipe qualificada e especializada com mais de 4 anos de experiência no mercado.
					</p>
					<p style="text-align: center; font-weight: 600;">
						Especialista de prontidão para lhe atender 24 horas por dia.
					</p>
					<p style="text-align: center; font-weight: 600;">
						Atuamos nas áreas: Residencial, Automotiva e Cofres
					</p>
				</div>
			</div>
		</section>

		<div class="row text-center instagramWidget">
      <!-- SnapWidget -->
      <!-- SnapWidget -->
			<iframe src="https://snapwidget.com/embed/622468" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:90%; height:260px; margin: 0 auto;"></iframe>
    </div>

		<section id="services" class="bg-light"
			style="background-image: url('<?php echo base_url('assets/images/estimation.jpg');?>') !important;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <h2>Alguns dos serviços que realizamos</h2><br/>
            <div class="row">
              <div class="col" style="margin-top: 1em;">
                <div class="card" style="">
                  <img class="card-img-top" src="<?php echo base_url('assets/images/linha_automotiva.jpg');?>" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">Automotivo</h4>
                    <p class="card-text" style="text-align: justify;">
						Aberturas de veículos nacionais e importados<br/>
						Chave Automotiva Codificada:<br/>
						<br/>
						Chave Canivete, Telecomando do Alarme, chave reserva simples.<br/>
						<br/>
						Consertamos Chave Automotiva, Cilindros de portas, Ignição e Comutador de partida.<br/>
						• Fazemos também adaptação para chave canivete, Pósitron, Olimpus, Taramps e Look Out
										</p>
										<br/>
										<center>
										<a
											style="background-color: #ffeb3b !important;"
											class="btn btn-warning" href="<?php echo base_url();?>automotiva">saber mais</a>
										</center>
                  </div>
                </div>
              </div>

              <div class="col" style="margin-top: 1em;">
                <div class="card" style="">
                  <img class="card-img-top" src="<?php echo base_url('assets/images/linha_residencial.jpg');?>" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">Residencial</h4>
                    <p class="card-text" style="text-align: justify;">
						Aberturas em Geral<br/>
						<br/>
						Confecção de Chaves<br/>
						<br/>
						Trocas de Segredos<br/>
						<br/>
						<br/>
						Restauração de Fechaduras Antigas<br/>
						• Instalação de todos os modelos de Fechaduras, Travas Auxiliares, Acessórios de Segurança, Molas Aéreas, Cadeados de porta de Aço e de Vidro<br/>
										</p>
										<br/>
										<br/>
										<center>
										<a
											style="background-color: #ffeb3b !important;"
											class="btn btn-warning" href="<?php echo base_url();?>residencial">saber mais</a>
										</center>
                  </div>
                </div>
              </div>

              <div class="col" style="margin-top: 1em;">
                <div class="card" style="">
                  <img class="card-img-top" src="<?php echo base_url('assets/images/cofres.webp');?>" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">Cofres</h4>
                    <p class="card-text">
						Realizamos abertura de Cofres mecânicos e eletrônicos<br/>
						<br/>
						Confeccionamos novas chaves<br/>
						<br/>
						Trocamos a combinação de segredo<br/>
						<br/>
										<br/>
						<br/>
						• Dica: Para você que utiliza o modelo eletrônico, confira sempre a vida útil das pilhas e mantendo as chaves fora do mesmo.
										<br/>
										<br/>
										</p>
										<br/>
										<br/>
										<center>
										<a
											style="background-color: #ffeb3b !important;"
											class="btn btn-warning" href="<?php echo base_url();?>cofres">saber mais</a>
										</center>
                  </div>
                </div>
              </div>
		        </div>
          </div>
        </div>
      </div>
    </section>

		<section id="contact">
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

		<?php require_once('components/footer.php');?>

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
