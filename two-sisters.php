<!DOCTYPE html>
<html lang="en">
<head>
    <meta description="Wordpress ecommerce project built using the WooCommerce plugin.">
    <?php include 'head.php';?>
    <title>WordPress Front End Web Development Project | Two Sisters Bakery</title>
</head>
<body>
    <header>
        <?php include 'header.php';?>
    </header>

    <main>

        <div class="project-intro">
            <picture>
                <source media="(max-width: 500px)" srcset="images/two-sisters-mobile-500.jpg">
                <source media="(max-width: 999px)" srcset="images/two-sisters-mobile-1000.jpg">
                <source media="(min-width: 999px)" srcset="images/two-sisters-mobile-1200.png">
                <img src="images/two-sisters-mobile-1000.jpg" alt="Two iPhones on a red background">
			</picture>
            
            <div class="box project-summary">
                <section class="summary-container">
                    <h1>Two Sisters Bakery</h1>
                    <p> Two Sisters Bakery is a multi-page e-commerce website built on the WordPress CMS platform.  
                    Two Sisters Bakery is a ficticious Canadian bakery started by two sisters who own and operate three bakery locations
                    and are expanding to include an ecommerce platform. </p>
                    
                    <p>For this project, I worked in a team of four and we created a custom WordPress theme 
                    using Underscores as the base theme.</p>

                    <p class="timeline">Project timeline: Six Weeks </p>  
                </section>
    
                <div class="button-container">                   
                    <a class="btn ts-btn" href="https://www.jennyescobell.com/twosisters" target="_blank" rel="noopener noreferrer" > <i class="fas fa-desktop"></i>&nbsp;&nbsp; Live Site</a>
                    <a class="btn ts-btn" href="https://github.com/htpwebdesign/two-sisters" target="_blank" rel="noopener noreferrer"> <i class="fab fa-github"></i>&nbsp;&nbsp;GitHub</a>
                </div>
            </div>

            <div class="scroll-down scroll-white">
                <div class="rond"></div>
            </div>
        </div>
        
        <div class="box-container">
            <div class="box key-info">
                <section class="key-container">
                    <i class="fas-ts fas fa-user-circle"></i>
                    <h2 class="key-heading">Roles</h2>
                    <p>UX/UI Designer Production Artist, <span class="no-break"><br></span>
                    and Front-End Developer.</p>
                 </section>

                <section class="key-container">
                    <i class="fas-ts fas fa-toolbox"></i>
                    <h2 class="key-heading">Toolbox</h2>
                    <p>Adobe XD, Adobe Photoshop, GitHub, Trello, VS Code,
                    HTML5, CSS3/Sass, Gulp, JavaScript, WordPress, WooCommerce.</p>
                </section>
            </div>
            <?php include 'accordion.php';?>
        </div>

        <div class="indiv-box-cont">
            <a class="blue-box" href="moviebuff.php"> <i class="fas fa-chevron-left"></i> Previous</a>
            <a class="black-box" href="portfolio.php">Next <i class="fas fa-chevron-right"></i></a>
        </div>
       
        <footer>
            <?php include 'footer.php';?>
        </footer>
    </main>
    
  
</body>
</html>

       