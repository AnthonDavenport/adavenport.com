<!DOCTYPE html>
<html lang="en">
    <head>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php';?>
        <title>Portfolio</title>
    </head>
    <body>
        <div id="wrapper"> <!--Entire body wrapper-->
            <header id="page_header"> <!--The header section-->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php';?>
                <div id="theme"> <!--The title or theme of the page.-->
                    <h1>About Me</h1><!--<img src="/images/adwd.png" alt="Text that reads, Anthon Davenport Web Designer.">-->
                </div>
                <nav> <!--Navigation links-->
                    <ul>
                        <li><a href="/index.php" title="View the Home page">Home</a></li>
                        <li><a href="/pages/recent-work.php" title="View my recent work">Recent Work</a></li>
                        <li><a href="/pages/web-design.php" title="View my web designs">Web Design</a></li>
                        <li><a href="/pages/logo-design.php" title="View my logo design">Logo Design</a></li>
                        <li><a href="/pages/other-projects.php" title="View my other projects">Other Projects</a></li>
                        <li><a href="/pages/inspiration.php" title="View my inspiration">Inspiration</a></li>
                        <li><a href="/pages/about.php" title="View the About page">About</a></li>
                        <li><a href="/pages/contact.php" title="View the Contact page">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <div id="content"> <!--The face of the page.  Big Beautiful images to showcase my work.-->
                <img src="/images/recent_work/letterhead.jpg" alt="The main image is recent work that I did.  This one is a letter head for my website.">
                    <h1>"Recent Work"</h1>
            </div>
            <div id="media_boxes"> <!--Recent work image links-->
                <ul>
                    <li><a href="/pages/web-design.php"><img src="/images/media_boxes/letterhead.jpg" alt="The image represents my web design work."></a><p>Web Design</p></li>
                    <li><a href="/pages/logo-design.php"><img src="/images/logo_design/Official_RedRock_Logo.jpg" alt="The image represents a logo that I did this summer for a local business."></a><p>Logo Design</p></li>
                    <li><a href="/pages/recent-work.php"><img src="/images/media_boxes/AnthonDavenportP5Logos.jpg" alt="The image represents my most recent design work."></a><p>Recent Work</p></li>
                    <li><a href="/pages/other-projects.php"><img src="/images/artwork/Week3AnthonDavenportShapes24.jpg" alt="The image represents some of my other projects."></a><p>Other Projects</p></li>
                    <li><a href="/pages/inspiration.php"><img src="/images/inspiration/gdweb.jpg" alt="The image represents some graphic design that inpires me."></a><p>Inspiration</p></li>
                </ul>
            </div>
            <footer id="page_footer"> <!--Page footer-->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
                <div id="assessment"> <!--links to the assignments for CIT 230-->
                    <a href="/index.php" title="View the Home Page">Home Page</a>
                    <a href="/pages/recent-work.php" title="View my recent work">Recent Work</a>
                    <a href="/pages/web-design.php" title="View my web design">Web Design</a>
                    <a href="/pages/logo-design.php" title="View my logo design">Logo Design</a>
                    <a href="/pages/other-projects.php" title="View my other projects">Other Projects</a>
                    <a href="/pages/inspiration.php" title="View my inspiration">Inspiration</a>
                    <a href="/assessments/site-plan.php" title="View the Site Plan">Site Plan</a>
                    <a href="/assessments/deliberatepracticeplan.php" title="View the Deliberate Practice Plan">Deliberate Practice Plan</a>
                    <a href="/assessments/dpj.php" title="View the Dileberate Practice Journals">Deliberate Practice Journals</a>
                    <a href="/assessments/presentation.php" title="View the presentation">Presentation</a>
                </div>
            </footer>   
        </div>
    </body>
</html>