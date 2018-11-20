<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
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
<div id = "portfolio_main">
    <h1 id = "portfolio_text">Here are my previous projects</h1>
    <h2 id = "portfolio_text2">There may not be much, but everything I do will be added right here!</h2>
    <div id = "portfolio_content">
        <h3 id ="one_header">Minecraft Bukkit plugins</h3>
        <p id="one_text">I regularly create Minecraft Bukkit plugins. They are essentially addons for Minecraft. The plugins are written in Java and can interact with clients connected to a server.
            Bukkit made an API to make it easier for plugin makers to interact with Minecraft. They both added functions and documentations. I have been writing these plugins for about a half year now and they have helped me to create an understanding of object oriented programming.
            I learned to work with objects, pass them through constructors and how to properly optimize code. Writing these programs has definitely improved my skills.
        </p>
        <img id="one_img" src="../../imgs/portfolio_1.png">
    </div>
</div>
<footer>
    <div id="footer_div">
        <h1 id = "footer_text">Copyright © by Pim Hakkert - 2018</h1>
    </div>
</footer>
</body>
</html>