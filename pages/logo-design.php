<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Logo Design</title>
        <meta name="description" content="Davenport Web Design">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="AnthonDavenport">
        <link href="/CSS/stylesheet.css"  type="text/css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div id="wrapper"> <!--Entire body wrapper-->
            <header id="page_header"> <!--The header section-->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php';?>
                <div id="theme"> <!--The title or theme of the page.-->
                    <h1>Logo Design</h1><!--<img src="/images/adwd.png" alt="Text that reads, Anthon Davenport Web Designer.">-->
                </div>
                <nav> <!--Navigation links-->
                    <ul>
                        <li><a href="/index.php" title="View the Home page">Home</a></li>
                        <li><a href="/pages/portfolio.php" title="View my Portfolio">Portfolio</a></li>
                        <li><a href="/pages/recent-work.php" title="View my recent work">Recent Work</a></li>
                        <li><a href="/pages/web-design.php" title="View my web designs">Web Design</a></li>
                        <li><a href="/pages/other-projects.php" title="View my other projects">Other Projects</a></li>
                        <li><a href="/pages/inspiration.php" title="View my inspiration">Inspiration</a></li>
                        <li><a href="/pages/about.php" title="View the About page">About</a></li>
                        <li><a href="/pages/contact.php" title="View the Contact page">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <div id="content"> <!--The face of the page.  Big Beautiful images to showcase my work.-->
                <img src="/images/logo_design/logo.png" alt="The main image on the screen represents my most recent logo.">
                    <h1>"Logo Design"</h1>
            </div>
            <div id="media_boxes"> <!--Recent work image links-->
                <ul>
                    <li><a target="new" href="https://anthondavenportcom130.wordpress.com/2014/11/13/logo-for-project-7/"><img src="/images/logo_design/logo.png" alt="The image represents my latest logo design."></a><p>Most Recent Logo</p></li>
                    <li><a target="new" href="http://www.redrock-inc.com/"><img src="/images/logo_design/Official_RedRock_Logo.jpg" alt="The image represents a previous design."></a><p>Logos this year</p></li>
                    <li><a target="new" href="https://anthondavenportcom130.wordpress.com/2014/11/01/p5-logos-project/"><img src="/images/logo_design/AnthonDavenportP5Logos.jpg" alt="The image represents previous logo designs."></a><p>Older Logos</p></li>
                </ul>
            </div>
            <footer id="page_footer"> <!--Page footer-->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
            <div id="assessment"><a href="/index.php" title="View the Home Page">Home Page</a>
                <a href="/pages/portfolio.php" title="View my Portfolio">Portfolio</a>
                <a href="/pages/recent-work.php" title="View my recent work">Recent Work</a>
                <a href="/pages/web-design.php" title="View my web designs">Web Design</a>
                <a href="/pages/other-projects.php" title="View my other projects">Other Projects</a>
                <a href="/pages/inspiration.php" title="View my inspiration">Inspiration</a>
                <a href="/assessments/site-plan.php" title="View the Site Plan">Site Plan</a>
                <a href="/assessments/dpj.php" title="View the Dileberate Practice Journals">Deliberate Practice Journals</a>
                <a href="/assessments/presentation.php" title="View the presentation">Presentation</a>
            </div>
            </footer>
        </div>
    </body>
</html>
