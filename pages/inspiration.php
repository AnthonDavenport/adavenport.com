<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Inspiration</title>
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
                    <h1>Inspiration</h1><!--<img src="/images/adwd.png" alt="Text that reads, Anthon Davenport Web Designer.">-->
                </div>
                <nav> <!--Navigation links-->
                    <ul>
                        <li><a href="/index.php" title="View the Home page">Home</a></li>
                        <li><a href="/pages/portfolio.php" title="View my Portfolio">Portfolio</a></li>
                        <li><a href="/pages/recent-work.php" title="View my recent work">Recent Work</a></li>
                        <li><a href="/pages/web-design.php" title="View my web designs">Web Design</a></li>
                        <li><a href="/pages/logo-design.php" title="View my logo designs">Logo Design</a></li>
                        <li><a href="/pages/other-projects.php" title="View my other projects">Other Projects</a></li>
                        <li><a href="/pages/about.php" title="View the About page">About</a></li>
                        <li><a href="/pages/contact.php" title="View the Contact page">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <div id="content"> <!--The face of the page.  Big Beautiful images to showcase my work.-->
                <img src="/images/inspiration/gdweb.jpg" alt="The main image on the screen represents inspirational designs that I like.">
                    <h1>"Inspiration"</h1>
            </div>
            <div id="media_boxes"> <!--Recent work image links-->
                <ul>
                    <li><a target="new" href="https://dribbble.com/"><img src="/images/inspiration/Dribbble.png" alt="The image represents dribbble.com."></a><p>Dribbble.com</p></li>
                    <li><a target="new" href="http://designspiration.net/"><img src="/images/inspiration/designspiration.png" alt="The image represents designspiration.net."></a><p>Designspiration.net</p></li>
                    <li><a target="new" href="http://www.fromupnorth.com/"><img src="/images/inspiration/fromupnorth.png" alt="The image represents fromupnorth.com."></a><p>Fromupnorth.com</p></li>
                    <li><a target="new" href="http://www.graphic-exchange.com/home.html"><img src="/images/inspiration/graphic_exchange.png" alt="The image represents dribbble.com."></a><p>Graphic-exchange.com</p></li>
                    <li><a target="new" href="https://www.flickr.com/photos/115779723@N04/"><img src="/images/inspiration/Flickr.png" alt="The image represents flickr.com."></a><p>Flickr.com</p></li>
                </ul>
            </div>
            <p>Audio Testing</p>
            <div id="testingmedia"><audio controls preload="none" src="/audio/youdidit.wav"></audio> 
                <!--add an image and some text here as well as the links to these pages-->
                <p>Video Testing</p>
                <p>"WEBMSD"</p> 
                <video controls preload="none" width="300">
                    <source src="/video/IMG_0409.webmsd.webm" type="video/webm">
                </video>
                <p>"MP4"</p>   
                <video controls preload="none" width="300">
                    <source src="/video/IMG_0410.mp4.mp4" type="video/mp4">
                </video>
            </div>
            <footer id="page_footer"> <!--Page footer-->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
            <div id="assessment"><a href="/index.php" title="View the Home Page">Home Page</a>
                <a href="/pages/portfolio.php" title="View my Portfolio">Portfolio</a>
                <a href="/pages/recent-work.php" title="View my recent work">Recent Work</a>
                <a href="/pages/logo-design.php" title="View my logo designs">Logo Design</a>
                <a href="/pages/web-design.php" title="View my web designs">Web Design</a>
                <a href="/pages/other-projects.php" title="View my other projects">Other Projects</a>
                <a href="/assessments/site-plan.php" title="View the Site Plan">Site Plan</a>
                <a href="/assessments/dpj.php" title="View the Dileberate Practice Journals">Deliberate Practice Journals</a>
                <a href="/assessments/presentation.php" title="View the presentation">Presentation</a>
            </div>
            </footer>
        </div>
    </body>
</html>