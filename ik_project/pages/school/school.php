<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>School</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="site">
    <div id = "navbar">
        <div id = "home_div" onclick="location.href='../../../index.php';" style="cursor: pointer;">
            <h1>Home</h1>
        </div>
        <div id = "dayinlife_div" onclick="location.href='../my_life/my_life.php';" style="cursor: pointer;">
            <h1>My life</h1>
        </div>
        <div id = "schoolwerk_div" onclick="location.href='../school/school.php';" style="cursor: pointer;">
            <h1>School</h1>
        </div>
        <div id = "portfolio_div" onclick="location.href='../portfolio/portfolio.php';" style="cursor: pointer;">
            <h1>Portfolio</h1>
        </div>
        <div id = "downloads_div" onclick="location.href='../downloads/downloads.php';" style="cursor: pointer;">
            <h1>Downloads</h1>
        </div>
        <div id = "socialmedia_div" onclick="location.href='../social_media/social_media.php';" style="cursor: pointer;">
            <h1>Social media</h1>
        </div>
        <div id = "contact_div" onclick="location.href='../contact/contact.php';" style="cursor: pointer;">
            <h1>Contact</h1>
        </div>
    </div>
    <div id = "titlediv">
        <h1 id = "titletext">Pim Hakkert</h1>
    </div>
</div>
<div id = "schoolwork">
    <h1 id = "schoolwork_text">My schoolwork on display</h1>
    <h2 id = "schoolwork_text2">My school is Dutch, so the schoolwork is too, unfortunately.</h2>
    <h3 id = "schoolwork_text3">If you are unable to back out of a file, just press the back button in your browser.</h3>
    <div id = "iframe_and_content">
        <div id = "iframe_div">
            <iframe id="schoolmap" src="bewijzenmap"></iframe>
        </div>
        <div id = "highlights_div">
            <h2 id = "highlights_header">Highlights</h2>
            <p id = "highlights_text">At my school there once was a fun thing going on. Our class decided to take pictures of eachother and try to photoshop them the best way possible.
             It definitely resulted in a fun time that I'll never forget.</p>
        </div>
    </div>
</div>
<footer>
    <div id="footer_div">
        <h1 id = "footer_text">Copyright © by Pim Hakkert - 2018</h1>
    </div>
</footer>
</body>
</html>