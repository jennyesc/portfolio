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
            <picture class="portfolio-header">
                <source media="(max-width: 500px)" srcset="images/portfolio-500.jpg">
                <source media="(max-width: 999px)" srcset="images/portfolio-1000.jpg">
                <source media="(min-width: 999px)" srcset="images/portfolio-full-ls.jpg">
                <img src="images/portfolio-1000.jpg" alt="laptop and painting on blue background">
			</picture>
            
            <div class=" box project-summary portfolio-summary">
                <div class="summary-container">
                    <h1>Portfolio Project</h1>
                    <p> For this project, I choose to hard code my portfolio website using HTML5, CSS3/Sass and JavaScript. </p>
                
                    <h2>Inspiration</h2>
                    <p>My inspiration for the design of my portfolio is the artwork of the Dutch artist, Piet Mondrian (1872-1944). Growing up in 
                        The Netherlands, the architectural and art forms from the De Stijl movement, made an everlasting impression with me. With the 
                        creative freedom of this project, I choose to take from my inspiration and use the bold colours and grid layouts. 
                    </p>
                        <p class="timeline">Project timeline: Five Weeks </p>            
                </div>
                <div class="button-container">                   
                    <a class="btn white-btn" href="https://www.jennyescobell.com" target="_blank" rel="noopener noreferrer" > <i class="fas fa-desktop"></i>&nbsp;&nbsp; Live Site</a>
                    <a class="btn white-btn" href="https://github.com/jennyesc/portfolio" target="_blank" rel="noopener noreferrer"> <i class="fab fa-github"></i>&nbsp;&nbsp;GitHub</a>
                </div>
            </div>

            <div class="scroll-down scroll-white">
                <div class="rond"></div>
            </div>
        </section>

        <div class="box-container">
            <section class="box key-info">
                <div class="key-container">
                    <i class="fas-pf fas fa-user-circle"></i>
                    <h2 class="key-heading">Roles</h2>
                    <p>As this was a solo project, I did 100% of the work.</p>
                </div>
                
                <div class="key-container">
                    <i class="fas-pf fas fa-toolbox"></i>
                    <h2 class="key-heading">Toolbox</h2>
                    <p>Adobe XD, Adobe Photoshop, GitHub, Trello, VS Code, HTML5, CSS3/Sass, JavaScript, PHP.</p>
                </div>
            </section>

            <section class="box accordion-container accordion-container-02">
                <?php include 'accordion-pf.php';?>
            </section>
        </div>

        <section class="indiv-box-cont">
            <a class="blue-box" href="two-sisters.php"> <i class="fas fa-chevron-left"></i> Previous</a>
            <a class="black-box" href="moviebuff.php">Next <i class="fas fa-chevron-right"></i></a>
        </section>

       <footer>
            <?php include 'footer.php';?>
        </footer>
    </main>
    <script src="scripts/javascript.js"></script>
  
</body>
</html>