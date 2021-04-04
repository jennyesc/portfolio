<!DOCTYPE html>
<html lang="en">
<head>
    <meta description="Web development projects created by Jenny Escobell. Front-end Development projects include a WordPress project, HTML5 CSS3/Sass project and a React App project">
    <?php include 'head.php';?> 
    <title>Web Development Projects created by Jenny Escobell</title>
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
            
                <div class="proj-box proj-cur-textbox">
                    <h2>Featured Project</h2>
                    <h3>Two Sisters Bakery</h3>

                    <h3 class="tools"> Tools</h3>
                    <p class="tools-par"> Adobe XD | Adobe Photoshop <br> WordPress | WooCommerce</p>           
                    
                    <div class="button-container">
                        <a class="btn" href="two-sisters.php"> Go to Project</a>
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
            

                <div class="proj-box portfolio-textbox">
                    <h2>Portfolio Project</h2>
                    <p class="dev-par"> Read about the inspiration behind the design of my portfolio.</p>

                    <h3 class="tools"> Tools</h3>
                    <p class="tools-par"> Adobe XD | Adobe Photoshop <br> HTML5 | CSS3/Sass | JavaScript | PHP</p>           

                    <div class="button-container">
                        <a class="btn" href="portfolio.php"> Go to Project</a>
                    </div>            
                </div>
            </section>

        <section class="react-proj">
            <picture>
                <source media="(max-width: 500px)" srcset="images/moviebuff-500.jpg">
                <source media="(max-width: 850px)" srcset="images/moviebuff-1000-pr.jpg">
                <source media="(min-width: 850px)" srcset="images/moviebuff-1000-pr.jpg">
                <img src="images/moviebuff-1000-pr.jpg" alt="computer on desk with a yellow background">
			</picture>
        
            <div class="proj-box react-textbox">
                <h2>The Movie Buff</h2>
                <h3>React App Project</h3>
                
                <h3 class="tools"> Tools</h3>
                <p class="tools-par"> Adobe Photoshop <br> React | HTML5 | CSS3/Sass </p>           
           
                <div class="button-container">
                    <a class="btn" href="moviebuff.php"> Go to Project</a>
                </div>
            </div>
        </section>
    </div>

        <button onclick="topFunction()" id="myBtn" class="top-btn" title="Go to top"><i class="fas fa-arrow-circle-up"></i> </button>
       
        <footer>
            <?php include 'footer.php';?>
        </footer>
    </main>
    <script src="scripts/javascript.js"></script>
</body>
</html>