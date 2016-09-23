<link rel="stylesheet" property="" href="./src/animation/style.css" media="screen">

<div class="page">

  <div class="row">
  <div class="container ctn-demo">
    <div class="row">
      <div class="col-md-12 text-center">
      <h1>Survolez les éléments pour visualiser les effets<br>Cliquez sur les titres pour découvrir le code</h1>
      <h2>Animation</h2>
        <div class="colored-line"></div>
        <div class="row ctn-demo">

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text1"><h3 class="click-btn">Bounce</h3></a>
              <div class="element img-circle " id="bounce"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text1">
            <div class="box">
              <a class="close" href="#bounce" onclick="ouvrir(this.href); return false">X</a>
              <p class="title">Animated bounce</p>
              <div class="bloc">
                <h2>Syntaxe</h2>
                <pre class="line-numbers language-css">
                <code>
                  /* déclaration des keyframes */
                @ keyframes bounce {
                  from{
                    transform : translateY(0);
                  }
                  to {
                    transform : translateY(-20px);
                  }
                }

                /* déclaration de l'élément et la propriété visés */
                #bounce:hover {
                  animation : bounce 0.35s linear alternate infinite;
                }
                </code>
                </pre>
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text2"><h3 class="click-btn">Flash</h3></a>
              <div class="element" id="flash"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text2">
            <div class="box">
              <a class="close"  href="#flash" onclick="ouvrir(this.href); return false">X</a>
              <p class="title">Animated flash</p>
              <div class="bloc">
                <h2>Syntaxe</h2>
                <pre class="line-numbers language-css">
                <code>
                  /* déclaration des keyframes */
                @ keyframes flash {
                  from, 50%, to{
                    opacity: 1;
                  }
                  25%, 75% {
                    opacity: 0;
                  }
                }

                /* déclaration de l'élément et la propriété visés */
                #flash:hover {
                  -webkit- animation : flash 0.5s linear alternate infinite;
                  animation : flash 0.5s linear alternate infinite;
                }
                </code>
                </pre>
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text3"><h3 class="click-btn">Pulse</h3></a>
              <div class="element img-circle uni" id="pulse"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text3">
            <div class="box">
              <a class="close"  href="#pulse" onclick="ouvrir(this.href); return false">X</a>
              <p class="title">Animated pulse</p>
              <div class="bloc">
                <h2>Syntaxe</h2>
                <pre class="line-numbers language-css">
                <code>
                  /* déclaration des keyframes */
                @ keyframes pulse {
                  from {
                    -webkit-transform: scale3d(1,1,1);
                    transform: scale3d(1,1,1);
                  }
                  50% {
                    -webkit-transform: scale3d(1.5,1.5,1.5);
                    transform: scale3d(1.5,1.5,1.5);
                  }
                  to {
                    -webkit-transform: scale3d(1,1,1);
                    transform: scale3d(1,1,1);
                  }
                }

                /* déclaration de l'élément et la propriété visés */
                #pulse:hover {
                  -webkit- animation : pulse 0.5s linear alternate infinite;
                  animation : pulse 0.5s linear alternate infinite;
                }
                </code>
                </pre>
              </div>
            </div>
          </div>
        </div>

        <div class="row ctn-demo">

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text4"><h3 class="click-btn-rb">RubberBand</h3></a>
              <div class="element" id="rubberBand"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text4">
            <div class="box">
              <a class="close"  href="#rubberBand" onclick="ouvrir(this.href); return false">X</a>
              <p class="title">Animated rubberBand</p>
              <div class="bloc">
                <h2>Syntaxe</h2>
                <pre class="line-numbers language-css">
                <code>
                  /* déclaration des keyframes */
                @ keyframes rubberBand {
                  from {
                      -webkit-transform: scale3d(1, 1, 1);
                      transform: scale3d(1, 1, 1);
                  }
                  30% {
                      -webkit-transform: scale3d(1.25, 0.75, 1);
                      transform: scale3d(1.25, 0.75, 1);
                  }
                  40% {
                      -webkit-transform: scale3d(0.75, 1.25, 1);
                      transform: scale3d(0.75, 1.25, 1);
                  }
                  50% {
                      -webkit-transform: scale3d(1.15, 0.85, 1);
                      transform: scale3d(1.15, 0.85, 1);
                  }
                  65% {
                      -webkit-transform: scale3d(.95, 1.05, 1);
                      transform: scale3d(.95, 1.05, 1);
                  }
                  75% {
                      -webkit-transform: scale3d(1.05, .95, 1);
                      transform: scale3d(1.05, .95, 1);
                  }
                  to {
                      -webkit-transform: scale3d(1, 1, 1);
                      transform: scale3d(1, 1, 1);
                  }
              }

                /* déclaration de l'élément et la propriété visés */
                  #rubberBand:hover {
                      -webkit-animation: rubberBand 0.50s linear alternate infinite;
                      animation: rubberBand 0.50s linear alternate infinite;
                }
                </code>
                </pre>
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text5"><h3 class="click-btn">Shake</h3></a>
              <div class="element img-circle" id="shake"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text5">
            <div class="box">
              <a class="close"  href="#shake" onclick="ouvrir(this.href); return false">X</a>
              <p class="title">Animated shake</p>
              <div class="bloc">
                <h2>Syntaxe</h2>
                <pre class="line-numbers language-css">
                <code>
                  /* déclaration des keyframes */
                @ keyframes shake {
                  from, to {
                      -webkit-transform: translate3d(0, 0, 0);
                      transform: translate3d(0, 0, 0);
                  }
                  10%, 30%, 50%, 70%, 90% {
                      -webkit-transform: translate3d(-10px, 0, 0);
                      transform: translate3d(-10px, 0, 0);
                  }
                  20%, 40%, 60%, 80% {
                      -webkit-transform: translate3d(10px, 0, 0);
                      transform: translate3d(10px, 0, 0);
                  }
              }

                /* déclaration de l'élément et la propriété visés */
                #shake:hover {
                    -webkit-animation: shake 0.50s linear alternate infinite;
                    animation: shake 0.50s linear alternate infinite;
                }
                </code>
                </pre>
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text9"><h3 class="click-btn">Jello</h3></a>
              <div class="element img-circle" id="jello"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text9">
            <div class="box">
              <a class="close"  href="#jello" onclick="ouvrir(this.href); return false">X</a>
              <p class="title">Animated jello</p>
              <div class="bloc">
                <h2>Syntaxe</h2>
                <pre class="line-numbers language-css">
                <code>
                  /* déclaration des keyframes */
                  @keyframes jello {
                      from, 11.1%, to {
                          -webkit-transform: none;
                          transform: none;
                      }
                      22.2% {
                          -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
                          transform: skewX(-12.5deg) skewY(-12.5deg);
                      }
                      33.3% {
                          -webkit-transform: skewX(6.25deg) skewY(6.25deg);
                          transform: skewX(6.25deg) skewY(6.25deg);
                      }
                      44.4% {
                          -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
                          transform: skewX(-3.125deg) skewY(-3.125deg);
                      }
                      55.5% {
                          -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
                          transform: skewX(1.5625deg) skewY(1.5625deg);
                      }
                      66.6% {
                          -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
                          transform: skewX(-0.78125deg) skewY(-0.78125deg);
                      }
                      77.7% {
                          -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
                          transform: skewX(0.390625deg) skewY(0.390625deg);
                      }
                      88.8% {
                          -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
                          transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
                      }
                  }

                /* déclaration de l'élément et la propriété visés */
                #jello:hover {
                    -webkit-animation: jello 0.50s linear alternate infinite;
                    animation: jello 0.50s linear alternate infinite;
                    -webkit-transform-origin: center;
                    transform-origin: center;
                }
                </code>
                </pre>
              </div>
            </div>
          </div>
        </div>

        <div class="row ctn-demo">

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text7"><h3 class="click-btn">Tada</h3></a>
              <div class="element" id="tada"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text7">
            <div class="box">
              <a class="close"  href="#tada" onclick="ouvrir(this.href); return false">X</a>
              <p class="title">Animated tada</p>
              <div class="bloc">
                <h2>Syntaxe</h2>
                <pre class="line-numbers language-css">
                <code>
                  /* déclaration des keyframes */
                  @keyframes tada {
                      from {
                          -webkit-transform: scale3d(1, 1, 1);
                          transform: scale3d(1, 1, 1);
                      }
                      10%, 20% {
                          -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
                          transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
                      }
                      30%, 50%, 70%, 90% {
                          -webkit-transform: scale3d(1.5, 1.5, 1.5) rotate3d(0, 0, 1, 3deg);
                          transform: scale3d(1.5, 1.5, 1.5) rotate3d(0, 0, 1, 3deg);
                      }
                      40%, 60%, 80% {
                          -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
                          transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
                      }
                      to {
                          -webkit-transform: scale3d(1, 1, 1);
                          transform: scale3d(1, 1, 1);
                      }
                  }

                /* déclaration de l'élément et la propriété visés */
                #tada:hover {
                    -webkit-animation: tada 0.50s linear alternate infinite;
                    animation: tada 0.50s linear alternate infinite;
                }
                </code>
                </pre>
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text8"><h3 class="click-btn">Wobble</h3></a>
              <div class="element" id="wobble"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text8">
            <div class="box">
              <a class="close"  href="#wobble" onclick="ouvrir(this.href); return false">X</a>
              <p class="title">Animated wobble</p>
              <div class="bloc">
                <h2>Syntaxe</h2>
                <pre class="line-numbers language-css">
                <code>
                  /* déclaration des keyframes */
                  @keyframes wobble {
                      from {
                          -webkit-transform: none;
                          transform: none;
                      }
                      15% {
                          -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
                          transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
                      }
                      30% {
                          -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
                          transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
                      }
                      45% {
                          -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
                          transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
                      }
                      60% {
                          -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
                          transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
                      }
                      75% {
                          -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
                          transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
                      }
                      to {
                          -webkit-transform: none;
                          transform: none;
                      }
                  }

                /* déclaration de l'élément et la propriété visés */
                #wobble:hover {
                    -webkit-animation: wobble 0.50s linear alternate infinite;
                    animation: wobble 0.50s linear alternate infinite;
                }
                </code>
                </pre>
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text6"><h3 class="click-btn">Swing</h3></a>
              <div class="element" id="swing"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text6">
            <div class="box">
              <a class="close"  href="#swing" onclick="ouvrir(this.href); return false">X</a>
              <p class="title">Animated swing</p>
              <div class="bloc">
                <h2>Syntaxe</h2>
                <pre class="line-numbers language-css">
                <code>
                  /* déclaration des keyframes */
                  @keyframes swing {
                      20% {
                          -webkit-transform: rotate3d(0, 0, 1, 15deg);
                          transform: rotate3d(0, 0, 1, 15deg);
                      }
                      40% {
                          -webkit-transform: rotate3d(0, 0, 1, -10deg);
                          transform: rotate3d(0, 0, 1, -10deg);
                      }
                      60% {
                          -webkit-transform: rotate3d(0, 0, 1, 5deg);
                          transform: rotate3d(0, 0, 1, 5deg);
                      }
                      80% {
                          -webkit-transform: rotate3d(0, 0, 1, -5deg);
                          transform: rotate3d(0, 0, 1, -5deg);
                      }
                      to {
                          -webkit-transform: rotate3d(0, 0, 1, 0deg);
                          transform: rotate3d(0, 0, 1, 0deg);
                      }
                  }

                /* déclaration de l'élément et la propriété visés */
                #swing:hover {
                    -webkit-transform-origin: top center;
                    transform-origin: top center;
                    -webkit-animation: swing 0.50s linear alternate infinite;
                    animation: swing 0.50s linear alternate infinite;
                }
                </code>
                </pre>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>
</div><!-- END PAGE -->
