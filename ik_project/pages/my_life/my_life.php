<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>My life</title>
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
<div id = "mylife_div">
    <h1 id = "mylife_text">My life visualized</h1>
    <h2 id = "mylife_text2">A few pictures showcasing my life</h2>
    <div id = "pictures">
        <div id = "pim_ship">
            <img id = "pim_ship_pic" src="../../imgs/mylife_pim_bike.jpg">
            <div id = "pim_ship_textdiv">
                <h1 id = "pim_ship_text">My bicycle gets used daily, as I require it to travel to my local busstop for school and to get to work. I wouldn't know what to do without it! It has been worn down quite a bit, but Dutch people still manage to use half broken down bicycles, so this is no big matter.</h1>
            </div>
        </div>
        <div id = "pim_detect">
            <img id = "pim_detect_pic" src="../../imgs/mylife_pim_laptop.jpg">
            <div id = "pim_detect_textdiv">
                <h1 id = "pim_detect_text">A big part of my day is spent on programming and developing. From Minecraft plugins to websites, I try to learn as much as possible to get a better position in the workfield. This laptop is with me whenever I go to school and it has become a habit to always put it in my bag.</h1>
            </div>
        </div>
        <div id = "pim_diploma">
            <img id = "pim_diploma_pic" src="../../imgs/mylife_pim_pizza.jpg">
            <div id = "pim_diploma_textdiv">
                <h1 id = "pim_diploma_text">Every weekend I work at Domino’s pizza’s and I usually make pizza’s or put them in boxes. Although the job can be stressful because of a lack of staffing, I do enjoy it. I made a lot of friends because of this job and it’s a nice working enviroment. </h1>
            </div>
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
