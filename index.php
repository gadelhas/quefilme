<?php
header('Content-Type: text/html; charset=utf-8');
header('Connection: Keep-Alive');
define('mariosir',true);
?>
<html>
<head>
	<link rel="stylesheet" href="./assets/theme.css" type="text/css">
	<title>Que filme ver?</title>
	<meta name="description" content="Sem ideias para filmes? N&oacute;s temos algumas sugest&otilde;es!">
	<meta property="og:image" content="http://www.quefilme.com/assets/logo.png"/>
	<meta property="og:title" content="Que filme ver?"/>
	<meta property="og:description" content="Sem ideias para filmes? N&oacute;s temos algumas sugest&otilde;es!"/>
	<link rel="icon" type="image/ico" href="./assets/favicon.ico"/>
</head>
<body>
	<div class="container_12" id="main">
		<div class="grid_2">
			<img width="140" height="140" src="./assets/logo.png" />
		</div>
		<div class="grid_8">
			<div class="filme">
				<p class="lead">Sem ideias para filmes? Temos aqui umas sugest&otilde;es!</p>
				<h2>Nebraska</h2>
				<p>Aventura / Drama <br />115 minutos <br />Bruce Dern, Will Forte, June Squibb, Bob Odenkirk</p>
			</div>
			<div class="player">
				<iframe width="620" height="349" src="//www.youtube.com/embed/9_MTRKedJ5U" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="grid_2">
			<div class="poster">
				<a href="#" rel="nofollow" target="_blank"><img src="http://placehold.it/140x197" /></a>
			</div>
		</div>
	</div>
	<div class="footer">
		Desenvolvido por M&aacute;rio Santos
	</div>
</body>
</html>