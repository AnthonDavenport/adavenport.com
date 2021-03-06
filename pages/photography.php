<!DOCTYPE html>
<html lang="en">
    <head>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php';?>
        <title>Photography</title>
    </head>
    <body>
        <div id="wrapper"> <!--Entire body wrapper-->
            <header id="page_header"> <!--The header section-->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php';?>
                <div id="theme"> <!--The title or theme of the page.-->
                    <h1>Photography</h1><!--<img src="/images/adwd.png" alt="Text that reads, Anthon Davenport Web Designer.">-->
                </div>
                <nav> <!--Navigation links-->
                    <ul>
                        <li><a href="/index.php" title="View the Home page">Home</a></li>
                        <li><a href="/pages/portfolio.php" title="View my Portfolio">Portfolio</a></li>
                        <li><a href="/pages/other-projects.php" title="View my other projects">Other Projects</a></li>
                        <li><a href="/pages/artwork.php" title="View my Artwork">Artwork</a></li>
                        <li><a href="/pages/architecture.php" title="View my Architectural Drafting">Architecture</a></li>
                        <li><a href="/pages/illustrations.php" title="View my Digital Illustrations">Illustrations</a></li>
                        <li><a href="/pages/about.php" title="View the About page">About</a></li>
                        <li><a href="/pages/contact.php" title="View the Contact page">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <div id="content"> <!--The face of the page.  Big Beautiful images to showcase my work.-->
                <img src="/images/photography/foreground.jpg" alt="The main image is meant to represent some of my photography work.">
                    <h1>"Photography"</h1>
            </div>
            <div id="media_boxes"> <!--Recent work image links-->
                <ul>
                    <li><a target="new" href="https://www.flickr.com/photos/115779723@N04/"><img src="/images/photography/foreground.jpg" alt="The image represents some of my photography."></a><p>Photography</p></li>
                </ul>
            </div>
            <footer id="page_footer"> <!--Page footer-->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
                <div id="assessment"> <!--links to the assignments for CIT 230-->
                    <a href="/index.php" title="View the Home Page">Home Page</a>
                    <a href="/pages/portfolio.php" title="View my Portfolio">Portfolio</a>
                    <a href="/pages/other-projects.php" title="View my other projects">Other Projects</a>
                    <a href="/pages/artwork.php" title="View my Artwork">Artwork</a>
                    <a href="/pages/architecture.php" title="View my Architectural Drafting">Architecture</a>
                    <a href="/pages/illustrations.php" title="View my Digital Illustrations">Illustrations</a>
                    <a href="/assessments/site-plan.php" title="View the Site Plan">Site Plan</a>
                    <a href="/assessments/dpj.php" title="View the Dileberate Practice Journals">Deliberate Practice Journals</a>
                    <a href="/assessments/presentation.php" title="View the presentation">Presentation</a>
                </div>
            </footer>   
        </div>
    </body>
</html>

