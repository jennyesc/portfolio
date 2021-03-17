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
                <source media="(max-width: 750px)" srcset="images/two-sisters-mobile-1000.jpg">
                <source media="(min-width: 750px)" srcset="images/two-sisters-mobile-1200ls.jpg">
                <img src="images/two-sisters-mobile-1000.jpg" alt="two iPhones on a red background">
			</picture>
            
            <div class="project-summary">
                <h3>Two Sisters Bakery</h3>
                <p> Two Sisters Bakery is a multi-page e-commerce website built on the WordPress CMS platform.  
                Two Sisters Bakery is a ficticious Canadian bakery started by two sisters whose vision for homey 
                and friendly bakery includes, small batch baked goods, delicious pies and fresh loaves.</p>
                
                <p>For this project, I worked in a team of four and we created a custom WordPress theme 
                using the Underscores  theme as a base.</p>

                <p class="timeline">Project timeline: Six Weeks </p>            
            </div>
        </section>

        <section class="key-info">
            <h3 class="key-heading">Roles</h3>
            <p>UX/UI Designer, Production Artist,
            and Front-End Developer.</p>

            <h3 class="key-heading">Software</h3>
            <p>Adobe XD, Adobe Photoshop, GitHub, Trello, VS Code.</p>

            <h3 class="key-heading">Development</h3>
            <p class="last-par">HTML5, CSS3/Sass, Gulp, JavaScript, WordPress, WooCommerce.</p>
        </section>

        <section class="accordion-container">
            <?php include 'accordion.php';?>
        </section>

        <section class="reflections">
            <h3>Reflections</h3>
            <p class="last-par">Coming Soon</p>
        </section>
       
        <div class="btn-container">
            <a class="red-btn faux-btn" href="#"> Coming Soon</a>
       
            <a class="yellow-btn faux-btn" href="#"> GitHub</a>
        </div>
       
        <section class="indiv-box-cont">
            <a class="blue-box" href="moviebuff.php"> <i class="fas fa-chevron-left"></i> Previous</a>
            <a class="black-box" href="portfolio.php">Next <i class="fas fa-chevron-right"></i></a>
        </section>
        
        <button onclick="topFunction()" id="myBtn" class="top-btn" title="Go to top"><i class="fas fa-arrow-circle-up"></i> </button>
       
        <footer>
            <?php include 'footer.php';?>
        </footer>
    </main>
    <script src="scripts/javascript.js"></script>
  
</body>
</html>