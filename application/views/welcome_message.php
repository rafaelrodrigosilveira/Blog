<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- HEADER-->
<?php $this->load->view('header');?>

<!------------------------------------------------------------------------------------------------------------------>
	<title>COBO-Framework</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Bem vindo ao COBO-Framework</h1>

	<div id="body">
		<p>Esta é uma página de exemplo do Cobo - Framework (versão 1.2 - 01/01/2020), que contem:</p>
		<p><?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		<p>Arquivo .htaccess</p>
		<p>Suporte ao idioma português Brasil para o Code Igniter</p>
		<p>Bootstrap 4.3.1</p>
		<p>Suporte a fontes awesome.js 5.12.0 web</p>
		<p>Criado o arquivo header separado para chamar o bootstrap</p>
		<p>Criado o arquivo scripts separado para chamar o jquery</p>
		<p>Adicionado suporte a estilo_personalizado.css</p>
		<p>Adicionado suporte a Templates (classe Template)</p>

		</br>
		<p>Se você quiser editá-la, deverá fazer isto em:</p>
		<code>application/views/welcome_message.php</code>

		<p>O correspondente Controller desta página está em:</p>
		<code>application/controllers/Welcome.php</code>

		<p>Se quiser ler a documentação, acesse o <a href="user_guide/">Manual do usuário (inglês)</a>.</p>
	</div>

	<p class="footer"><a href="https://rafaelrodrigosilveirasite.wordpress.com/sobre-2/">Rafael Rodrigo Silveira </a>- Página aberta em <strong>{elapsed_time}</strong> segundos. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
<!------------------------------------------------------------------------------------------------------------------>

<!-- SCRIPTS-->
<?php $this->load->view('scripts'); ?>

</body>
</html>