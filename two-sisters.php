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

        <section class="project-intro">
            <picture>
                <source media="(max-width: 500px)" srcset="images/two-sisters-mobile-500.jpg">
                <source media="(max-width: 999px)" srcset="images/two-sisters-mobile-1000.jpg">
                <source media="(min-width: 999px)" srcset="images/two-sisters-mobile-1200.png">
                <img src="images/two-sisters-mobile-1000.jpg" alt="Two iPhones on a red background">
			</picture>
            
            <section class=" box project-summary">
                <div class="summary-container">
                    <h1>Two Sisters Bakery</h1>
                    <p> Two Sisters Bakery is a multi-page e-commerce website built on the WordPress CMS platform.  
                    Two Sisters Bakery is a ficticious Canadian bakery started by two sisters who own and operate three bakery locations
                    and are expanding to include an ecommerce platform.
                    
                    <p>For this project, I worked in a team of four and we created a custom WordPress theme 
                    using Underscores as the base theme.</p>

                    <p class="timeline">Project timeline: Six Weeks </p>  
                </div>
    
                <div class="button-container">                   
                    <a class="btn white-btn" href="https://www.jennyescobell.com/twosisters" target="_blank" rel="noopener noreferrer" > <i class="fas fa-desktop"></i>&nbsp;&nbsp; Live Site</a>
                    <a class="btn white-btn" href="https://github.com/htpwebdesign/two-sisters" target="_blank" rel="noopener noreferrer"> <i class="fab fa-github"></i>&nbsp;&nbsp;GitHub</a>
                </div>
            </section>

            <div class="scroll-down scroll-white">
                <div class="rond"></div>
            </div>
        </section>
        
        <div class="box-container">
            <section class="box key-info">
                <div class="key-container">
                    <i class="fas-ts fas fa-user-circle"></i>
                    <h2 class="key-heading">Roles</h2>
                    <p>UX/UI Designer Production Artist, <span class="no-break"><br></span>
                    and Front-End Developer.</p>
                </div>

                <div class="key-container">
                    <i class="fas-ts fas fa-toolbox"></i>
                    <h2 class="key-heading">Toolbox</h2>
                    <p>Adobe XD, Adobe Photoshop, GitHub, Trello, VS Code,
                    HTML5, CSS3/Sass, Gulp, JavaScript, WordPress, WooCommerce.</p>
                </div>
            
            </section>

            <section class="box accordion-container accordion-container-02">
                <?php include 'accordion.php';?>
            </section>
        </div>

        <section class="indiv-box-cont">
            <a class="blue-box" href="moviebuff.php"> <i class="fas fa-chevron-left"></i> Previous</a>
            <a class="black-box" href="portfolio.php">Next <i class="fas fa-chevron-right"></i></a>
        </section>
       
        <footer>
            <?php include 'footer.php';?>
        </footer>
    </main>
    
  
</body>
</html>


<!-- <div class="btn-container">
            <a class="red-btn faux-btn" href="https://www.jennyescobell.com/twosisters" target="_blank" rel="noopener noreferrer" > Live Site</a>
       
            <a class="yellow-btn faux-btn" href="https://github.com/htpwebdesign/two-sisters" target="_blank" rel="noopener noreferrer"> GitHub</a>
        </div> -->
       