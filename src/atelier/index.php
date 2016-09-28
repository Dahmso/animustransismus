<link rel="stylesheet" property="" href="./src/atelier/style.css" media="screen">

<div class="page">

<div id="list"></div>

</div> <!-- END PAGE -->

<script type="text/javascript">
;(function(alias){
"use strict";

setTimeout(function()
{

	document.getElementById('html').addEventListener('keyup', function(e)
	{
		var new_html = document.getElementById('new_html');
		new_html.innerHTML = editor_html.getValue();
	});

	document.getElementById('css').addEventListener('keyup', function(e)
	{
		var new_css = document.getElementById('new_css');
		new_css.innerHTML = editor_css.getValue();
	});




	function Popup (obj_exercice) {
		var popup = document.getElementById('popup');
		this.title = "Exercice " + (obj_exercice.nb + 1);
		this.text = obj_exercice.getText();
		this.css = obj_exercice.css;
		this.html = obj_exercice.html;

		document.getElementById('title').innerText = this.title;
		document.getElementById('text').innerText = this.text;

		popup.querySelector('.afaire > img').setAttribute('src', obj_exercice.getGif());

		editor_css.setValue(this.css, 0);
		editor_html.setValue(this.html, 0);

		var new_html = document.getElementById('new_html');
		new_html.innerHTML = editor_html.getValue();
		var new_css = document.getElementById('new_css');
		new_css.innerHTML = editor_css.getValue();

		var scroll = document.querySelector('body').scrollTop - 80;

		popup.setAttribute('style', 'display: block; top:' + scroll);
		setTimeout(function(){
			popup.style.opacity = "1";
			popup.setAttribute('style', popup.getAttribute('style') + '-webkit-filter: blur(0px);');
		}, 100)
		document.body.setAttribute('style', 'overflow:hidden;')
	}


	function Exercice (ex_nb, obj_fourniture_exercice){
			var popup = document.getElementById('popup');

			var directory = "./src/atelier/images/gif/";
			var gifname = "ex";
			this.nb = ex_nb;

			this.text = obj_fourniture_exercice.text;
			this.css = obj_fourniture_exercice.css;
			this.html = obj_fourniture_exercice.html;

			this.getGif = function(){
				return directory + gifname + this.nb + ".gif"
				//return directory + gifname + "1" + ".gif"

			};

			this.getText = function(){
				return this.text;
			};

			this.getExercice = function (){
				//<section onclick='exercices[" + this.nb + "].afficheExercice()'>
				var content = "	<section data-nb=" + this.nb + ">\
									<shadow class='abs-top'></shadow>\
									<h2>Exercice " + (this.nb + 1) + "</h2>\
									<div class='col-6 text'>\
										<p>" + this.getText()+ "</p>\
									</div>\
									<div class='col-6 exemple'>\
										<img src='" + this.getGif(this.nb) + "'>\
									</div>\
									<shadow class='abs-bottom'></shadow>\
								</section>";
				return content;
			};
	};


	var bloc_css = ".block{\n\
		width: 60px;\n\
		height: 60px;\n\
		background-color: rgb(238,242,243);\n\
		border-bottom: 4px solid red;\n\
		border-right: 4px solid blue;\n\
		border-left: 4px solid yellow;\n\
		border-top: 4px solid green;\n\
		animation-duration: 4000ms;  /* durée animation en milliseconde */\n\
		animation-timing-function: linear; /* courbe de vitesse animation notamment entre les differentes phases. */\n\
		animation-iteration-count: infinite; /* defini le nombre de fois qu'on applique l'animation à l'objet*/\n\
		}";
	var fournituresExercices = [
		{
			text: "Simple transition.",
			css: bloc_css + "\n\
				#giftranslatex {\n\
					  animation-name:translatex;   /* on annonce le nom animation defini dans le keyframes */\n\
					}\n\
					@keyframes translatex {\n\
					\n\
					}",
			html: '<div id="giftranslatex" class="block"></div>'
		},
		{
			text: "Rotation pendant une transition.",
			css: bloc_css + "\n\
				#giftranslatexandrotate {\n\
				  animation-name:translateandrotate;\n\
				}\n\
				@keyframes translateandrotate { /* ATTENTON QUAND ON FAIT UNE ANIMATION TOUJOURS SE BASER SUR LA POSITION INITIAL */\n\
				\n\
				}",
			html: '<div id="giftranslatexandrotate" class="block"></div>'
		},
		{
			text: "Rotation pendant une transition à la fois sur X et Y",
			css: bloc_css + "\n\
				#giftranslaterotatexy {\n\
				  animation-name:translateandrotatexy;\n\
				}\n\
				@keyframes translateandrotatexy {\n\
					\n\
				}",
			html: '<div id="giftranslaterotatexy" class="block"></div>'
		},
		{
			text: "Changement de plusieurs propriétés pendant une transition à la fois sur X et Y",
			css: bloc_css + "\n\
				#giftranslatenewprop {\n\
				  animation-name:translatenewprop;\n\
				}\n\
				@keyframes translatenewprop {\n\
				\n\
				}",
			html: '<div id="giftranslatenewprop" class="block"></div>'
		},
		{
		text: "Planet",
		css: ".stars {\n\
		  position: absolute;\n\
		  z-index: 2;\n\
		}\n\
		.meteor {\n\
		  animation-name: transimeteor;\n\
		  animation-duration: 30000ms;\n\
		  animation-fill-mode: forwards;\n\
		  animation-timing-function: linear;\n\
		  animation-iteration-count: infinite;\n\
		  position: absolute;\n\
		  z-index: 6;\n\
		}\n\
		.meteor img {\n\
		  width: 10%;\n\
		}\n\
		.planet img {\n\
		  width: 38%;\n\
		  z-index: 7;\n\
		}\n\
		.content {\n\
		  margin-top: 10%;\n\
		  position: absolute;\n\
		  width: 100%;\n\
		  z-index: 3;\n\
		}\n\
		.planet {\n\
		    text-align: center;\n\
		}\n\
		.moon {\n\
		  left: 43%;\n\
		  top: 27%;\n\
		  animation-name: Orbit;\n\
		  animation-duration: 10000ms;\n\
		  animation-fill-mode: forwards;\n\
		  animation-timing-function: linear;\n\
		  animation-iteration-count: infinite;\n\
		  position: absolute;\n\
		  z-index: 30;\n\
		}\n\
		.moon img {\n\
		  animation-name: spacerotation;\n\
		  animation-duration: 10000ms;\n\
		  animation-fill-mode: forwards;\n\
		  animation-timing-function: linear;\n\
		  animation-iteration-count: infinite;\n\
		  width: 30%;\n\
		}\n\
		.rocket {\n\
		 margin-left: -5vw;\n\
		}\n\
		.rocket img {\n\
		  animation-name: atterrissage;\n\
		  animation-duration: 10000ms;\n\
		  animation-timing-function: linear;\n\
		  animation-delay: 2s;\n\
		  animation-iteration-count: infinite;\n\
		  width: 5%;\n\
		  z-index: -1;\n\
		}\n\
		.flag img {\n\
		  width: 10%;\n\
		  position: absolute;\n\
		  left: 59%;\n\
		  top: 1%;\n\
		  visibility: hidden;\n\
		  animation-name: showflag;\n\
		  animation-duration: 1s;\n\
		  animation-delay: 8s;\n\
		  animation-timing-function: ease;\n\
		  animation-fill-mode: forwards;\n\
		  animation-iteration-count: infinite;\n\
		}",
		html:  "<div class='stars'>\n\
	      <img src='src/atelier/stars.png'/>\n\
	        </div>\n\
	        <div class='meteor'>\n\
	          <img src='src/atelier/meteor.png'/>\n\
	        </div>\n\
	    <div class='content'>\n\
	      <div class='flag'>\n\
	        <img src='src/atelier/flag.png'/>\n\
	      </div>\n\
	      <div class='planet'>\n\
	      <img src='src/atelier/planet.png'/>\n\
	      </div>\n\
	      <div class='moon'>\n\
	        <img src='src/atelier/moon.svg'/>\n\
	      </div>\n\
	      <div class='rocket'>\n\
	        <img src='src/atelier/rocket.png'/>\n\
	      </div>\n\
	    </div>"
      }
	];


	var exercices = new Array();

	var list = document.getElementById('list');
	for (var i = 0; i < fournituresExercices.length; i++) {
		var tmp_exercice = new Exercice(i, fournituresExercices[i]);
		list.innerHTML += tmp_exercice.getExercice(i);
		exercices.push(tmp_exercice);
	};

	var list_section = document.querySelectorAll('#list > section');
	for (var i = 0; i < list_section.length; i++) {
		list_section[i].addEventListener('click', function(e)
		{
			var nb = this.getAttribute('data-nb');
			var popup = new Popup(exercices[nb]);
			//console.log(editor_css.getValue());
		});
	};


	function choiceLng(element)
	{
		var lng = element.toElement.innerText;
		if (lng == "HTML") {
			document.querySelector('form > #html').style.display = "block";
			document.querySelector('#btn-html').className = "active";
			document.querySelector('form > #css').style.display = "none";
			document.querySelector('#btn-css').className = "";
		}
		if (lng == "CSS") {
			document.querySelector('form > #css').style.display = "block";
			document.querySelector('#btn-css').className = "active";
			document.querySelector('form > #html').style.display = "none";
			document.querySelector('#btn-html').className = "";
		}
	}

	document.getElementById('btn-html').addEventListener('click', choiceLng);
	document.getElementById('btn-css').addEventListener('click', choiceLng);

	document.getElementById('close').addEventListener('click', function(e)
	{
		var popup = document.getElementById('popup');
		popup.style.opacity = "0";
		setTimeout(function() {
			popup.setAttribute('style', popup.getAttribute('style') + '-webkit-filter: blur(50px);');
			popup.setAttribute('style', 'display: none');
		}, 300)
		document.body.setAttribute('style', 'overflow:auto;')
		document.getElementById('mfs').style.visibility = "hidden";
	});


	window.addEventListener('resize', function(){
		/*
		console.log('bodyWidth: ',document.body.clientWidth)
		console.log('bodyHeight: ',document.body.clientHeight)
		console.log('WindowWidth: ',window.innerWidth)
		console.log('WindowHeight: ',window.innerHeight)
		*/
		if (window.innerWidth > 992) {
			document.getElementById('btn-choice').style.display = "none";
		} else {
			document.getElementById('btn-choice').style.display = "block";
		}
	}, true);

	function afficheMessageForFullScreen(){document.getElementById('mfs').style.visibility = "visible";}

	editor_css.on("focus", afficheMessageForFullScreen);

	//console.log('2sec');
}, 500);

})()</script>
