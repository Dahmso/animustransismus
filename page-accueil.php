<div class="page">
<div class="pageanimtransitransfo">
<div class="cercle1">
	<a href="animation/">
		<div class="animation">
			<h1>Animation</h1>
		</div>
	</a>
	</div>
	<div class="cercle">
	<a href="transition/">
		<div class="transition">
			<h1>Transition</h1>
		</div>
	</a>
</div>
	<div class="cercle">
	<a href="transformation/">
		<div class="transformation">
			<h1>Transformation</h1>
		</div>
	</a>
	</div>
</div>
<div class="grandediv">
<div class="pagevivezlexperience">
	<div id="balles">
 </div>
	<div class="atelier">
		<div class="title">Commencez l'expérience</div>
		<a href="#">PLAY</a>
 </div>
</div>
<div class="deuxpetitesdiv">
<div class="tutolink">
<a href="#">
<div class="tuto">
	<h2>Tutoriel</h2>
</div>
</a>
</div>
<div class="referencelink">
	<a href="#">
<div class="referencediv">
	<h2>References</h2>
</div>
</a>
</div>
</div>
</div>
<footer>
</footer>
</div> <!-- END PAGE -->



<style id="newstylecss">

</style>
<script>
var CreateBalls = {
	pickColor: "",
	obj:"",
	color: ["white"],
	addKeyframe: function() {
	 var size;
	 var screenSize = (window.innerWidth /100)* 40;
	 var screenHeight = window.innerHeight;
	 //console.log(screenHeight);
	 var randomSize = function() {
		 size = Math.floor((Math.random()* 20) + 4);
		 return size;
	 }
	 var randomHeight = function() {
		 return Math.floor(Math.random()* 200);
	 };
	 var randomTranslate = function() {
		 return Math.floor(Math.random()* screenSize);
	 };
	 var randomAnimDuration = function() {
		 return Math.floor(Math.random()* 5000);
	 }; // var pour appliqué une durée aléatoirement. || animation-duration:" + randomAnimDuration() +"ms;"+ "\n\
	 var styleDiv = document.querySelector("#newstylecss");
	 var ballcss = "#ball" + i + "{\n\
		animation-name: animball" + i + ";" + "\n\
		opacity:" + Math.random() + ";" + "\n\
		width:" + randomSize() + "px" + ";" + "\n\
		height:" + size + "px" + ";" + "\n\
		border-radius:" + 100 + "px" + ";" + "\n\
		animation-delay:" + randomAnimDuration() +"ms;"+ "\n\
	 }\n\
	 @keyframes animball" + i + " {\n\
		 0% {\n\
				 transform: translate(" + randomTranslate() + "px, " + randomHeight() + "px);\n\
				 z-index:" + "1;" + "\n\
		 }\n\
		 20% {\n\
				 transform: translate(" + randomTranslate() + "px, " + randomHeight() + "px);\n\
				 z-index:" + "1;" + "\n\
		 }\n\
		 40% {\n\
				 transform: translate(" + randomTranslate() + "px, " + randomHeight() + "px);\n\
				 z-index:" + "1;" + "\n\
		 }\n\
		 60% {\n\
				 transform: translate(" + randomTranslate() + "px, " + randomHeight() + "px);\n\
				 z-index:" + "1;" + "\n\
		 }\n\
		 80% {\n\
				 transform: translate(" + randomTranslate() + "px, " + randomHeight() + "px);\n\
				 z-index:" + "1;" + "\n\
		 }\n\
		 100% {\n\
				 transform: translate(" + randomTranslate() + "px, " + randomHeight() + "px);\n\
				 z-index:" + "1;" + "\n\
		 }\n\
	 }\n\
	 ";
	 styleDiv.innerHTML += ballcss;
 							 },
	randomColor: function() {
		var randomNumber =  Math.floor(Math.random()* this.color.length);
	 	this.pickColor = this.color[randomNumber];
							 },
	ball: function() {
		var container = document.querySelector('#balles');
		this.randomColor();
		this.addKeyframe();
		this.obj = document.createElement('div');
		this.obj.innerText = "";
		this.obj.id = "ball" + i;
		this.obj.className = "ball";
		this.obj.style.backgroundColor = this.pickColor;
		container.appendChild(this.obj);
			  }
		}
		for (var i = 0; i < 50; i++){
			CreateBalls.ball();
		};
		</script>
