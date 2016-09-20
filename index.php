<?php
$index = true;
 ?>

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
					<span class="lg" style="margin-left: 40px;">HTML</span>
						<textarea id="editor_html"></textarea>
					</div>
					<div id="css" class="col-6">
					<span class="lg" style="margin-left: 47px;">CSS</span>
					<textarea id="editor_css"></textarea>
					</div>
					<p id="mfs">Pressez F11 pour afficher le code en plein ecran</p>
					<!--<button onclick="verifCss('code_css'); return false">Verification du CSS</button>-->
				</form>
				<section>
					<div class="col-6 resultat">
						<style id="new_css"></style>
						<div id="new_html"></div>
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
<script src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
<script type="text/javascript" src="ace_init.js"></script>
<script type="text/javascript">
;(function(alias){
"use strict";
var toggleButton = {

  color:["white", "rgb(77, 77, 77)"],
  status: false,
  selectdiv:"",
  sidebar: function() {
      this.selectdiv = document.querySelector(".sidebar");
      return this.selectdiv;
  },
  clickButton: function() {
    var spanTop = document.querySelector("#rotatespantop");
    var spanBottom = document.querySelector("#rotatespanbottom");
    var spantoHide = document.querySelector("#hidespan");
    var spanMenu = document.querySelectorAll("#active_menu span");
    var iconMenu = document.querySelector("#active_menu");
    this.sidebar();
    if (this.status === false){
      this.selectdiv.style.marginLeft = "-100%";
      spantoHide.style.display = "block";
      spanTop.style.transform = "rotate(0deg)";
      spanBottom.style.transform = "rotate(0deg)";
      spanBottom.style.marginTop = "0px";
      for (var i = 0; i < spanMenu.length; i++) {
        var el = spanMenu[i];
        el.style.backgroundColor = this.color[1];
      }
        return this.status = true;
    } if (this.status === true) {
      this.selectdiv.style.marginLeft = "0";
      spantoHide.style.display = "none";
      for (var i = 0; i < spanMenu.length; i++) {
        var el = spanMenu[i];
        el.style.backgroundColor = this.color[0];
      }
      spanTop.style.transform = "rotate(45deg)";
      spanBottom.style.transform = "rotate(-45deg)";
      spanBottom.style.marginTop = "-8px";

      return this.status = false;
    }
  }
}
document.querySelector("#active_menu").addEventListener("click", toggleButton.clickButton.bind(toggleButton));
function changePage(param_url, param_load=null){
	var urlInSearchBar = window.location.pathname.replace('/', '');
	var $frame = $('#frame');
	// console.log('param_url : ', param_url);
	var url = param_url.replace('/', '')
	// console.log('url : ', url)
	if ( urlInSearchBar === url && param_load === null) { console.log('Equivalent : ', urlInSearchBar + ' = ' + url); return false}
	switch(url){

		case'#':
			window.location = url;
		break;

		case'accueil':
			document.getElementById('frame').innerHTML = "";
			$frame.attr('data-init', url)
			changeUrl('', url);
		break;

		case'atelier':
			$frame.load('src/atelier/index.php');
			$frame.attr('data-init', url)
			changeUrl(url.toUpperCase(), url)
		break;

		case'animation':
			$frame.load('src/animation/index.php');
			$frame.attr('data-init', url)
			changeUrl(url.toUpperCase(), url)
		break;

		case'transition':
			$frame.load('src/transition/index.php');
			$frame.attr('data-init', url)
			changeUrl(url.toUpperCase(), url)
		break;

		case'annexe':
			$frame.load('src/annexe/index.php');
			$frame.attr('data-init', url)
			changeUrl(url.toUpperCase(), url)
		break;

		default:
			// console.log('Switch: Default ', url)
	}
}
function changeUrl(title, url) {
    if (typeof (history.pushState) != "undefined") {
        var obj = { Title: title, Url: url };
        history.pushState(obj, obj.Title, obj.Url);
        document.querySelector('title').innerText = obj.Title;
    } else {
        alert("Browser does not support HTML5.");
    }
}
function verifPage(){
	var frame = document.getElementById('frame'),
		init = frame.getAttribute('data-init'),
		url = window.location.pathname.replace('/', "");
	if (init == url) {
		// console.log('verifPage()', init + ' = ' + url)
		return;
	} else {
		// console.log('verifPage()', init + ' =/= ' + url)
		if (url.length === 0) {
			changePage('accueil');
		} else {
			changePage(url);
		}
	}
}
function loader(sec){
	var load = document.getElementById('load');
	load.style.display = "block";
	load.style.opacity = "1";
	setTimeout(function(){load.style.opacity = "0";}, sec + '000');
	setTimeout(function(){load.style.display = "none"; load.remove();}, sec + '100');
}

/*
	function findPos(obj){
	    var curleft = curtop = 0;
	    if (obj.offsetParent) {
	        curleft = obj.offsetLeft
	        curtop = obj.offsetTop
	        while (obj = obj.offsetParent) {
	            curleft += obj.offsetLeft
	            curtop += obj.offsetTop
	        }
	    }
	    return [curtop, curleft];
	}
	function createFrame(posTop, postLeft){
		var frame = document.createElement("div");
		var avant = document.getElementById("load");
			document.body.insertBefore(frame, avant);
			frame.setAttribute('id', 'frame');
			frame.style.display = 'block';
			frame.style.opacity = '0,5';
			frame.style.top = posTop + 'px';
			frame.style.left = postLeft + 'px';
	}
*/

loader('2')

var CheminComplet	= document.location.href;
var NomDuFichier	= CheminComplet.substring(CheminComplet.lastIndexOf( "/" )+1 );
var urlOnLoad 			= NomDuFichier.replace('?page=', "");
//console.log(urlOnLoad)
setInterval(verifPage, 5000)

window.onload=function()
{
	$('#contenu').load('page-accueil.php');
	changePage(urlOnLoad, true);

/*	setTimeout(function(){
		var anchors = document.querySelectorAll('a');
		console.log(anchors);
		for (var i = 0; i < anchors.length - 1; i++) {
			if (i !== 7) { // 7 est la balise 'a' qui sert a afficher la sidebar
				anchors[i].addEventListener('click', function(e){
					e.preventDefault();
					var target = e.toElement;
					while (target.getAttribute('href') === null) {
						target = target.parentNode;
						//console.log(target.getAttribute('href'));
					}
					//console.log(target);
					window.target = target.getAttribute('href');
					changePage(target.getAttribute('href'));
				});
			}
		}
	}, 100)*/
}






})()
</script>
</body>
</html>
