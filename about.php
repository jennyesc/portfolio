<!DOCTYPE html>
<html lang="en">
<head>
    <meta description="About Jenny Escobell, Front End Developer, UX and Graphic Designer located just outside of Vancouver, BC Canada.">
    <?php include 'head.php';?>
    <title>About Jenny Escobell | Front End Developer, UX and Graphic Designer </title>
</head>
<body>
    <header>
        <?php include 'header.php';?>
    </header>

    <main>
        <div class="about-wrapper">
            <div class="about-intro-1 grid">
                <picture class="pic-cont">
                    <source media="(max-width: 450px)" srcset="images/jenny-web.jpg">
                    <source media="(min-width: 450px)" srcset="images/jenny-web-full.jpg">
                    <img src="images/jenny-web-full.jpg" alt="Jenny Escobell">
                </picture>   
            </div> 
                            
            <section class="about-text box">
                <h1>Hello and welcome!</h1>
                    
                <p>I am a Front-end Web Developer and UX/UI Designer 
                with a passion for the creative process and seeing a well planned project come to life. </p>

                <p>With practical and professional experience as a graphic designer, I have gained a strong foundation of industry standards and best practices. 
                I always tell people that I love to listen to hear what you are not saying. I am team oriented, love to collaborate and appreciate feedback 
                with the mindset to continuously grow as a developer and designer.</p>
            </section>
            
            <div class="view-all-btn">
                <a href="projects.php" class="view-all-link"> <h2 class="black-border">View projects</h2> </a>
            </div>

            <div class="gd-button">
                <!-- <a href="#" class="view-all-link"> <h2 class="yellow-border">Graphic Design Examples</h2> </a> -->
            </div>
                
            
            <section class="toolkit">
                <div class="ul-container">
                    <h2>Toolkit</h2>
                    <ul class="design-tools">
                        <li class="li-heading">Design</li>
                        <li>Adobe</li>
                        <li class="adobe">XD</li>
                        <li class="adobe">Photoshop</li>
                        <li class="adobe">Illustrator</li>
                        <li class="adobe last-li">InDesign</li>
                        <li>Figma</li>
                        <li>InVision</li>
                    </ul>

                    <ul class="dev-tools">
                        <li class="li-heading">Development</li>
                        <li>HTML5</li>
                        <li>CSS3/Sass</li>
                        <li>WordPress</li>
                        <li>WooCommerce</li>
                        <li>JavaScript</li>
                        <li>PHP</li>
                        <li>GitHub</li>
                    </ul>
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