<div class="page">
	<div class="row_circle">

	   <div class="section_circle">
	   		<a href="transition/" class="box_circle">
		     	<div class="circle" id="color1"></div>
		     	<span>Transitions</span>
		     </a>
		</div>

	   <div class="section_circle">
		    <a href="animation/" class="box_circle">
		     	<div class="circle" id="color2"></div>
		     	<span>Animations</span>
		     </a>
		</div>

	   <div class="section_circle">
		    <a href="transformation/" class="box_circle">
		     	<div class="circle" id="color3"></div>
		     	<span>Transformations</span>
		     </a>
		</div>
	</div>

	  <div class="section">

	    <div class="section_left">
	      <div id="balles"></div>
	      <div class="atelier">
	        <h2>Commencez l'expérience</h2>
	        	<a href="atelier/"></a>
	      </div>
	    </div>

	    <div class="section_right">
	      <div class="tutoriel">
	        <a href="annexe">
	           <h2></h2>
	        </a>
	      </div>
	      <div class="reference">
	        <a href="#">
	           <h2>Références</h2>
	        </a>
	      </div>
	    </div>

	  </div>

	<footer>
		<div class="copyright">
			<span class="c">© LR/CJ/NM/SD/YB</span>
			<span class="vingt">20</span>
			<span class="seize">16</span>
		</div>

	</footer>
	</div>
	<!-- END PAGE -->



	<style id="newstylecss">

	</style>
	<script>
	var CreateBalls = {
	  pickColor: "",
	  obj: "",
	  color: ["white"],
	  addKeyframe: function () {
	    var size;
	    var divWidth = document.querySelector(".section_left").offsetWidth;
	    var divHeight = document.querySelector(".section_left").offsetHeight;
	    console.log("width :",divWidth, "height :", divHeight);
	    var randomSize = function () {
	      size = Math.floor((Math.random() * 10) + 4);
	      return size;
	    }
	    var randomHeight = function () {
	      return Math.floor((Math.random() * divHeight)) ;
	    };
	    var randomTranslate = function () {
	      return Math.floor(Math.random() * divWidth);
	    };
	    var randomAnimDuration = function () {
	      return Math.floor(Math.random() * 5000);
	    }; // var pour appliqué une durée aléatoirement. || animation-duration:" + randomAnimDuration() +"ms;"+ "\n\
	    var styleDiv = document.querySelector("#newstylecss");
	    var ballcss = "#ball" + i + "{\n\
		animation-name: animball" + i + ";" + "\n\
		opacity:" + Math.random() + ";" + "\n\
		width:" + randomSize() + "px" + ";" + "\n\
		height:" + size + "px" + ";" + "\n\
		border-radius:" + 100 + "px" + ";" + "\n\
		animation-delay:" + randomAnimDuration() + "ms;" + "\n\
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
	    //console.log(ballcss);
	    styleDiv.innerHTML += ballcss;
	  },
	  randomColor: function () {
	    var randomNumber = Math.floor(Math.random() * this.color.length);
	    this.pickColor = this.color[randomNumber];
	  },
	  ball: function () {
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

	for (var i = 0; i < 50; i++) {
	  CreateBalls.ball();

	};
	</script>
