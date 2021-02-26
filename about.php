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

    <section class="about-intro-1">
        <h3>Hello and welcome!</h3>
        <p>I am an aspiring Front-end Web Developer and UX/UI Designer 
        with a passion for the creative process and seeing a well planned project come to life. </p>
    
        <picture class="jenny-pic">
                <source media="(min-width: 320px)" srcset="images/jenny-web.jpg">
                <source media="(min-width: 450px)" srcset="images/jenny-web-full.jpg">
                <img src="images/jenny-web-full.jpg" alt="Jenny Escobell">
        </picture>

        <p>With practical and professional industry experience, I have gained a strong foundation of industry standards and best practises. I always tell people that I love to listen to hear what you are not saying. I am team oriented, love to collaborate and appreciate feedback 
        with the mindset to continuously grow as a developer and designer.</p>
        
        <a class="faux-red-btn" href="projects.php">View Projects</a>
        <a class="faux-yellow-btn" href="#">Graphic Design Samples</a>
    
    </section>

    <section class="about-tools">
        <h3>Toolkit</h3>
        <h4>Adobe</h4>
        <ul class="design-tools">
            <li>XD</li>
            <li>Photoshop</li>
            <li>Illustrator</li>
            <li>InDesign</li>
            <li>Figma</li>
            <li>InVision</li>
        </ul>

        <ul class="dev-tools">
            <li>HTML5</li>
            <li>CSS3/Sass</li>
            <li>WordPress</li>
            <li>WooCommerce</li>
            <li>JavaScript</li>
            <li>PHP</li>
            <li>GitHub</li>
        </ul>
    </section>

    
    
    


       <footer>
            <?php include 'footer.php';?>
        </footer>
    </main>
</body>
</html>