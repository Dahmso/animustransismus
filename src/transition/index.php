    <link rel="stylesheet" property="" href="./src/transition/style_transitions.css" media="screen">
    <link rel="stylesheet" property="" href="./src/transition/screen.css" media="screen">

    <div class="title">
        <h2 class="title_transition">Transitions CSS</h2>
        <div class="colored-line"></div>
    </div>

    <div id="regroupe">
        <div class="content">
            <div class="nom_transition">
                <p>Fondu</p>
            </div>
            <div class="square" id="fondu"></div>
            <div class="container">

                <button data-js="open">Voir le code</button>
            </div>
            <div class="popup1">
                <div><pre class="language-css line-numbers"><code>#fondu:hover {
              transition: all 0.5s ease-out;
              -webkit-transition: all 0.5s ease-in;
              -moz-transitions: all 0.5s ease-in;
          }
    </code></pre>
                </div>

            </div>
        </div>

        <div class="content" style="margin-right:0.60%">
            <div class="nom_transition">
                <p>Déplacement</p>
            </div>
            <div class="square" id="deplacement"></div>
            <div class="container">
                <button data-js="ouvrir">Voir le code</button>
            </div>
            <div class="popup2">
                <div><pre class="language-css line-numbers"><code>#deplacement {
  transition-property: top;
  -webkit-transition-property: top;
  transition-duration: .5s;
  transition-timing-function: ease-out;
  top: 0;
  position: relative;
}

#deplacement:hover {
  top: 22px;
}
</code></pre>
                </div>

            </div>
        </div>


        <div class="content">
            <div class="nom_transition">
                <p>Rotation</p>
            </div>
            <div class="square" id="rotate"></div>
            <div class="container">
                <button data-js="tourner">Voir le code</button>
            </div>
            <div class="popup3">
                <div><pre class="language-css line-numbers"><code>#rotate {
    transition-property: transform, width, height, top;
    -webkit-transition-property: transform, width, height, top;
    transition-duration: .5s;
    transition-timing-function: ease-out;
}

#rotate:hover {
    transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
    top: 20px;
}
</code></pre>
                </div>

            </div>
        </div>


        <div class="content">
            <div class="nom_transition">
                <p>Zoom</p>
            </div>
            <div class="square" id="zoom"></div>
            <div class="container">
                <button data-js="zoomer">Voir le code</button>
            </div>
            <div class="popup4">
                <div><pre class="language-css line-numbers"><code><pre class="language-css line-numbers"><code>#zoom {
    transition-property: transform;
    -webkit-transition-property: transform;
    transition-duration: .5s;
    transition-timing-function: ease-out;
}

#zoom:hover {
    transform: scale(1.2);
    -webkit-transform: scale(1.2);
}
</code></pre>
                </div>

            </div>
        </div>

        <div class="content">
            <div class="nom_transition">
                <p>Déformation</p>
            </div>
            <div class="square" id="deformation"></div>
            <div class="container">
                <button data-js="deformer">Voir le code</button>
            </div>
            <div class="popup5">
                <div><pre class="language-css line-numbers"><code><pre class="language-css line-numbers"><code>#deformation {
    transition: transform 0.5s ease-out;
    -webkit-transition: transform 0.5s ease-out;
}

#deformation:hover {
    transform: skew(45deg);
    -webkit-transform: skew(45deg);
}
</code></pre>
                </div>

            </div>
        </div>


        <div class="content">
            <div class="nom_transition">
                <p>Opacité</p>
            </div>
            <div class="square" id="opacity"></div>
            <div class="container">
                <button data-js="assombrir">Voir le code</button>
            </div>
            <div class="popup6">
                <div><pre class="language-css line-numbers"><code><pre class="language-css line-numbers"><code>#opacity:hover {
          opacity: 0.8;
          transition: all 0.5s ease-out;
          -webkit-transition: all 0.5s ease-in;
      }
    </code></pre>
                </div>

            </div>
        </div>

        <div class="content">
            <div class="nom_transition">
                <p>Largeur</p>
            </div>
            <div class="square" id="width"></div>
            <div class="container">
                <button data-js="agrandir">Voir le code</button>
            </div>
            <div class="popup7">
                <div><pre class="language-css line-numbers"><code><pre class="language-css line-numbers"><code>#width {
        transition: width 0.5s ease-out;
        -webkit-transition: width 0.5s ease-out;
    }

    #width:hover {
        width: 80%;
    }
  </code></pre>
                </div>

            </div>
        </div>


        <div class="content">
            <div class="nom_transition">
                <p>Delay</p>
            </div>
            <div class="square" id="delay"></div>
            <div class="container">
                <button data-js="attendre">Voir le code</button>
            </div>
            <div class="popup8">
                <div><pre class="language-css line-numbers"><code><pre class="language-css line-numbers"><code>#delay {
        transition: width 0.6s ease-in 0.4s;
        -webkit-transition: width 0.6s ease-in 0.4s;
    }

    #delay:hover {
        width: 80%;
    }
  </code></pre>
                </div>

            </div>
        </div>


        <div class="content">
            <div class="nom_transition">
                <p>Step</p>
            </div>
            <div class="square changementcouleur" id="step"></div>
            <div class="container">
                <button data-js="etape">Voir le code</button>
            </div>
            <div class="popup11">
                <div><pre class="language-css line-numbers"><code><pre class="language-css line-numbers"><code>#step {
        -webkit-transition-timing-function: steps(4, start);
        -moz-transition-timing-function: steps(4, start);
        -o-transition-timing-function: steps(4, start);
        transition-timing-function: steps(4, start);
    }

    #step:hover {
        background-color: #7FFFD4;
    }

    .changementcouleur {
        -webkit-transition-duration: 5s;
        -moz-transition-duration: 5s;
        -o-transition-duration: 5s;
        transition-duration: 5s;
        -webkit-transition-property: background-color;
        -moz-transition-property: background-color;
        -o-transition-property: background-color;
        transition-property: background-color;
    }
  </code></pre>
                </div>

            </div>
        </div>
    </div>


    <script type="text/javascript" src="./lib/prism/prism.js"></script>
    <script type="text/javascript" src="./src/transition/popup_transitions.js"></script>