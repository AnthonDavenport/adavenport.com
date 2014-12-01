<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Site Plan</title>
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
                    <h1>Site Plan</h1><!--<img src="/images/adwd.png" alt="Text that reads, Anthon Davenport Web Designer.">-->
                </div>
                <nav> <!--Navigation links-->
                    <ul>
                        <li><a href="/index.php" title="View the Home page">Home</a></li>
                        <li><a href="/pages/portfolio.php" title="View the Portfolio">Portfolio</a></li>
                        <li><a href="/pages/about.php" title="View the About page">About</a></li>
                        <li><a href="/pages/contact.php" title="View the Contact page">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <h1>Site Plan Sections</h1>
        <div id="media_boxes">
            <ul>
                <li><a href="/assessments/siteplandescription.php" title="View the Site Plan Description">Site Plan Description</a></li>
                <li><a href="/assessments/spassetlist.php" title="View the Site Plan Asset List">Site Plan Asset List</a></li>
                <li><a href="/assessments/spstyleguide.php" title="View the Site Style Guide">Site Plan Style Guide</a></li>
            </ul>
        </div>
        <footer id="page_footer"> <!--Page footer-->
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
            <div id="assessment"> <!--links to the assignments for CIT 230-->
                <a href="/assessments/siteplandescription.php" title="View the Site Plan Description">Site Plan Description</a>
                <a href="/assessments/spassetlist.php" title="View the Site Plan Asset List">Site Plan Asset List</a>
                <a href="/assessments/spstyleguide.php" title="View the Site Style Guide">Site Plan Style Guide</a>
                <a href="/assessments/deliberatepracticeplan.php" title="View the Deliberate Practice Plan">Deliberate Practice Plan</a>
                <a href="/assessments/dpj.php" title="View the Dileberate Practice Journals">Deliberate Practice Journals</a>
                <a href="/assessments/presentation.php" title="View the presentation">Presentation</a>
            </div>
        </footer>
        </div>
    </body>
</html>