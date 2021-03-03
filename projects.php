<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/main.css"> 
    
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
    <script src="https://kit.fontawesome.com/3a17e8db5a.js" crossorigin="anonymous"></script>

    <title>Jenny Escobell | Front End Developer & UX Designer | New Westminster BC</title>
</head>
<body>
    <header>
        <?php include 'header.php';?>
    </header>

    <main>
        <div class="project-wrapper">
            <section class="current-proj">
                
                <picture>
                    <source media="(max-width: 500px)" srcset="images/two-sisters-mobile-500.jpg">
                    <source media="(max-width: 750px)" srcset="images/two-sisters-mobile-1000.jpg">
                    <source media="(min-width: 750px)" srcset="images/two-sisters-mobile-1200ls.jpg">
                    <img src="images/two-sisters-mobile-1000.jpg" alt="two iPhones on a red background">
                </picture>
            
                <div class="proj-cur-textbox">
                    <h3>Current Project</h3>
                    <h4>Two Sisters Bakery</h4>
                    <p class="dev-par"> In Development</p>

                    <h4 class="tools"> Tools</h4>
                    <p class="tools-par"> Adobe XD | Adobe Photoshop <br> WordPress | WooCommerce</p>           
                    
                    <div class=btn-container>
                        <a class="faux-btn red-btn" href="two-sisters.php"> Go to Project</a>
                    </div>
                </div>
            </section>

            <section class="portfolio-proj">
                <picture>
                    <source media="(max-width: 500px)" srcset="images/portfolio-500.jpg">
                    <source media="(max-width: 1000px)" srcset="images/portfolio-1000.jpg">
                    <source media="(min-width: 1000px)" srcset="images/portfolio-full.jpg">
                    <img src="images/portfolio-1000.jpg" alt="laptop and painting on blue background">
                </picture>
            

                <div class="portfolio-textbox">
                    <h3>Portfolio Project</h3>
                    <p class="dev-par"> Read about the inspiration behind the design of my portfolio.</p>

                    <h4 class="tools"> Tools</h4>
                    <p class="tools-par"> Adobe XD | Adobe Photoshop <br> HTML5 | CSS3/Sass | JavaScript | PHP</p>           

                    <div class=btn-container>
                        <a class="blue-btn faux-btn" href="portfolio.php"> Go to Project</a>
                    </div>            
                </div>
            </section>

        <section class="react-proj">
            <picture>
                <source media="(max-width: 500px)" srcset="images/moviebuff-500.jpg">
                <source media="(max-width: 850px)" srcset="images/moviebuff-1000.jpg">
                <source media="(min-width: 850px)" srcset="images/moviebuff-full.jpg">
                <img src="images/moviebuff-1000.jpg" alt="computer on desk with a yellow background">
			</picture>
        
            <div class="react-textbox">
                <h3>The Movie Buff</h3>
                <h4>React App Project</h4>
                
                <h4 class="tools"> Tools</h4>
                <p class="tools-par"> Adobe Photoshop <br> React | HTML5 | CSS3/Sass </p>           
           
                <div class=btn-container>
                    <a class="yellow-btn faux-btn" href="moviebuff.php"> Go to Project</a>
                </div>
            </div>
        </section>
    </div>
     
    <div class="projects-box-cont">
        <div class="blue-box"></div>
        <div class="red-box"></div>
    </div>

        <button onclick="topFunction()" id="myBtn" class="top-btn" title="Go to top"><i class="fas fa-arrow-circle-up"></i> </button>
       
        <footer>
            <?php include 'footer.php';?>
        </footer>
    </main>
    <script src="scripts/javascript.js"></script>
</body>
</html>