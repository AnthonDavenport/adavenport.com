<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Davenport Web Design</title>
        <meta name="description" content="Davenport Web Design">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="AnthonDavenport">
        <link href="CSS/stylesheet.css"  type="text/css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div id="wrapper"> <!--Entire body wrapper-->
            <header id="page_header"> <!--The header section-->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
            </header>
            <div id="content"> <!--The face of the page.  Big Beautiful images to showcase my work.-->
                <img src="/images/Leading.jpg" alt="The main image on the screen is a picture of my dog Otis.  He is a black and white Schnuazer-Collie mix.">
                    <h1>"Recent Work"</h1>
                    <p>Site Currently Under Construction</p>
            </div>
            <div id="media_boxes"> <!--Recent work image links-->
                <ul>
                    <li><a href="/pages/recent-work.php"><img src="/images/media_boxes/letterhead.jpg" alt="The image represents my most recent design work."></a><p>Recent Work</p></li>
                    <li><a href="/pages/recent-work.php"><img src="/images/media_boxes/bcardsprint.jpg" alt="The image represents my most recent design work."></a><p>Recent Work</p></li>
                    <li><a href="/pages/recent-work.php"><img src="/images/media_boxes/AnthonDavenportP5Logos.jpg" alt="The image represents my most recent design work."></a><p>Recent Work</p></li>
                </ul>
            </div>
            <div id="blog_snapshot"> <!--Blog image link-->
                <h3>My Blog</h3>
                <a target="new" href="http://anthondavenportcom130.wordpress.com/"><img src="/images/blog_posts/blogp6.png" alt="This is a snapshot of my Wordpress blog."></a>
            </div>     
            <footer id="page_footer"> <!--Page footer-->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
            </footer>   
        </div>
    </body>
</html>

      