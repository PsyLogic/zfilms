<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700');
@import url('https://fonts.googleapis.com/css?family=Catamaran:400,800');
.error-container {
  text-align: center;
  font-size: 30px;
  font-family: 'Catamaran', sans-serif;
  font-weight: 800;
  margin: 20px 15px;
}
.error-container > span {
  display: inline-block;
  line-height: 0.7;
  position: relative;
  color: #FFB485;
}
.error-container > span {
  display: inline-block;
  position: relative;
  vertical-align: middle;
}
.error-container > span:nth-of-type(1) {
  color: #D1F2A5;
  animation: colordancing 4s infinite;
}
.error-container > span:nth-of-type(3) {
  color: #F56991;
  animation: colordancing2 4s infinite;
}
.error-container > span:nth-of-type(2) {
  /* width: 120px; */
  height: 100px;
  border-radius: 999px;
}
/* .error-container > span:nth-of-type(2):before,
.error-container > span:nth-of-type(2):after {
    border-radius: 0%;
    content:"";
    position: absolute;
    top: 0; left: 0;
    width: inherit; height: inherit;
  border-radius: 999px;
    box-shadow: inset 30px 0 0 rgba(209, 242, 165, 0.4),
                inset 0 30px 0 rgba(239, 250, 180, 0.4),
                inset -30px 0 0 rgba(255, 196, 140, 0.4),   
                inset 0 -30px 0 rgba(245, 105, 145, 0.4);
  animation: shadowsdancing 4s infinite;
} */
.error-container > span:nth-of-type(2):before {
    -webkit-transform: rotate(45deg);
       -moz-transform: rotate(45deg);
            transform: rotate(45deg);
}

.screen-reader-text {
    position: absolute;
    top: -9999em;
    left: -9999em;
}
@keyframes shadowsdancing {
  0% {
    box-shadow: inset 30px 0 0 rgba(209, 242, 165, 0.4),
                inset 0 30px 0 rgba(239, 250, 180, 0.4),
                inset -30px 0 0 rgba(255, 196, 140, 0.4),   
                inset 0 -30px 0 rgba(245, 105, 145, 0.4);
  }
  25% {
    box-shadow: inset 30px 0 0 rgba(245, 105, 145, 0.4),
                inset 0 30px 0 rgba(209, 242, 165, 0.4),
                inset -30px 0 0 rgba(239, 250, 180, 0.4),   
                inset 0 -30px 0 rgba(255, 196, 140, 0.4);
  }
  50% {
     box-shadow: inset 30px 0 0 rgba(255, 196, 140, 0.4),
                inset 0 30px 0 rgba(245, 105, 145, 0.4),
                inset -30px 0 0 rgba(209, 242, 165, 0.4),   
                inset 0 -30px 0 rgba(239, 250, 180, 0.4);
  }
  75% {
   box-shadow: inset 30px 0 0 rgba(239, 250, 180, 0.4),
                inset 0 30px 0 rgba(255, 196, 140, 0.4),
                inset -30px 0 0 rgba(245, 105, 145, 0.4),   
                inset 0 -30px 0 rgba(209, 242, 165, 0.4);
  }
  100% {
    box-shadow: inset 30px 0 0 rgba(209, 242, 165, 0.4),
                inset 0 30px 0 rgba(239, 250, 180, 0.4),
                inset -30px 0 0 rgba(255, 196, 140, 0.4),   
                inset 0 -30px 0 rgba(245, 105, 145, 0.4);
  }
}
@keyframes colordancing {
  0% {
    color: #D1F2A5;
  }
  25% {
    color: #F56991;
  }
  50% {
    color: #FFC48C;
  }
  75% {
    color: #EFFAB4;
  }
  100% {
    color: #D1F2A5;
  }
}
@keyframes colordancing2 {
  0% {
    color: #FFC48C;
  }
  25% {
    color: #EFFAB4;
  }
  50% {
    color: #D1F2A5;
  }
  75% {
    color: #F56991;
  }
  100% {
    color: #FFC48C;
  }
}

/* demo stuff */
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

</style>
<div id="work" class="box">
    <div class="header">
        <div class="special-title">
            <nav>
                <h2>
                    <a href="#">
                        <img class="head-img" src="{{ asset('images/@stock/portfolio.png')}}" alt="">
                    </a>
                </h2>
            </nav>
        </div>
        <div class="desc invisible">
            <h2>Design is not just what it looks like and feels like. Design is how it works.</h2>
        </div>
    </div>
    <div class="four spacing"></div>

    <div class="row">
        <div class="large-12 columns">
            <div class="section-title">
                <h2>Projects</h2>
            </div>
        </div>
    </div>
    <div class="content invisible">
        
        <section class="error-container">
            <span>Under</span>
            <span><span class="screen-reader-text">0</span></span>
            <span>Construction</span>
        </section>
        <div class="two spacing"></div>
        
        <div class="row">
            <div class="large-12 columns">
                <div class="section-title">
                    <h2>Clients</h2>
                </div>
            </div>
        </div>
        <div class="two spacing"></div>
        <div class='row'>
            <div class='large-12 columns'>
                <div class='clients'>
                <div><a href="#"><img alt="" src="images/@stock/client-grey-1.png" /></a></div>
                <div><a href="#"><img alt="" src="images/@stock/client-grey-2.png" /></a></div>
                <div><a href="#"><img alt="" src="images/@stock/client-grey-3.png" /></a></div>
                <div><a href="#"><img alt="" src="images/@stock/client-grey-4.png" /></a></div>
                <div><a href="#"><img alt="" src="images/@stock/client-grey-5.png" /></a></div>
                <div><a href="#"><img alt="" src="images/@stock/client-grey-6.png" /></a></div>
                </div>
            </div>
        </div>
        {{-- 
            <div class="row">
            <div class="large-12 columns">
                <p>Parce que chaque projet est différent, Z’films s’engage à apporter à ses clients la solution la plus appropriée et efficace, que ce soit en termes d’écriture ou de choix de technique de réalisation. </p>
                <p>Z’Films s’allient avec des jeunes talents pour chaque projet. Chaque film est conçu dans un univers adapté aux clients, en faisant des choix de narration et de mise en scène qui leurs convient. </p>
                <p>L’innovation est primordiale chez Z’films, les nouvelles technologies constituent le moyen d’élargir et de développer le champ de vision et de la création.</p>
                <p>Avant sa création Zhor Rose produisait pendant des années sous un autre nom une activité de production de films institutionnels, de publicité, de série tv ... pour les grands comptes et les entreprises. Cette activité, repose sur un véritable savoir-faire en matière de communication audiovisuelle.</p>

            </div>
        </div>
        <div class="four spacing"></div>
        <div class="full">
            <div class='row'>
                <div class="two spacing"></div>
                <div class='large-12 columns'>
                    <div class='masonry-gallery' data-gutter="" id="masonry-gallery">
                        <div class='gallery-nav'>
                            <ul>
                                <li class='current'>
                                    <a data-cat='all' href='#'>All</a>
                                </li>
                                <li>
                                    <a data-cat='graphic-design' href='#'>Graphic Design</a>
                                </li>
                                <li>
                                    <a data-cat='web-design' href='#'>Web Design</a>
                                </li>
                                <li>
                                    <a data-cat='brand' href='#'>Brand</a>
                                </li>
                                <li>
                                    <a data-cat='development' href='#'>Development</a>
                                </li>
                                <li>
                                    <a data-cat='print' href='#'>Print</a>
                                </li>
                            </ul>
                        </div>
                        <ul class='gallery'>
                            <li class='graphic-design'>
                                <a href='portfolio-item.html' data-link='works/1.html'>
                                    <img alt="" src="{{ asset('images/@stock/msn-work-47.jpg')}}" />
                                    <div class='overlay'>
                                        <div class='thumb-info'>
                                            <h3>Beautiful Girl</h3>
                                            <p>Design &amp; Development</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class='web-design print'>
                                <a href='portfolio-item.html' data-link='works/2.html'>
                                    <img alt="" src="{{ asset('images/@stock/msn-work-52.jpg')}}" />
                                    <div class='overlay'>
                                        <div class='thumb-info'>
                                            <h3>Look at me</h3>
                                            <p>Design &amp; Development</p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class='development'>
                                <a href='portfolio-item.html' data-link='works/2.html'>
                                    <img alt="" src="{{ asset('images/@stock/msn-work-44.jpg')}}" />
                                    <div class='overlay'>
                                        <div class='thumb-info'>
                                            <h3>Umbrella</h3>
                                            <p>Design &amp; Development</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class='print brand'>
                                <a href='portfolio-item.html' data-link='works/3.html'>
                                    <img alt="" src="{{ asset('images/@stock/msn-work-45.jpg')}}" />
                                    <div class='overlay'>
                                        <div class='thumb-info'>
                                            <h3>Canned Bros</h3>
                                            <p>Design &amp; Development</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class='graphic-design'>
                                <a href='portfolio-item.html' data-link='works/1.html'>
                                    <img alt="" src="{{ asset('images/@stock/msn-work-31.jpg')}}" />
                                    <div class='overlay'>
                                        <div class='thumb-info'>
                                            <h3>Flower Book</h3>
                                            <p>Design &amp; Development</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class='graphic-design'>
                                <a href='portfolio-item.html' data-link='works/1.html'>
                                    <img alt="" src="{{ asset('images/@stock/msn-work-28.jpg')}}" />
                                    <div class='overlay'>
                                        <div class='thumb-info'>
                                            <h3>Flower Book</h3>
                                            <p>Design &amp; Development</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class='graphic-design'>
                                <a href='portfolio-item.html' data-link='works/1.html'>
                                    <img alt="" src="{{ asset('images/@stock/msn-work-50.jpg')}}" />
                                    <div class='overlay'>
                                        <div class='thumb-info'>
                                            <h3>Flower Book</h3>
                                            <p>Design &amp; Development</p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class='graphic-design'>
                                <a href='portfolio-item.html' data-link='works/3.html'>
                                    <img alt="" src="{{ asset('images/@stock/msn-work-49.jpg')}}" />
                                    <div class='overlay'>
                                        <div class='thumb-info'>
                                            <h3>Flower Book</h3>
                                            <p>Design &amp; Development</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class='graphic-design'>
                                <a href='portfolio-item.html' data-link='works/3.html'>
                                    <img alt="" src="{{ asset('images/@stock/msn-work-51.jpg')}}" />
                                    <div class='overlay'>
                                        <div class='thumb-info'>
                                            <h3>Flower Book</h3>
                                            <p>Design &amp; Development</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class='graphic-design'>
                                <a href='portfolio-item.html' data-link='works/3.html'>
                                    <img alt="" src="{{ asset('images/@stock/msn-work-43.jpg')}}" />
                                    <div class='overlay'>
                                        <div class='thumb-info'>
                                            <h3>Flower Book</h3>
                                            <p>Design &amp; Development</p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="four spacing"></div>
        <div class="four spacing"></div>
    </div>
</div>
