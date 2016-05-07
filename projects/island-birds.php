<?php include(dirname(__FILE__) . "/../includes/page_header.php");
   
?>
    <section>
        <header class="hero-wrapper post island-birds">
            <div>
                <h1>Island Birds</h1>
                <p>Unparalleled, private air charter throughout the Caribbean, specializing in flights to the British Virgin Islands. I worked together with Island Birds and Intoria to design a user-friendly web experience with high visual
impact.</p>
                <a class="inactive" href="#">view website</a>
            </div>
        </header>
        <article class="project-container">
            <div class="project-context-info">
                <ul class="project-context-info-list">
                    <li>
                        <strong>Role</strong>
                        <span>Designer</span>
                    </li>
                    <li>
                        <strong>Client</strong>
                        <span>Intoria Internet Architects</span>
                    </li>
                    <li>
                        <strong>Date</strong>
                        <span>April 2016</span>
                    </li>
                </ul>
            </div>
            <div class="project-presentation">
                <picture class="design-showcase flex100">
                    <source media="(max-width: 750px)" srcset="../../src/images/island-birds-home-page-mobile-retina2x.webp 2x, ../../src/images/island-birds-home-page-mobile-retina3x.webp 3x" type="image/webp">
                    <source media="" srcset="../../src/images/island-birds-home-page.webp" type="image/webp">
                    <source media="(max-width: 750px)" srcset="../../src/images/island-birds-home-page-mobile-retina2x.jpg 2x, ../../src/images/island-birds-home-page-mobile-retina3x.jpg 3x">
                    <source media="" srcset="../../src/images/island-birds-home-page.jpg" >
                    <img src="../../src/images/island-birds-home-page.jpg" alt="island-birds Web Design">
                </picture>


            </div>
                
        </article>
        <aside class="next-project">
            <div class="next-project-container">
                <a href="#"></a>
                <h4>Next Project</h4>
                <h5 class="next-project-title"></h5>
            </div>
        </aside>
    </section>
    
     <?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "oncolour/includes/page_footer.php";
   include_once($path);
?>
    
    