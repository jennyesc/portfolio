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
                <source media="(max-width: 800px)" srcset="images/moviebuff-1000.jpg">
                <source media="(min-width: 800px)" srcset="images/moviebuff-full.jpg">
                <img src="images/moviebuff-1000.jpg" alt="computer on desk with a yellow background">
			</picture>
            
            <div class="project-summary">
                <h3>The Movie Buff</h3>
                <p> The Movie Buff is a React Movie database app, using the TMDB API to pull in the dynamic content.</p>
                
                <p>For this project, I worked in a team of two. We used the design mockups, which I created for our final project in our Design Tools module of the program.</p>

                <p class="timeline">Project timeline: Five Weeks </p>            
            </div>
        </section>

        <section class="key-info">
            <h3 class="key-heading">Roles</h3>
            <p>UX/UI Designer and Front-End Developer.</p>

            <h3 class="key-heading">Software</h3>
            <p>Adobe Photoshop, GitHub, VS Code.</p>

            <h3 class="key-heading">Development</h3>
            <p>HTML5, CSS3/Sass, React, JavaScript.</p>
        </section>

        <section class="accordion-container">
            <?php include 'accordion-mb.php';?>
        </section>

        <section class="reflections">
            <h3>Reflections</h3>
            <p>This was a great project to jump in feet first using React. We did get a bit of assistance from our instructor, which helped us 
                a great deal during development. I plan to create another React app to grasp a better understanding of the funcitonality development. 
                My focus was more on the styling and troubleshooting during the development process and my partner took on more of the functionality.
            </p>

            <p class="last-par">Overall, I am proud of the end result and that we were able to create a site, which had all the functionality required, resembled the original 
                mockup designs and is fully responsive. </p>
            
                <div class="btn-container">
                <a class="red-btn faux-btn" href="https://jennyescobell.com/movieBuff/" target="_blank"> Live Site</a>

                <a class="yellow-btn faux-btn" href="https://github.com/jennyesc/movieBuff" target="_blank"> GitHub</a>
                </div>
        </section>

        <section class="indiv-box-cont">
            <a class="blue-box" href="portfolio.php"> <i class="fas fa-chevron-left"></i> Previous</div>
            <a class="black-box" href="two-sisters.php">Next <i class="fas fa-chevron-right"></i></div>
        </section>
       
        <button onclick="topFunction()" id="myBtn" class="top-btn" title="Go to top"><i class="fas fa-arrow-circle-up"></i> </button>
       
        <footer>
            <?php include 'footer.php';?>
        </footer>
    </main>
    <script src="scripts/javascript.js"></script>
  
</body>
</html>