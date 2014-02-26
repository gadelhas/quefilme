<?php
header('Content-Type: text/html; charset=utf-8');
header('Connection: Keep-Alive');
define('mariosir',true);
?>
<html>
<head>
	<link rel="stylesheet" href="./assets/style.css" type="text/css">
	<title>Que filme ver?</title>
	<meta name="description" content="Sem ideias para filmes? N&oacute;s temos algumas sugest&otilde;es!">
	<meta property="og:image" content="http://www.quefilme.com/assets/logo.png"/>
	<meta property="og:title" content="Que filme ver?"/>
	<meta property="og:description" content="Sem ideias para filmes? N&oacute;s temos algumas sugest&otilde;es!"/>
	<link rel="icon" type="image/ico" href="./assets/favicon.ico"/>
</head>
<body>
	<div id="main">
		<h1><a href="/">Que filme ver?</a></h1>
		<div id="poster">
			<a href="#" rel="nofollow" target="_blank"><img src="http://placehold.it/200x282" width=200 height=282></a>
		</div>
		<div id="header">
			<div id="hcontent">
				<p id="reason">
					Sem ideias para filmes? Temos aqui umas sugest&otilde;es!
				</p>
				<h2>Em construção...</h2>
				<p id="meta">
					
				</p>
			</div>
		</div>
		<div id="player">
			<iframe width="475" height="288" src="//www.youtube.com/embed/OYlBx3TDEKs" frameborder="0" allowfullscreen></iframe>
		</div>
		<div id="sayhi">
			Desenvolvido por M&aacute;rio Santos
		</div>
	</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-41978760-1', 'quefilme.com');
  ga('send', 'pageview');
</script>
</body>
</html>