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