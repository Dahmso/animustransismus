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
<script src="./lib/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="ace_init.js"></script>
<script type="text/javascript">
;(function(alias){
"use strict";
var toggleButton = {

  color:["white", "rgb(77, 77, 77)"],
  status: true,
  selectdiv:"",
  sidebar: function() {
      this.selectdiv = document.querySelector(".sidebar");
      return this.selectdiv;
  },
  clickButton: function() {
  	console.log('clic');
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
	//console.log('param_url : ', param_url);
	var url = param_url.replace('/', '')
	console.log('url : ', url)
	if ( urlInSearchBar === url && param_load === null) { console.log('Equivalent : ', urlInSearchBar + ' = ' + url); return false}
	switch(url){

		case'#':
			window.location = url;
		break;

		case'accueil':
			document.getElementById('frame').innerHTML = "";
			$frame.attr('data-init', url)
			$frame.fadeOut();
			$('#contenu').fadeIn();
			changeUrl('', url);
      displayContentHeader("accueil");
		break;

		case'atelier':
			$frame.load('src/atelier/index.php');
			$frame.attr('data-init', url)
			$frame.fadeIn();
			$('#contenu').fadeOut();
			changeUrl(url.toUpperCase(), url)
      displayContentHeader("atelier");
		break;

		case'animation':
			$frame.load('src/animation/index.php');
			$frame.attr('data-init', url)
			$frame.fadeIn();
			$('#contenu').fadeOut();
			changeUrl(url.toUpperCase(), url)
      displayContentHeader("animation");
		break;

		case'transition':
			$frame.load('src/transition/index.php');
			$frame.attr('data-init', url)
			$frame.fadeIn();
			$('#contenu').fadeOut();
			changeUrl(url.toUpperCase(), url)
      displayContentHeader("transition");
		break;

		case'transformation':
			$frame.load('src/transformation/index.php');
			$frame.attr('data-init', url)
			$frame.fadeIn();
			$('#contenu').fadeOut();
			changeUrl(url.toUpperCase(), url)
      displayContentHeader("transformation");
		break;

		case'annexe':
			$frame.load('src/annexe/index.php');
			$frame.attr('data-init', url)
			$frame.fadeIn();
			$('#contenu').fadeOut();
			changeUrl(url.toUpperCase(), url)
      displayContentHeader("annexe");
		break;

		default:
			// console.log('Switch: Default ', url)
	}
}
function displayContentHeader(elem) {
  var screenWidth = window.innerWidth;
  var contentHeader = document.querySelector('.content_header');
  var moon = document.querySelector('.moon');
  var cloudsWrapper = document.querySelector('.clouds-wrapper');
  var contentMountains = document.querySelector('.content_mountains');
  if (screenWidth <= 700) {
  contentHeader.style.display = "none";
  } else {
  if (elem === "accueil" || elem === "annexe") {
  contentHeader.style.display = "none";
  }
  if (elem === "atelier") {
      contentHeader.style.display = "block";
      moon.style.visibility = "visible";
      contentMountains.style.visibility = "visible";
      cloudsWrapper.style.visibility = "visible";
  }
  if (elem === "animation") {
    contentHeader.style.display = "block";
    contentHeader.style.height = "20vh";
    moon.style.visibility = "visible";
    contentMountains.style.visibility = "visible";
  }
  if (elem === "transition") {
    contentHeader.style.display = "block";
    moon.style.visibility = "hidden";
    contentMountains.style.visibility = "visible";
    cloudsWrapper.style.visibility = "hidden";
  }
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
	var frame = document.getElementById('frame');
	var init = frame.getAttribute('data-init');
	var url = window.location.pathname;
		url = url.split('/');
		url = url[url.length - 1];
	if (init == url) {
		//console.log('verifPage()', init + ' = ' + url)
		return;
	} else {
		//console.log('verifPage()', init + ' =/= ' + url)
		if (url.length === 0) {
			changePage('accueil');
		} else {
			changePage(url);
		}
	}
}
function chargerPage(param_page){
	var src = 'src/' + param_page + 'index.php';
	$.ajax({
       url : 'more_com.php',
       type : 'GET',
       dataType : 'html',
       success : function(code_html, statut){
        //console.log(statut);
        return code_html;
       },

       error : function(resultat, statut, erreur){
        console.log(statut);
       },

       complete : function(resultat, statut){
       	//console.log(statut);
       	//console.log(resultat);
       }
    });
}
var pageTransition = chargerPage('transition');
//console.log(pageTransition);
function loader(sec){
	var load = document.getElementById('load');
	load.style.display = "block";
	load.style.opacity = "1";
	setTimeout(function(){load.style.opacity = "0";}, sec + '000');
	setTimeout(function(){load.style.display = "none"; load.remove();}, sec + '100');
}
function Anchor(){
	this.lists = new Array();

	this.setAnchor = function(param_anchors){
		for (var i = param_anchors.length - 1; i >= 0; i--) {
			this.lists.push(param_anchors[i])
		}
	}
	this.getAnchors = function(){
		return this.lists;
	}
}

loader('2')

var CheminComplet	= document.location.href;
var NomDuFichier	= CheminComplet.substring(CheminComplet.lastIndexOf( "/" )+1 );
var urlOnLoad 			= NomDuFichier.replace('?page=', "");
setInterval(verifPage, 1000)

window.onload=function()
{
	$('#contenu').load('page-accueil.php');
	changePage(urlOnLoad, true);

	setTimeout(function(){
		var anchors = new Anchor();
		anchors.setAnchor(document.querySelectorAll('.leftbar a'));
		anchors.setAnchor(document.querySelectorAll('.listbar a'));
		anchors.setAnchor(document.querySelectorAll('.row_circle a'));
		anchors.setAnchor(document.querySelectorAll('.section a'));
		var allAnchors = anchors.getAnchors();
		console.log(allAnchors);
		for (var i = 0; i < allAnchors.length; i++) {
			allAnchors[i].addEventListener('click', function(e){
				//console.log('clic');
				e.preventDefault();
				var target = e.toElement;
				while (target.getAttribute('href') === null) {
					target = target.parentNode;
					console.log('target attr = ', target.getAttribute('href'));
				}
				//console.log('var target = ', target);
				window.target = target.getAttribute('href');
				changePage(target.getAttribute('href'));
			});
		}
	}, 100)
}






})()
</script>
</body>
</html>
