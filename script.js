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
    var spanTop = document.querySelector("#rotatespantop");
    var spanBottom = document.querySelector("#rotatespanbottom");
    var spantoHide = document.querySelector("#hidespan");
    var spanMenu = document.querySelectorAll("#active_menu span");
    var iconMenu = document.querySelector("#active_menu");
    this.sidebar();
    this.closeSideBar();
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
  },
  closeSideBar: function() {
    var divLiSideBar = document.querySelectorAll(".lisidebar");
    for (var i = 0; i < divLiSideBar.length; i++) {
      var el = divLiSideBar[i];
      el.addEventListener('click', function(){
          if (this.status === false) {
              var menuSide = document.querySelector(".sidebar");
              menuSide.style.display = "-100%";
              status = false;
              this.clickButton();
          }
    }.bind(this));
  }
}
};
document.querySelector("#active_menu").addEventListener("click", toggleButton.clickButton.bind(toggleButton));
function changePage(param_url, param_load=null){
	var urlInSearchBar = window.location.pathname.replace('/', '');
	var $frame = $('#frame');
	//console.log('param_url : ', param_url);
	var url = param_url.replace('/', '')
	//console.log('url : ', url)
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
      moon.style.display = "block";
      contentMountains.style.display = "block";
      cloudsWrapper.style.display = "block";
  }
  if (elem === "animation") {
    contentHeader.style.display = "block";
    contentHeader.style.height = "20vh";
    moon.style.display = "block";
    contentMountains.style.display = "none";
  }
  if (elem === "transition") {
    contentHeader.style.display = "block";
    moon.style.display = "block";
    contentMountains.style.display = "block";
    cloudsWrapper.style.display = "none";
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
setInterval(verifPage, 500)


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
		//console.log(allAnchors);
		for (var i = 0; i < allAnchors.length; i++) {
			allAnchors[i].addEventListener('click', function(e){
				e.preventDefault();
				window.target = this.getAttribute('href');
				changePage(this.getAttribute('href'));
			}.bind(allAnchors[i]))
		}
	}, 100)
}


})()