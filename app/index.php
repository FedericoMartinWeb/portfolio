<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Federico Martín | Desarrollo web</title>
    
    <!-- Meta tags -->
    <meta name="description" content="Desarrollo profesional de sitios web, 100% adaptables a todos los dispositivos">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Styles css -->
    <link rel="stylesheet" href="../app/temp/styles/styles.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
    
    <!-- Icons -->
    <link href="https://file.myfontastic.com/Fe6YFffCEVhcvQVzVyqwRm/icons.css" rel="stylesheet">
    
    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <!-- Start Header -->
    <header class="site-header">
       <div class="site-header__menu-icon">
           <div class="site-header__menu-icon__middle">Menu</div>
       </div>
       
       <nav class="site-header__nav-menu">
           <ul>
               <li><a href="#" class="icon-home-house-streamline"></a></li>
               <li><a href="#" class="icon-settings-1"></a></li>
               <li><a href="#" class="icon-settings"></a></li>
               <li><a href="#" class="icon-streamline-suitcase-travel"></a></li>
               <li><a href="#" class="icon-comments-o"></a></li>
           </ul>
       </nav>
    </header>
    <!-- End Header -->
    
    <!-- Start Home -->
    <section class="home" id="home">
        <div class="home__img">
            <img src="assets/images/Detailed-Tree-Silhouette.svg" alt="Tree Silhouette" style="display: none;">
        </div>
        
        <div class="home__box">
            <div class="home__box__top">
                <p>My name is federico</p>
            </div>
            <h1 class="home__box__title">I'M A WEB DEVELOPER</h1>
            <p class="home__box__description">from Buenos Aires, Argentina. If you want to learn more about me, hit the button below</p>
            <a href="#" class="btn">SEE MORE</a>
            <div class="home__box_bottom"></div>    
        </div>
    </section>
    <!-- End Home -->
    
    <!-- Start About Me -->
    <section class="about" id="about">
        <h2 class="section-title">About me</h2>
        
        <div class="about__description">
            <p>Live-edge seitan forage cornhole biodiesel typewriter. Cardigan succulents meditation, ugh blog YOLO narwhal raw denim plaid heirloom distillery tote bag master cleanse. La croix chambray everyday carry, kickstarter selfies cold-pressed ennui retro. YOLO edison bulb narwhal, food truck mustache sriracha copper mug glossier craft beer cronut +1 lomo iPhone church-key banh mi. Neutra thundercats kitsch chartreuse. Live-edge seitan forage cornhole biodiesel typewriter. Cardigan succulents meditation, ugh blog YOLO narwhal raw denim plaid heirloom distillery tote bag master cleanse. La croix chambray everyday carry, kickstarter selfies cold-pressed ennui retro. YOLO edison bulb narwhal, food truck mustache sriracha copper mug glossier craft beer cronut +1 lomo iPhone church-key banh mi. Neutra thundercats kitsch chartreuse. La croix chambray everyday carry, kickstarter selfies cold-pressed ennui retro. YOLO edison bulb narwhal, food truck mustache sriracha copper mug glossier craft beer cronut +1 lomo iPhone church-key banh mi. Neutra thundercats kitsch chartreuse.</p>
        </div>
        
        <div class="about__img">
            <img src="assets/images/grunge-corner.svg" alt="Grunge Corner">
        </div>
    </section>
    <!-- End About Me -->
    
    <!-- Start Services -->
    <main class="services" id="services">
        <h2 class="section-title">What can I do</h2>
        <article class="services__item">
            <span class="icon-code"></span>
            <h3 class="services__title">DEVELOPMENT</h3>
            <p class="services__description">Responsive development will help make your website easily accessible across all devices.</p>
        </article>
        
        <article class="services__item">
            <span class="icon-pencil"></span>
            <h3 class="services__title">DESIGN</h3>
            <p class="services__description">Each of my designs begins with a blank canvas which allows your content to guide the layout.</p>
        </article>
        
        <article class="services__item">
            <span class="icon-pencil"></span>
            <h3 class="services__title">SUPPORT</h3>
            <p class="services__description">Responsive development will help make your website easily accessible across all devices.</p>
        </article>      
    </main>
    <!-- End Services -->
    
    <!-- Start Technologies -->
        <section class="technologies" id="technologies">
            <h2 class="section-title">Technologies</h2>
            
            <div class="technologies__list">
                <ul>
                    <li>- HTML5</li>
                    <li>- CSS3</li>
                    <li>- VanillaJS</li>
                    <li>- JQuery</li>
                    <li>- NodeJS</li>
                    <li>- Bootstrap</li>
                    <li>- Sass</li>
                    <li>- PostCSS</li>
                    <li>- Gulp</li>
                    <li>- Babel</li>
                    <li>- WebPack</li>
                    <li>- WordPress</li>
                </ul>
            </div>
        </section>
    <!-- End Technologies -->
    
    <!-- Start Portfolio -->
    <section class="portfolio" id="portfolio">
        <h2 class="section-title">My Portfolio</h2>
        
        <div class="portfolio__categories">
            <nav>
                <ul>
                    <li data-filter="all" class="active">All Categories</li>
                    <li data-filter="1" class="">Web Development</li>
                    <li data-filter="2" class="">Js Projects</li>
                </ul>
            </nav>
        </div>
        
        <div class="portfolio__item--wrapper filtr-container clearfix">
            <section class="filtr-item" data-category="1">
                <a href="assets/images/travel.png" data-lightbox="portfolio">
                    <img class="filtr-img" alt="travel" src="assets/images/travel.png" />
                </a>
            </section>
            
            <section class="filtr-item" data-category="1">
                <a href="assets/images/tahk.jpg" data-lightbox="portfolio">
                    <img class="filtr-img" alt="tahk" src="assets/images/tahk.jpg" />
                </a>
            </section>
            
            <section class="filtr-item" data-category="1">
                <a href="assets/images/Zeit-fema.jpg" data-lightbox="portfolio">
                    <img class="filtr-img" alt="zeit" src="assets/images/Zeit-fema.jpg" />
                </a>
            </section>
            
            <section class="filtr-item" data-category="1">
                <a href="assets/images/maverick.jpg" data-lightbox="portfolio">
                    <img class="filtr-img" alt="maverick" src="assets/images/maverick.jpg" />
                </a>
            </section>
            
            <section class="filtr-item" data-category="1">
                <a href="assets/images/piggame.png" data-lightbox="portfolio">
                    <img class="filtr-img" alt="piggame" src="assets/images/piggame.png" />
                </a>
            </section>
        </div>
    </section>
    <!-- End Portfolio -->
    
    <!-- Start Contact -->
    <section class="contact" id="contact">
        <h2 class="section-title">Get in Touch</h2>
        <form action="post" class="contact__form">
            <input type="text" placeholder="Name" name="name">
            <input type="text" placeholder="E-mail" name="email">
            <input type="text" placeholder="Subject" name="subject">
            <textarea name="messaje" placeholder="Message" id="message" cols="50" rows="2"></textarea>
        </form>
    </section>
    <!-- End Contact -->
    
    <!-- Start Footer -->
    <footer class="footer" id="footer">
        <p>Copyright &copy; <?php echo DATE('Y'); ?> Federico Martín</p>
    </footer>
    <!-- End Footer -->
    
    <script src="temp/scripts/app.js"></script>
</body>
</html>