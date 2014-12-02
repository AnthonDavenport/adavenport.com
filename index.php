<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php';?>
        <title>Home</title>
    </head>
    <body>
        <div id="wrapper"> <!--Entire body wrapper-->
            <header id="page_header"> <!--The header section-->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php';?>
                <div id="theme"> <!--The title or theme of the page.-->
                    <img src="/images/adwd.png" alt="Text that reads, Anthon Davenport Web Designer.">
                </div>
                <nav> <!--Navigation links-->
                    <ul>
                        <li><a href="/index.php" title="View the Home page">Home</a></li>
                        <li><a href="/pages/portfolio.php" title="View my Portfolio">Portfolio</a>
                            <ul>
                                <li><a href="/pages/recent-work.php" title="View my recent work">Recent Work</a></li>
                                <li><a href="/pages/web-design.php" title="View my web designs">Web Design</a></li>
                                <li><a href="/pages/logo-design.php" title="View my logo design">Logo Design</a></li>
                                <li><a href="/pages/other-projects.php" title="View my other projects">Other Projects</a>
                                    <ul>
                                        <li><a href="/pages/artwork.php" title="View my Artwork">Artwork</a></li>
                                        <li><a href="/pages/architecture.php" title="View my Architectural Drafting">Architecture</a></li>
                                        <li><a href="/pages/illustrations.php" title="View my Digital Illustrations">Illustrations</a></li>
                                        <li><a href="/pages/photography.php" title="View my Photography">Photography</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="/pages/about.php" title="View the About page">About</a></li>
                        <li><a href="/pages/contact.php" title="View the Contact page">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <div id="content"> <!--The face of the page.  Big Beautiful images to showcase my work.-->
                <img src="/images/Leading.jpg" alt="The main image on the screen is a picture of my dog Otis.  He is a black and white Schnuazer-Collie mix.">
                    <h1>"Recent Work"</h1>
                    <p>Site Currently Under Construction</p>
            </div>
            <div id="blog_snapshot"> <!--Blog image link-->
                <h3>My Blog</h3>
                <a target="new" href="http://anthondavenportcom130.wordpress.com/"><img src="/images/blog_posts/blogp6.png" alt="This is a snapshot of my Wordpress blog."></a>
            </div> 
            <div id="media_boxes"> <!--Recent work image links-->
                <ul>
                    <li><a href="/pages/recent-work.php"><img src="/images/media_boxes/letterhead.jpg" alt="The image represents my most recent design work."></a><p>Recent Work</p></li>
                    <li><a href="/pages/recent-work.php"><img src="/images/media_boxes/bcardsprint.jpg" alt="The image represents my most recent design work."></a><p>Recent Work</p></li>
                    <li><a href="/pages/recent-work.php"><img src="/images/media_boxes/AnthonDavenportP5Logos.jpg" alt="The image represents my most recent design work."></a><p>Recent Work</p></li>
                </ul>
            </div>
            <footer id="page_footer"> <!--Page footer-->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
                <div id="assessment"> <!--links to the assignments for CIT 230-->
                    <a href="/assessments/site-plan.php" title="View the Site Plan">Site Plan</a>
                    <a href="/assessments/deliberatepracticeplan.php" title="View the Deliberate Practice Plan">Deliberate Practice Plan</a>
                    <a href="/assessments/dpj.php" title="View the Dileberate Practice Journals">Deliberate Practice Journals</a>
                    <a href="/assessments/presentation.php" title="View the presentation">Presentation</a>
                </div>
            </footer>   
        </div>
    </body>
</html>

      
    
    
        
        

