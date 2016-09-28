<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Animation/Transition</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono|Ubuntu|Lato|Plaster|Monoton" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="lib/prism/prism.css">
	<link rel="stylesheet" type="text/css" href="lib/aceditor/acestart.css">
	<link rel="stylesheet" type="text/css" href="layout.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- load ace -->
	<script src="lib/aceditor/src-min/ace.js"></script>
	<!-- load ace themelist extension -->
	<script src="lib/aceditor/src-min/ext-themelist.js"></script>
	<!-- load ace language tools -->
	<script src="lib/aceditor/src-min/ext-language_tools.js"></script>
</head>
<body>

	<div id="load">
		<img src="rolling.gif">
	</div>

	<div id="popup" style="display: none;">
		<div id="content">
			<button id="close" title="Fermer"><i class="fa fa-1x fa-times" aria-hidden="true"></i></button>
			<h2 id="title"></h2>
			<h3 id="text"></h3>
			<div class="afaire">
				<img src="">
			</div>
			<div id="btn-choice" class="btn-choice-lng sm">
				<button id="btn-html" data-lng="html">HTML</button>
				<button id="btn-css" data-lng="css" class="active">CSS</button>
			</div>
			<div class="exercice">
				<form>
					<div id="html" class="col-6">
					<span class="lg">HTML</span>
						<textarea id="editor_html"></textarea>
					</div>
					<div id="css" class="col-6">
					<span class="lg">CSS</span>
					<textarea id="editor_css"></textarea>
					</div>
					<p id="mfs">Pressez F11 pour afficher le code en plein ecran</p>
					<!--<button onclick="verifCss('code_css'); return false">Verification du CSS</button>-->
				</form>
				<section style="overflow: inherit; min-height: 500px;">
					<div class="col-12 resultat">
						<style id="new_css"></style>
						<div id="new_html" style='width: 100vw'></div>
					</div>
				</section>
			</div>
		</div>
	</div>

	<?php include 'head.php' ?>

	<div id="main" style="position: relative;">
		<div id="frame" data-init="null"></div>
		<div id="contenu"></div>
	</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./lib/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="ace_init.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
