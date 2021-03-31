<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>

    <title>Jenny Escobell | Front End Developer & UX Designer | New Westminster BC</title>
</head>
<body>
    <header>
        <?php include 'header.php';?>
    </header>
    
    <main>
        <section id="top" class="intro-container">
            <div class="intro">
                <h1><span class="red-block">Front-end developer</span> and
                <span class="blue-block">designer</span>
                with a passion for the <span class="yellow-block">creative process</span>
                and user centric design.</h1>
            </div>
        </section>

        <div class="wrapper-desktop">
            <section class="current-container">
                <picture>
                    <source media="(max-width: 500px)" srcset="images/two-sisters-mobile-500.jpg">
                    <source media="(max-width: 750px)" srcset="images/two-sisters-mobile-1000.jpg">
                    <source media="(min-width: 750px)" srcset="images/two-sisters-mobile-1200ls.jpg">
                    <img src="images/two-sisters-mobile-1000.jpg" alt="two iPhones on a red background">
                </picture>

                <section class="box cur-text-container">
                        <h2>Featured Project</h2>
                        <h3>Two Sisters Bakery</h3>
                        
                        <h3 class="tools"> Tools</h3>
                        <p class="tools-par"> Adobe XD | Adobe Photoshop <br> WordPress | WooCommerce</p>

                        <div class="button-container">                   
                            <a class="btn white-btn" href="two-sisters.php"> Go to Project</a>
                        </div>
                </section>
                 
                <div class="view-all-btn">
                    <a href="projects.php" class="view-all-link"> <span class="black-border">View all projects</span> </a>
                </div>
            </section>

            <div class="about-jenny-container">

                <picture class="jne-pic">
                    <source media="(max-width: 500px)" srcset="images/about-jenny-320w.jpg">
                    <source media="(max-width: 750px)" srcset="images/about-jenny-750w.jpg">
                    <source media="(min-width: 750px)" srcset="images/about-jenny-1000w.jpg">
                    <img src="images/about-jenny-750w.jpg" alt="desk with monitor and laptop">
                </picture>

                <section class="about-text-container">
                    <h3> A little about me</h3>
                    <div class="about-par"></div>
                    <p> I am a Front-End Developer and UX/UI Designer with a professional background in graphic design. 
                    I love being part of the creative process and seeing a well planned project come to life. </p>
                    <p> In my spare time, you will find me either behind one of my sewing machines creating something 
                    new or exploring our beautiful landscape on my bicycle. </p>                
                </section>

                <div class="about-btn">
                    <a href="about.php" class="more-about"> <span class=blue-border>More about me</span> </a>
                </div>
            
                <div class="index-box-cont">
                    <div class="yellow-box"></div>
                    <div class="black-box"></div>
                </div>
            </div>
    </div> <!-- end wrapper desktop  -->
    
        <button onclick="topFunction()" id="myBtn" class="top-btn" title="Go to top"><i class="fas fa-arrow-circle-up"></i> </button>

        <footer>
            <?php include 'footer.php';?>
        </footer>
    </main>
    <script src="scripts/javascript.js"></script>
</body>
</html>