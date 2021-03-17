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
                <source media="(max-width: 1000px)" srcset="images/portfolio-1000.jpg">
                <source media="(min-width: 1000px)" srcset="images/portfolio-full.jpg">
                <img src="images/portfolio-1000.jpg" alt="laptop and painting on blue background">
			</picture>
            
            <div class="project-summary portfolio-summary">
                <h3>Portfolio Project</h3>
                <p> For this project, I choose to <em>hard code</em> my portfolio website using HTML5, CSS3/Sass and JavaScript. 
                As my other portfolio projects were built using WordPress and React, I felt that a hard coded site would be a nice balance.
                During the research and planning phase, I decided to expand on the theme from my student landing page.
            </p>
                
            <h4>Inspiration</h4>
            <p>My inspiration for the design of my portfolio is the artwork of the Dutch artist, Piet Mondrian (1872-1944). Growing up in 
                The Netherlands, the architectural and art forms from the De Stijl movement, made an everlasting impression on me. With the 
                creative freedom of this project, I choose to take from my inspiration and use the bold colours and grid layouts. 
            </p>
                <p class="timeline">Project timeline: Five Weeks </p>            
            </div>
        </section>

        <section class="key-info">
            <h3 class="key-heading">Roles</h3>
            <p>As this was a solo project, I did 100% of the work.</p>
            
            <h3 class="key-heading">Software</h3>
            <p>Adobe XD, Adobe Photoshop, GitHub, Trello, VS Code.</p>

            <h3 class="key-heading">Development</h3>
            <p>HTML5, CSS3/Sass, JavaScript, PHP.</p>
        </section>

        <section class="accordion-container">
            <?php include 'accordion-pf.php';?>
        </section>

        <section class="reflections">
        <h3>Reflections</h3>
        <p class="last-par">Coming Soon</p>
        
        <div class="btn-container">
            <a class="yellow-btn faux-btn" href="#"> GitHub</a>
        </div>

        </section>

        <section class="indiv-box-cont">
            <a class="blue-box" href="two-sisters.php"> <i class="fas fa-chevron-left"></i> Previous</a>
            <a class="black-box" href="moviebuff.php">Next <i class="fas fa-chevron-right"></i></a>
        </section>
        
        <button onclick="topFunction()" id="myBtn" class="top-btn" title="Go to top"><i class="fas fa-arrow-circle-up"></i> </button>

       <footer>
            <?php include 'footer.php';?>
        </footer>
    </main>
    <script src="scripts/javascript.js"></script>
  
</body>
</html>