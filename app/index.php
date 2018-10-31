<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Hi Welcome to my code, made with coffee, music and BEM methodology -->
    <meta charset="UTF-8">
    <title>Federico Martín | Desarrollo Web</title>
    
    <!-- Meta tags -->
    <meta name="description" content="Desarrollo profesional de sitios web, 100% adaptables a todos los dispositivos">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Styles css -->
    <link rel="stylesheet" href="../app/temp/styles/styles.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
    
    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body id="body">
    <!-- go up -->
        <span class="goup"><a href="#body" class="icon-up-thin"></a></span>
    <!-- end go up -->
    <!-- Start Header -->
    <header class="site-header">
       <div class="site-header__menu-icon">
           <div class="site-header__menu-icon__middle"></div>
           <span class="site-header__menu-icon__title">MENU</span>
       </div>
       
       <nav class="site-header__primary">
           <ul>
               <li><a href="#body" id="about-link" class="icon-home-house-streamline">Home</a></li>
               <li><a href="#about" id="about-link" class="icon-settings-1">About Me</a></li>
               <li><a href="#services" class="icon-terminal" id="services-link">What can I do</a></li>
               <li><a href="#tecno" id="tecno-link" class="icon-settings">Technologies</a></li>
               <li><a href="#portfolio" class="icon-streamline-suitcase-travel" id="portfolio-link">Portfolio</a></li>
               <li><a href="#contact" class="icon-comments-o" id="contact-link">Get in touch</a></li>
           </ul>
       </nav>
       
       <nav class="site-header__nav-menu">
           <ul>
               <li class="noSelect"><a href="#body" class="icon-home-house-streamline" id="about-link"></a></li>
               <li><a href="#about" class="icon-settings-1" id="services-link"></a></li>
               <li><a href="#services" class="icon-terminal" id="services-link"></a></li>
               <li><a href="#tecno" class="icon-settings"></a></li>
               <li><a href="#portfolio" class="icon-streamline-suitcase-travel"></a></li>
               <li><a href="#contact" class="icon-comments-o"></a></li>
           </ul>
       </nav>
    </header>
    <!-- End Header -->
    
    <!-- Start Home -->
    <section class="home page-section page-section--all-h" id="home">
        <div id="particles-js" class="home__particulas"></div>        
        <!--<img src="assets/images/Detailed-Tree-Silhouette.jpg" alt="Tree Silhouette" class="home__img">-->
        <div class="container zindex">
            <div class="home__box">
                <span class="icon-computer-macintosh-vintage home__box__icon"></span>
                <div class="home__box__top">My name is Federico</div>
                <h1 class="home__box__title">I'M A FRONT-END DEVELOPER</h1>
                <p class="home__box__description">from Buenos Aires, Argentina. If you want to learn more about me, hit the button&nbsp;below</p>
                <a href="#" class="button">SEE MORE</a>
                <div class="home__box__top home__box__top--bb"><p>My name is Federico</p></div>    
            </div>
        </div>
    </section>
    <!-- End Home -->
    
    <!-- Start About Me -->
    <section class="about page-section" id="about" data-matching-link="#about-link">
        <div class="container">
            <h2 class="title">About me</h2>
            <div class="about__description">
                <p>I have a passion for web develpment and love to create for web and mobile devices, I think that a front-end developer's role is to combine design and business logic to achieve an user-facing product. To do this successfully, a wide skill set is necessary to produce a quality user experience that leads to meeting business goals.
                With my experience I can create responsive websites that work on a wide range of devices or integrate your website into an easy to use content management system.
                If you have a project that you want to get started or think you need my help with something, then get in touch.
                </p>
            </div>
        
            <img class="about__img-corner" src="assets/images/grunge-corner.svg" alt="Grunge Corner">
        
        <div class="about__img-code">
            <img src="assets/images/html-5-logo.svg" alt="Logo Html">
            <img src="assets/images/js.svg" alt="Logo Js">
            <img src="assets/images/css-3.svg" alt="Logo css3">
        </div>
        </div>    
    </section>
    <!-- End About Me -->
    
    <!-- Start Services -->
    <main class="services page-section" id="services" data-matching-link="#services-link">
        <div class="container">
            <h2 class="title">What can I do</h2>
            <div class="row">
               
                <div class="services__item--content col-md-4">
                    <article class="services__item">
                        <span class="icon-code services__icon"></span>
                        <h3 class="services__title">DEVELOPMENT</h3>
                        <p class="services__description">Responsive development will help make your website easily accessible across all devices.</p>
                    </article>
                </div>
                
                <div class="services__item--content col-md-4">
                    <article class="services__item">
                        <span class="icon-pencil services__icon"></span>
                        <h3 class="services__title">DESIGN</h3>    
                        <p class="services__description">Each of my designs begins with a blank canvas which allows your content to guide the layout.</p>
                    </article>
                </div>
                
                <div class="services__item--content col-md-4">
                    <article class="services__item">
                        <span class="icon-pencil services__icon"></span>
                        <h3 class="services__title">WORDPRESS</h3>
                        <p class="services__description">Development of custom and user-friendly WordPress themes.</p>
                    </article>
                </div>
            </div>
        </div>      
    </main>
    <!-- End Services -->
    
    <!-- Start Technologies -->
        <section class="tecno page-section" id="tecno" data-matching-link="#tecno-link">
            <img class="tecno__img" src="assets/images/skyline.svg" alt="Buenos Aires">
            <div class="container">
                <h2 class="title">Technologies</h2>

                <div class="tecno__list">
                    <ul>
                        <li>- HTML5</li>
                        <li>- CSS3</li>
                        <li>- JavaScript</li>
                        <li>- JQuery</li>
                        <li>- NodeJS</li>
                        <li>- Bootstrap</li>
                        <li>- Sass</li>
                        <li>- PostCSS</li>
                        <li>- Git</li>
                        <li>- Babel</li>
                        <li>- WebPack</li>
                        <li>- WordPress</li>
                    </ul>
                </div>
            </div>
        </section>
    <!-- End Technologies -->

    <!-- Start Portfolio -->
    <main class="services page-section" id="portfolio" data-matching-link="#portfolio-link">
        <div class="container">
            <h2 class="title">My Portfolio</h2>
            <div class="row">
               
                <div class="services__item--content col-xs-6 col-md-4">
                    <a href="assets/images/rsz_travel.jpg" target="_blank">
                        <img class="portfolio__item--wrapper__img" alt="travel" src="assets/images/rsz_travel.jpg" />
                    </a>
                </div>

                <div class="services__item--content col-xs-6 col-md-4">
                    <a href="assets/images/rsz_tahk.jpg">
                        <img class="portfolio__item--wrapper__img" alt="tahk" src="assets/images/rsz_tahk.jpg" />
                    </a>
                </div>
                
                <div class="services__item--content col-xs-6 col-md-4">
                    <a href="assets/images/rsz_1zeit-fema.jpg">
                        <img class="portfolio__item--wrapper__img" alt="zeit" src="assets/images/rsz_1zeit-fema.jpg" />
                    </a>
                </div>
                
                <div class="services__item--content col-xs-6 col-md-4">
                    <a href="assets/images/rsz_maverick.jpg">
                        <img class="portfolio__item--wrapper__img" alt="maverick" src="assets/images/rsz_maverick.jpg" />
                    </a>
                </div>
                
                <div class="services__item--content col-xs-6 col-md-4">
                    <a href="assets/images/rsz_piggame.jpg">
                        <img class="portfolio__item--wrapper__img" alt="piggame" src="assets/images/rsz_piggame.jpg" />
                    </a>
                </div>
            
            </div>
        </div>      
    </main>
    <!-- End Portfolio -->
    
    <!-- Start Contact -->
    <section class="contact page-section" id="contact" data-matching-link="#contact-link">
        <div class="container">
            <h2 class="title">Get in Touch</h2>
            
            <form action="post" class="contact__form">
               <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <input type="text" placeholder="Name" name="name">
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <input type="text" placeholder="E-mail" name="email">
                    </div>
                    <div class="col-xs-12">
                        <input type="text" placeholder="Subject" name="subject">
                    </div>
                    <div class="col-xs-12">
                        <textarea name="messaje" placeholder="Message" id="message"></textarea>
                    </div>
                    <div class="col-xs-5 col-sm-3">
                        <input type="submit" value="SEND" class="button">
                    </div>
                </div>
            </form>
            
        </div>
    </section>
    <!-- End Contact -->
    
    <!-- Start Footer -->
    <footer class="footer page-section" id="footer">
        <p class="footer__paragraph">Copyright &copy; <?php echo DATE('Y'); ?> Federico Martín | All Rights Reserved.</p>
    </footer>
    <!-- End Footer -->
    <script src="temp/scripts/App.js"></script>   
    <script src="./temp/scripts/particles.js"></script>
    <script src="./temp/scripts/partiapp.js"></script>  
   
</body>
</html>