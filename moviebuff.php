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
            <picture class="moviebuff-header">
                <source media="(max-width: 500px)" srcset="images/moviebuff-500.jpg">
                <source media="(max-width: 1000px)" srcset="images/moviebuff-1000.jpg">
                <source media="(min-width: 1000px)" srcset="images/moviebuff-full.jpg">
                <img src="images/moviebuff-1000.jpg" alt="computer on desk with a yellow background">
			</picture>
            
            <div class="box project-summary">
                <div class="summary-container summary-yellow">
                    <h1>The Movie Buff</h1>
                    <p> The Movie Buff is a React Movie database app, using the TMDB API to pull in the dynamic content.</p>
                    
                    <p>For this project, I worked in a team of two. We used the design mockups, which I created for our final project in our Design Tools module of the program.</p>

                    <p class="timeline">Project timeline: Five Weeks </p>            
                </div>

                <div class="button-container">                   
                    <a class="btn white-btn" href="https://www.jennyescobell.com/moviebuff" target="_blank" rel="noopener noreferrer" > <i class="fas fa-desktop"></i>&nbsp;&nbsp; Live Site</a>
                    <a class="btn white-btn" href="https://github.com/htpwebdesign/movieBuff" target="_blank" rel="noopener noreferrer"> <i class="fab fa-github"></i>&nbsp;&nbsp;GitHub</a>
                </div>
            </div>

            <div class="scroll-down">
                <div class="rond" id="rond"></div>
            </div>
        </section>

        <div class="box-container">
            <div class="box key-info">
                <section class="key-container">
                    <i class="fas-mb fas fa-user-circle"></i>
                    <h2 class="key-heading">Roles</h2>
                    <p>UX/UI Designer and Front-End Developer.</p>
                </section>

                <section class="key-container">
                    <i class="fas-mb fas fa-toolbox"></i>
                    <h2 class="key-heading">Toolbox</h2>
                    <p>Adobe Photoshop, GitHub, VS Code, HTML5, CSS3/Sass, React, JavaScript.</p>
                </section>
            </div>
                <?php include 'accordion-mb.php';?>
        </div>

        <div class="indiv-box-cont">
            <a class="blue-box" href="portfolio.php"> <i class="fas fa-chevron-left"></i> Previous</a>
            <a class="black-box" href="two-sisters.php">Next <i class="fas fa-chevron-right"></i></a>
        </div>
       
        <footer>
            <?php include 'footer.php';?>
        </footer>
    </main>
    <script src="scripts/javascript.js"></script>
  
</body>
</html>