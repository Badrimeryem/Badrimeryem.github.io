<!DOCTYPE html>
<!--
	MB by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="fr">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MB </title>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/animate.css"/>

		<link rel="stylesheet" href="css/style.css" />

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZXJBVDf7R4JqmSpopVPoduIGWx1IwpBM"></script>
    <script type="text/javascript" src="js/plugins.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	</head>
	<body>
	<div class="svg-wrap">
      <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-left" d="M26.667 10.667q1.104 0 1.885 0.781t0.781 1.885q0 1.125-0.792 1.896l-14.104 14.104h41.563q1.104 0 1.885 0.781t0.781 1.885-0.781 1.885-1.885 0.781h-41.563l14.104 14.104q0.792 0.771 0.792 1.896 0 1.104-0.781 1.885t-1.885 0.781q-1.125 0-1.896-0.771l-18.667-18.667q-0.771-0.813-0.771-1.896t0.771-1.896l18.667-18.667q0.792-0.771 1.896-0.771z"></path>
      </svg>

      <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-right" d="M37.333 10.667q1.125 0 1.896 0.771l18.667 18.667q0.771 0.771 0.771 1.896t-0.771 1.896l-18.667 18.667q-0.771 0.771-1.896 0.771-1.146 0-1.906-0.76t-0.76-1.906q0-1.125 0.771-1.896l14.125-14.104h-41.563q-1.104 0-1.885-0.781t-0.781-1.885 0.781-1.885 1.885-0.781h41.563l-14.125-14.104q-0.771-0.771-0.771-1.896 0-1.146 0.76-1.906t1.906-0.76z"></path>
      </svg>
    </div>


    <!-- MAIN CONTENT -->

   <div class="container-fluid">

    <!-- HEADER -->

    <section id="header">

      <!-- NAVIGATION -->
      <nav class="navbar navbar-fixed-top navbar-default bottom">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#header">MB</a>
          </div><!-- /.navbar-header -->

          <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#header">Accueil</a></li>
              <li><a href="#about">A propos</a></li>              
              <li><a href="#activite">Activité</a></li>
			  
			        <li><a href="#info">Info</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container -->
      </nav>

      <!-- SLIDER -->
      <div class="header-slide">
        <section>
          <div id="loader" class="pageload-overlay" data-opening="M 0,0 0,60 80,60 80,0 z M 80,0 40,30 0,60 40,30 z">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
              <path d="M 0,0 0,60 80,60 80,0 Z M 80,0 80,60 0,60 0,0 Z"/>
            </svg>
          </div> <!-- /.pageload-overlay -->
          
          <div class="image-slide bg-fixed">
            <div class="overlay">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">

                    <div class="slider-content">
                      <h1></h1>
                      <p>Création des sites web modernes <br> conception - Développement </p>
                    </div>

                  </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
              </div> <!-- /.container -->
            </div> <!-- /.overlay -->
          </div> <!-- /.image-slide -->

          <nav class="nav-slide">
            <a class="prev" href="#prev">
              <span class="icon-wrap">
                <svg class="icon" width="32" height="32" viewBox="0 0 64 64">
                  <use xlink:href="#arrow-left">
                </svg>
              </span>
              <div>
                <span>L'image précédente</span>
                <h3>...</h3>
                <p>...</p>
                <img alt="Previous thumb">
              </div>
            </a>
            <a class="next" href="#next">
              <span class="icon-wrap">
                <svg class="icon" width="32" height="32" viewBox="0 0 64 64">
                  <use xlink:href="#arrow-right">
                </svg>
              </span>
              <div>
                <span>La prochaine image</span>
                <h3>...</h3>
                <p>...</p>
                <img alt="Next thumb">
              </div>
            </a>
          </nav>
        </section>

        <script type="text/javascript">
        var dataHeader = [
                            {
                              bigImage :"images/slide-1.jpg",
                              title : "Conception web & mobile",
							  author : "Templatestock"
                            },
                            {
                              bigImage :"images/slide-2.jpg",
                              title : "Développement de modules et de fonctions personnalisées ",
                              author : "Templatestock"
                            },
                            {
                              bigImage :"images/slide-3.jpg",
                              title : "Responsive Web Design : votre site adapté à tous les supports",
                              author : "Templatestock"
                            }
                        ],
            loaderSVG = new SVGLoader(document.getElementById('loader'), {speedIn : 600, speedOut : 600, easingIn : mina.easeinout});
            loaderSVG.show()
        </script>

      </div><!-- /.header-slide -->
    </section>

    <!-- HEADER END -->


    <!-- ABOUT -->

    <section id="about" class="light">
      <header class="title">
        <h2>A propos de <span> Nous</span></h2>
        <p> Je m’appelle Meryem, j’habite à Lyon, je suis freelance et créateur de site internet, j’offre des solutions spécialisées aux entreprises à travers la refonte ou la création de leur site, de leur blog professionnel ou la réalisation de leur solution e-commerce. La création de votre site est accompagnée d’une prestation en optimisation pour le référencement et à la gestion de site .</p>
      </header>

      <div class="container">
        <div class="row table-row">
          <div class="col-sm-6 hidden-xs">
            <div class="section-content">
              <div class="big-image" style="background-image:url(images/resp2.jpg)"></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="section-content">
              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-cube blue-lignt-color"></i></div>
                <div class="about-detail">
                  <h4>Concept et cahier des charges</h4>
                  <p>Conception et recherche de fonctionnalités en adéquation avec vos objectifs.</p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-code blue-lignt-color"></i></div>
                <div class="about-detail">
                  <h4>Développement et webdesign</h4>
                  <p>Programmation et développement conformes aux standards. Créations graphiques originales ou adaptation de template en fonction du budget.</p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-desktop blue-lignt-color"></i></div>
                <div class="about-detail">
                  <h4>Webmastering, maintenance et référencemente</h4>
                  <p>Et après la mise en ligne ? Besoin d'un accompagnement, d'une aide à la rédaction ou à la maintenance technique, d'aller plus loin dans le référencement ?</p>
                </div>
              </div>

              
            </div>
          </div>
        </div> <!-- /.row table-row -->
      </div> <!-- /.container -->
    </section>
	
	
	    <!-- PORTFOLIO 

    <section id="portfolio" class="light">
      <header class="title">
        <h2>Portfolio</h2>
        <p>Lorem ipsum Cupidatat sit irure nostrud ut deserunt ad enim id laboris. Lorem ipsum Enim proident et eu et minim voluptate eiusmod ullamco commodo aliqua amet.</p>
      </header>

      <div class="container-fluid">
        <div class="row">
          <ul id="filters" class="list-inline">
            <li data-filter="all" class="filter">All</li>
            <li data-filter=".branding" class="filter">Branding</li> 
            <li data-filter=".graphic" class="filter">Graphic</li> 
            <li data-filter=".printing" class="filter">Printing</li> 
            <li data-filter=".video" class="filter">Video</li> 
          </ul>
        </div>

        <div class="row">
          <div class="container-portfolio">
           
            <script type="text/javascript">
            var portfolio = [
                    {
                      category : "branding",
                      image : "images/p-1.png",
                      title : "AUDIT",
                      link : "#none",
                      text : "L'adaptation multi-supports des sites web : un nouveau besoin, une autre façon de concevoir la structure d'un site."
                    },
                    {
                      category : "graphic",
                      image : "images/p-2.png",
                      title : " HÉBERGEMENT",
                      link : "#none",
                      text : "Un terme qui regroupe de multiples demandes : concevoir un nouveau module, élargir le périmètre d'un site, fournir de nouveaux services à ses clients..."
                    },
                    {
                      category : "graphic",
                      image : "images/p-3.png",
                      title : "CONCEPTION>",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    },
                    {
                      category : "video",
                      image : "images/p-4.png",
                      title : "RESPONSIVE DESIGN>",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    },
                    {
                      category : "branding",
                      image : "images/p-5.png",
                      title : "DÉVELOPPEMENT",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    },
                    {
                      category : "printing",
                      image : "images/p-6.png",
                      title : "RÉFÉRENCEMENT",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    },
                    {
                      category : "printing",
                      image : "images/p-7.png",
                      title : "IG <span>Shop</span>",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    },
                    {
                      category : "printing",
                      image : "images/p-8.png",
                      title : "Tana <span>Samawa</span>",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    }
                ];
            </script>
          </div>
        </div>
      </div>
    </section>
    -->

    <!-- TEAM 

    <section id="team" class="light">
      <header class="title">
        <h2>Creative <span>Team</span></h2>
        <p>Lorem ipsum Dolor et reprehenderit laborum deserunt aliquip incididunt tempor id non. Lorem ipsum Fugiat anim labore cupidatat consequat non in sit dolore anim anim consequat nisi.</p>
      </header>
      
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 text-center">
            <div class="wrap animated" data-animate="fadeInDown">
              <div class="img-team">
                <img src="images/team-1.png" alt="" class="img-circle">
              </div>

              <h3>John Doe</h3>
              <h5>Creative Director</h5>

              <p>Lorem ipsum Proident incididunt sint dolor cupidatat pariatur dolore magna pariatur in ea aliqua.</p>

              <div class="team-social">
                <ul class="list-inline social-list">
                  <li><a href="#" class="fa fa-twitter"></a></li>
                  <li><a href="#" class="fa fa-linkedin"></a></li>
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul> 
              </div>                
            </div>
          </div>

          <div class="col-md-3 col-sm-6 text-center">
            <div class="wrap animated" data-animate="fadeInDown"> 
              <div class="img-team">
                <img src="images/team-2.png" alt="" class="img-circle">
              </div>

              <h3>Ellie Morgan</h3>
              <h5>Designer</h5>

              <p>Lorem ipsum Proident incididunt sint dolor cupidatat pariatur dolore magna pariatur in ea aliqua.</p>

              <div class="team-social">
                <ul class="list-inline social-list">
                  <li><a href="#" class="fa fa-twitter"></a></li>
                  <li><a href="#" class="fa fa-linkedin"></a></li>
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul> 
              </div>                
            </div>
          </div>

          <div class="col-md-3 col-sm-6 text-center">
            <div class="wrap animated" data-animate="fadeInDown"> 
              <div class="img-team">
                <img src="images/team-3.png" alt="" class="img-circle">
              </div>

              <h3>Elche</h3>
              <h5>Developer</h5>

              <p>Lorem ipsum Proident incididunt sint dolor cupidatat pariatur dolore magna pariatur in ea aliqua.</p>

              <div class="team-social">
                <ul class="list-inline social-list">
                  <li><a href="#" class="fa fa-twitter"></a></li>
                  <li><a href="#" class="fa fa-linkedin"></a></li>
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul> 
              </div>                
            </div>
          </div>

          <div class="col-md-3 col-sm-6 text-center">
            <div class="wrap animated" data-animate="fadeInDown"> 
              <div class="img-team">
                <img src="images/team-4.png" alt="" class="img-circle">
              </div>

              <h3>JF Thiago</h3>
              <h5>Commerce</h5>

              <p>Lorem ipsum Proident incididunt sint dolor cupidatat pariatur dolore magna pariatur in ea aliqua.</p>

              <div class="team-social">
                <ul class="list-inline social-list">
                  <li><a href="#" class="fa fa-twitter"></a></li>
                  <li><a href="#" class="fa fa-linkedin"></a></li>
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul> 
              </div>                
            </div>
          </div>
        </div>
      </div>
    </section>
    <figure class="portfolio-view branding" style="width: 616px; height: 503px; display: inline-block;"><img src="images/p-1.png"><figcaption><h2>Charming <span>Roxy</span></h2><p>Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur.</p><a href="#none">View more</a></figcaption></figure>
	  -->
    <section id="activite" class="light">
      <header class="title">
        <h2>Nos <span>Activités</span></h2>
        
      </header>

      <div class="container-fluid">
        

        <div class="row">
          <div class="container-portfolio">
            <!-- PORTFOLIO OBJECT -->
            <script type="text/javascript">
            var portfolio = [
                    {
                      
                      image : "images/audit.jpeg",
                      title : "<span>Audit</span>",
                      link : "#none",
                      text : "Faire auditer son site web, c'est avoir l'assurance de disposer des meilleurs outils pour la présence en ligne de son entreprise."
                    },
                    {
                      
                      image : "images/hebergement.jpg",
                      title : "<span>Hébergement</span>",
                      link : "#none",
                      text : "Adaptez votre hébergement aux besoins réels de votre site, en fonction de sa conception, de sa structure et de son trafic."
                    },
                    {
                      
                      image : "images/conception.jpg",
                      title : "<span>Conception</span>",
                      link : "#none",
                      text : "Positionnement, fonctionnalités, stratégie : concevoir un site ou le retravailler dans le cadre d'une refonte complète."
                    },
                    {
                      
                      image : "images/responsive.jpg",
                      title : "<span>Responsive Design</span>",
                      link : "#none",
                      text : "L'adaptation multi-supports des sites web : un nouveau besoin, une autre façon de concevoir la structure d'un site."
                    },
                    {
                      
                      image : "images/developpement.jpg",
                      title : "<span>Developpement</span>",
                      link : "#none",
                      text : "Un terme qui regroupe de multiples demandes : concevoir un nouveau module, élargir le périmètre d'un site, fournir de nouveaux services à ses clients..."
                    },
                    {
                      
                      image : "images/referencement.jpg",
                      title : "<span>Référencement</span>",
                      link : "#none",
                      text : "Faire connaître son site et améliorer son positionnement dans les moteurs de recherche."
                    },
                    
                ];
            </script>
          </div>
        </div>
      </div>
    </section>


    
    <!-- end section -->
    

        
	    <!-- INFO -->

    <section id="info" class="dark">
      <header class="title">
        <h2>Nos <span>Expertise</span></h2>
        <p>Lorem ipsum Nulla in incididunt esse tempor dolore ad voluptate aliquip magna sed in.</p>
      </header>

      <div class="container experties">
        <div class="row">
          <div class="col-md-6">
            <div class="skill">
              <ul class="skill-bar list-unstyled">
                <li><span class="percentage" data-value="80%"><br></span><em>Analyse & conception<br></em></li>
                <li><span class="percentage" data-value="75%"><br></span><em>Web design & intégration<br></em></li>
                <li><span class="percentage" data-value="90%"></span><em>Développement</em></li>
              </ul>
            </div>
          </div>

          <div class="col-md-6">
            <div class="skill">
              <ul class="skill-bar list-unstyled">
                <li><span class="percentage" data-value="73%"><br></span><em>Stratégie de référencement<br></em></li>
                <li><span class="percentage" data-value="80%"><br></span><em>Optimisation de contenu<br></em></li>
                <li><span class="percentage" data-value="43%"></span><em>Logo</em></li>
              </ul>
            </div>
          </div>
        </div>
      </div> <!-- /.container -->
    </section>	
	

    <section class="separator blue">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="0">
              <div class="counter-icon">
                <i class="fa fa-group"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="8"></span>
                <small>Clients</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="500">
              <div class="counter-icon">
                <i class="fa fa-leaf"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="2"></span>
                <small>Prix</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="1000">
              <div class="counter-icon">
                <i class="fa fa-gears"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="12"></span>
                <small>Projets</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="1500">
              <div class="counter-icon">
                <i class="fa fa-inbox"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="56"></span>
                <small>Mail</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- FOOTER CONTACT -->

     <section id="contact" class="dark">
      <header class="title">
        <h2>Contacter <span>Nous</span></h2>
        
      </header>

      <div class="container">
        <div class="row">
          <div class="col-md-8 animated" data-animate="fadeInLeft">
            <form method="post" action='envoi.php' >
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Nom" name="nom" required>
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Adresse Email" name="email" required>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" rows="3" placeholder="Dites nous tout .. " name="message" required></textarea>
                </div>
                
                <div class="col-md-12">
                  <input class="btn btn-default submit" type="submit">
                </div>
              </div>
            </form>
           
          </div>

          <div class="col-md-4 animated" data-animate="fadeInRight">
            <address>
                <span><i class="fa fa-map-marker fa-lg"></i> 15 rue du port de l ecu </span>
                <span><i class="fa fa-phone fa-lg"></i> + 33 7 78 52 35 74</span>
                <span><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:meryembadrifu@gmail.com">meryembadrifu&#64;gmail.com</a></span>
                <span><i class="fa fa-linkedin fa-lg"></i> <a href="https://www.linkedin.com/in/meryem-badri/">meryem.badri</a></span>
            </address>
          </div>
		  
        </div>
      </div>
    </section>

    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Créé par  <i class="fa fa-heart"></i> <a href="http://templatestock.co"> Meryem BADRI</a></p>
            <p><small>© 2021</small></p>
          </div>
        </div>
      </div>
    </section>

   </div><!-- /.container-fluid -->
    
    <!-- SCRIPT -->
    <script type="text/javascript" src="js/main.js"></script>
	</body>
</html>