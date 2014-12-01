<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Deliberate Practice Plan</title>
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
                    <h1>Deliberate Practice Plan</h1><!--<img src="/images/adwd.png" alt="Text that reads, Anthon Davenport Web Designer.">-->
                </div>
                <nav> <!--Navigation links-->
                    <ul>
                        <li><a href="/index.php" title="View the Home page">Home</a></li>
                        <li><a href="/assessments/dpj.php" title="View the Dileberate Practice Journals">Deliberate Practice Journals</a></li>
                        <li><a href="/pages/contact.php" title="View the Contact page">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <h1>Deliberate Practice Plan</h1>
            <h2>Where</h2>
            <p>I plan on practicing at my home office on my computer.  The room is quiet and it is a great place to focus and practice.</p>
            <h2>When</h2>
            <p>I plan on practicing at 8:00 a.m. each morning Monday through Friday. I will practice for 30 minutes. This is the time of day that I will be most alert and away from distractions.</p>
            <h2>Who</h2>
            <p>I will work with one of my friends.  He is in the same degree and we will be able to bounce our progress off one another.  I will teach him once a week about what I have practiced and learned.</p>
            <div id="djournal_link">    
                <a href="/assessments/dpj.php" title="View the Dileberate Practice Journals">Deliberate Practice Journals</a>
            </div>    
            <footer id="page_footer"> <!--Page footer-->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
                <div id="assessment"> <!--links to the assignments for CIT 230-->
                    <a href="/assessments/dpj.php" title="View the Dileberate Practice Journals">Deliberate Practice Journals</a>
                    <a href="/assessments/site-plan.php" title="View the Site Plan">Site Plan</a>
                    <a href="/assessments/presentation.php" title="View the presentation">Presentation</a>
                </div>
            </footer>   
        </div>
    </body>
</html>

