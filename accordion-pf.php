<div class="accordion accordion-blue accordion-container-02">
    <section class="accordion-container accordion-container-01">
        <h2 class="tab tab-01">Process <span class="fas fa-plus plus-minus"> </span>  </h2>
        <section class="content content-01">
            <h3><i class="fas fa-search"></i>&ensp;Research</h3>
            <p>My research phase went quite in depth into the world of student portfolios. Initially, I wanted to take a whole other direction 
            by using white, black and red as the accent colour. After further research and discussions with instructors and peers,
            I decided to take the design from my student landing page and expand on some of the elements of that design. 
            </p>

            <h3> <i class="far fa-sticky-note"></i>&ensp;Planning</h3>
            <p>I first wrote a content plan and created wireframes for the mobile version of the site. 
            After finalizing the wireframes for mobile, I create a couple of wireframes for the desktop version of the site.
            </p>
            
            <h3><i class="fas fa-sitemap"></i>&ensp;Wireframes</h3>    
            <section class="wireframes wireframes-pf"> 
                <h4>Home Page</h4>
                    <img src="images/mobile-home.jpg" alt="wireframe of home page">
                    <img src="images/mobile-home-2.jpg" alt="wireframe of home page">
                <h4>Projects Page</h4>
                    <img src="images/mobile-project1.jpg" alt="wireframe of projects page">
                    <img src="images/mobile-project2.jpg" alt="wireframe of projects page">
                <h4>Individual Project Page</h4>
                    <img src="images/mobile-ind-proj1.jpg" alt="wireframe of individual projects page">
                    <img src="images/mobile-ind-proj2.jpg" alt="wireframe of individual projects page">
                    <img src="images/mobile-ind-proj3.jpg" alt="wireframe of individual projects page">
                    <img src="images/mobile-ind-proj4.jpg" alt="wireframe of individual projects page">
                <h4>About Page</h4>
                    <img src="images/mobile-about1.jpg" alt="wireframe of about page">
                    <img src="images/mobile-about2.jpg" alt="wireframe of about page">
                <h4>Contact Page</h4>
                    <img src="images/mobile-contact.jpg" alt="wireframe of about page">
            </section>
        </section>  <!-- end content -->    
    </section> <!-- end accordion container 01 -->

    <section class="accordion-container accordion-container-01">
        <h2 class="tab tab-02">Design <span class="fas fa-plus plus-minus"> </span>  </h2>
        
        <section class="content content-02">
            <h3><i class="far fa-edit"></i>&ensp;Brand Development</h3>
            <p> As mentioned in the above summary, my designs choices are based on the paintings by Piet Mondrian. 
                He used obvious grids and three bold primary colours, which I toned down the boldness of for this project.
            </p>
    
            <section class="logo-container pf-logo-container">
                <h4>Logo</h4>
                <p>This logo has been an ever evolving logo for the past 13 years since enter the design industry.
                I have always used 'jne', as the letters are not only my initials, but also sounds like my first name when said out loud.</p>
                <img src="images/Jennyescobell-full.png" alt="Jenny Escobell logo">
            </section>

            <h4>Colour Palette </h4>
            <div class="colour-container">
                <div class="colour jne-1"> <p>#BF212E</p> </div>
                <div class="colour jne-2"><p>#304673</p></div>
                <div class="colour jne-3"><p>#F2B90C</p></div>
                <div class="colour jne-4"><p>#f2f2f2</p></div>
            </div>

            <section class="typography-container">
                <h4>Typography</h4>
                <p>The font used for the headings and body text is the Roboto font family. </p>
            </section>

            <section class="image-style-container"> 
                <h4>Image Styles</h4>
                <p>As the style of this project uses a bold primary colours, I choose to use the colours in the background or as accents in the imagery.</p>
        
                <div class="image-style-box">
                    <img class="img-style-1" src="images/PietMondrian-square.jpg" alt="Piet Mondrian painting">
                    <img class="img-style-1" src="images/two-sisters-square.jpg" alt="two iPhones on a red background">
                    <img class="img-style-2" src="images/portfoliosquare.jpg" alt="laptop and painting on a blue background">
                    <img class="img-style-1" src="images/react-square.jpg" alt="computer on a yellow background">            
                </div>
            </section>

            <section class="mockup-designs pf-mockup-designs">
                <h3> <i class="fas fa-laptop"></i>&ensp;High Fidelity Mockup Designs</h3>
                <p>High fidelity mockups were created for this project and designed for mobile first. </p>
                 <img class="mob-mockup" src="images/phone-mockups-pf.jpg" alt="mobile mock ups of website">
                 <img class="desk-mockup" src="images/portfolio-desk-mu.jpg" alt="mock ups of website">
            </section>
        </section>  <!-- end content -->    
    </section> <!-- end accordion container 02 -->

    <section class="accordion-container accordion-container-01">
        <h2 class="tab tab-03">Development & Launch <span class="fas fa-plus plus-minus"> </span>  </h2>
        <section class="content content-03">
            <h3><i class="fas fa-laptop-code"></i>&ensp;Development</h3>
            <p> Once the designs were complete, I started by creating the content, such as the images used throughout the project. 
                After the content creation, I started entering all of the HTML code, using HTML5 semantics. Once all of the content was placed, I 
                started styling the website, using CSS/Sass, JavaScript and JQuery.
            </p>
            <h4>Responsive Images </h4>
            <p>Where required (ie. hero images), I used the srcset and picture elements to ensure appropriate image sizes were used for difference screen size and devices.</p>
            <img src="images/scrset_picture.jpg" alt="code used for srcset and picture">

            <h4>PHP Templates</h4>
            <p> I used PHP templates for the reusable code througout the site to make my code and development DRY. The head, header, footer and accordions were all used as php includes on throughout the site. </p>

            <h3><i class="fas fa-rocket"></i>&ensp;Workflow & Launch</h3>
            
            <p>Even though I worked solo on this project, I used Sass to keep the code tidy and consistent using variables, mixins and partials. As the @import rule is being phased out, 
                I used the @use rule, as recommended by the Sass team. 
            </p>
            <p class="last-par"> When styling had been completed, I validated the code on my local server. After the code validation, I moved it on to my live server within a 
            sub-folder to test on various devices and debug the site.
            Once the site's kinks had been worked out, I installed Google Analytics and recommended SEO requirememts before moving the site to the root folder for launch.
            </p>

        </section>  <!-- end content -->    
    </section> <!-- end accordion container 03 -->

    <section class="accordion-container accordion-container-01">
        <h2 class="tab tab-04">Reflections <span class="fas fa-plus plus-minus"> </span>  </h2>
        <section class="content content-04">
            <h3><i class="far fa-comment-dots"></i>&ensp;Reflections</h3>
            <p>The version of this portfolio project you are viewing is probably not the version I had up when I wrote this. 
                As everyone kept telling me, the portfolio site is always evolving.</p>

            <p>This project has definitely been a learning opportunity for me. It gave me the opportunity to try out new skills and learn as I go. 
                As we did our program during global pandemic, we worked on the portfolio project individually and I missed the collaboration that 
                happens during team project or even in a class room setting. Thankfully, I developed positive relationships with my classmates, who were there 
                to lend a hand when needed (and vice versa). I definitely learnt to let go of my print industry graphic design background and needing things to be pixel perfect.</p>

            <p>When I had submitted my portfolio, it was not at the level that I needed it to be to feel proud of it. 
                As we were working on our Capstone project simultaneously, I didn't look at my portfolio after it was submitted. Once our program completed, 
                I worked on small updates before tackling the bigger changes that needed to be made. </p>

            <p>During the content development phase, I spent a good chunk of time gathering appropriate template files to create images with the most impact. 
                As I am working on this version of the portfolio, I am starting to feel that pride again. 
            </p>
        </section>  <!-- end content -->    
    </section> <!-- end accordion container 04 -->
</div> <!-- end accordion -->
