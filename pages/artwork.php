<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Artwork</title>
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
                    <h1>Artwork</h1><!--<img src="/images/adwd.png" alt="Text that reads, Anthon Davenport Web Designer.">-->
                </div>
                <nav> <!--Navigation links-->
                    <ul>
                        <li><a href="/index.php" title="View the Home page">Home</a></li>
                        <li><a href="/pages/portfolio.php" title="View my Portfolio">Portfolio</a></li>
                        <li><a href="/pages/other-projects.php" title="View my other projects">Other Projects</a></li>
                        <li><a href="/pages/architecture.php" title="View my Architectural Drafting">Architecture</a></li>
                        <li><a href="/pages/illustrations.php" title="View my Digital Illustrations">Illustrations</a></li>
                        <li><a href="/pages/photography.php" title="View my Photography">Photography</a></li>
                        <li><a href="/pages/about.php" title="View the About page">About</a></li>
                        <li><a href="/pages/contact.php" title="View the Contact page">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <div id="content"> <!--The face of the page.  Big Beautiful images to showcase my work.-->
                <img src="/images/artwork/Posterpart3AnthonDavenport5.jpg" alt="The main image is meant to represent some of my artwork.">
                    <h1>"Artwork"</h1>
            </div>
            <div id="media_boxes"> <!--Recent work image links-->
                <ul>
                    <li><a href="/pages/artwork.php"><img src="/images/artwork/chairstudy2.jpg" alt="The image represents some of my artwork."></a><p>Artwork</p></li>
                    <li><a href="/pages/architecture.php"><img src="/images/architecture/Structurestudy5.jpg" alt="The image represents some of my drafting skills."></a><p>Architecture</p></li>
                    <li><a href="/pages/illustrations.php"><img src="/images/illustrations/Because.jpg" alt="The image represents some of my digital illustrations"></a><p>Illustrations</p></li>
                    <li><a href="/pages/photography.php"><img src="/images/photography/foreground.jpg" alt="The image represents some of my photography"></a><p>Photography</p></li>
                </ul>
            </div>
            <footer id="page_footer"> <!--Page footer-->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
                <div id="assessment"> <!--links to the assignments for CIT 230-->
                    <a href="/index.php" title="View the Home Page">Home Page</a>
                    <a href="/pages/portfolio.php" title="View my Portfolio">Portfolio</a>
                    <a href="/pages/other-projects.php" title="View my other projects">Other Projects</a>
                    <a href="/pages/architecture.php" title="View my Architectural Drafting">Architecture</a>
                    <a href="/pages/illustrations.php" title="View my Digital Illustrations">Illustrations</a>
                    <a href="/pages/photography.php" title="View my Photography">Photography</a>
                    <a href="/assessments/site-plan.php" title="View the Site Plan">Site Plan</a>
                    <a href="/assessments/dpj.php" title="View the Dileberate Practice Journals">Deliberate Practice Journals</a>
                    <a href="/assessments/presentation.php" title="View the presentation">Presentation</a>
                </div>
            </footer>   
        </div>
    </body>
</html>



