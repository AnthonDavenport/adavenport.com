<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact Anthon Davenport</title>
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
                    <h1>Contact</h1> <!--<img src="/images/adwd.png" alt="Text that reads, Anthon Davenport Web Designer.">-->
                </div>
                <nav> <!--Navigation links-->
                    <ul>
                        <li><a href="/index.php" title="View the Home page">Home</a></li>
                        <li><a href="/pages/portfolio.php" title="View my Portfolio">Portfolio</a></li>
                        <li><a href="/pages/about.php" title="View the About page">About</a></li>
                    </ul>
                </nav>
            </header>
        <main><p>All fields are required.</p>
            <form method="post" action="index.php" id="contactform">
                <fieldset>
                    <label for="firstname">First Name:</label>
                    <input type="text" name="firstname" id="firstname" size="10"><br>
                    <label for="lastname">Last Name:</label>
                    <input type="text" name="lastname" id="lastname" size="15"><br>
                    <label for="email">Email Address:</label>
                    <input type="email" name="email" id="email" size="30"><br>
                    <label for="subject">Subject:</label>
                    <input type="text" name="subject" id="subject" size="60"><br>
                    <label for="message">Message</label>
                        <textarea name="message" id="message" rows="10" cols="60">
                        </textarea><br>
                    <p>Answer the following CAPTCHA question in the box below.</p>
                    <label for="captcha">What color is a red apple?</label>
                    <input type="text" name="captcha" id="captcha" size="5"><br>
                    <label for="action">&nbsp;</label>
                    <input type="submit" name="action" id="action" value="Send"><br>
               </fieldset>
            </form> 
        </main>
        <p>Contact</p>  
            <footer id="page_footer"> <!--Page footer-->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
                <div id="assessment"> <!--links to the assignments for CIT 230-->
                    <a href="/assessments/deliberatepracticeplan.php" title="View the Deliberate Practice Plan">Deliberate Practice</a>
                    <a href="/assessments/site-plan.php" title="View the Site Plan">Site Plan</a>
                    <a href="/assessments/dpj.php" title="View the Dileberate Practice Journals">Deliberate Practice Journals</a>
                    <a href="/assessments/presentation.php" title="View the presentation">Presentation</a>
                </div>
            </footer>   
        </div>
    </body>
</html>