<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/main.css"> 
    
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
    <script src="https://kit.fontawesome.com/3a17e8db5a.js" crossorigin="anonymous"></script>
    

    <title>Jenny Escobell | Front End Developer & UX Designer | New Westminster BC</title>
</head>
<body>
    <header>
        <?php include 'header.php';?>
    </header>

    <main>

        <section class="project-intro">
            <picture class="project-hero">
                <source media="(min-width: 320px)" srcset="images/react-mu320.jpg">
                <source media="(min-width: 900px)" srcset="images/react-mu900.jpg">
                <img src="images/react-mu900.jpg" alt="Computer on a desk with a yellow wall">
            </picture>
            
            <div class="project-summary">
                <h3>The Movie Buff</h3>
                <p> The Movie Buff is a React Movie database app, using the TMDB API to pull in the dynamic content.</p>
                
                <p>For this project, I worked in a team of two. We used the design mockups, which I created for our final project in our Design Tools module of the program.</p>

                <p>Project timeline: Five Weeks </p>            
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

        <p>Overall, I am proud of the end result and that we were able to create a site, which had all the functionality required, resembled the original 
            mockup designs and is fully responsive. </p>
        
        </section>

        <section class="project-buttons">
            <a href="https://jennyescobell.com/movieBuff/" target="_blank"> Live Site</a>
            <a href="https://github.com/jennyesc/movieBuff" target="_blank"> GitHub</a>      
        </section>

        <section class="next-prev">
            <a href="portfolio.php">Previous</a>
            <a href="two-sisters.php">Next</a>
        </section>

       <footer>
            <?php include 'footer.php';?>
        </footer>
    </main>
    <script src="scripts/accordion.js"></script>
  
</body>
</html>