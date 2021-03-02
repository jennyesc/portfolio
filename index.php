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
        <section id="top" class="intro-container">
            <div class="intro">
                <h2><span class="red-block">Front-end developer</span> and
               designer 
                with a  <span class="blue-block">passion </span>for the <span class="yellow-block">creative process </span>
                and user centric design.</h2>
            </div>
        </section>

        <div class="wrapper-desktop">
            <section class="current-container">
                <picture class="cur-img">
                    <source media="(max-width: 500px)" srcset="images/two-sisters-mobile-500.jpg">
                    <source media="(max-width: 750px)" srcset="images/two-sisters-mobile-1000.jpg">
                    <source media="(min-width: 750px)" srcset="images/two-sisters-mobile-1200ls.jpg">
                    <img src="images/two-sisters-mobile-1000.jpg" alt="two iPhones on a red background">
                </picture>

                <section class="cur-text-container">
                    <h3>Current Project</h3>
                    <h4>Two Sisters Bakery</h4>
                    <p class="dev-par"> In Development</p>

                    <h4 class="tools"> Tools</h4>
                    <p class="tools-par"> Adobe XD | Adobe Photoshop <br> WordPress | WooCommerce</p>

                    <div class=btn-container>
                        <a class="red-btn faux-btn" href="two-sisters.php"> Go to Project</a>
                    </div>

                </section>

                <article class="view-all-btn">
                    <a href="projects.php" class="view-all-link">View all projects</a>
                </article>

            </section>

            <section class="about-jenny-container">

                <picture class="jne-pic">
                    <source media="(max-width: 500px)" srcset="images/about-jenny-320w.jpg">
                    <source media="(max-width: 750px)" srcset="images/about-jenny-750w.jpg">
                    <source media="(min-width: 750px)" srcset="images/about-jenny-1000w.jpg">
                    <img src="images/about-jenny-750w.jpg" alt="desk with monitor and laptop">
                </picture>

                <div class="about-text-container">
                    <h3> A little about me</h3>
                    <p> I am a Front-End Developer and UX/UI Designer with a professional background in graphic design. 
                    I love being part of the creative process and seeing a well planned project come to life. </p>
                    <p> In my spare time, you will find me either behind one of my sewing machines creating something 
                    new or exploring our beautiful landscape on my bicycle. </p>                
                </div>
            </section>

            <article class="about-btn">
                <a href="about.php" class="more-about">More about me</a>
            </article>

            <section class="index-box-cont">
                <div class="yellow-box"></div>
                <div class="black-box"></div>
            </section>
    </div> <!-- end wrapper desktop  -->
    
        <button onclick="topFunction()" id="myBtn" class="top-btn" title="Go to top"><i class="fas fa-arrow-circle-up"></i> </button>

        <footer>
            <?php include 'footer.php';?>
        </footer>
    </main>
    <script src="scripts/javascript.js"></script>
</body>
</html>