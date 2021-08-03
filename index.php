<?php include 'sendemail.php'; ?>
<?php include 'sharingbuttons.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Filipino Cuisine</title>
    <link rel="stylesheet" href="style.css">
</head>

<!--alert messages start-->
<?php echo $alert; ?>
<!--alert messages end-->


<body>
    <div class="spinner-wrapper">
        <div class="spinner"></div>
    </div>
    <header>
        <a href="#" class="logo">Filipino Cuisine<span>.</span></a>
        <ul class="navigation">
            <li><a href="#banner">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#chefs">Chefs</a></li>
            <li><a href="#comment">Comments</a></li>
            <li><a href="#contact">Know More</a></li>
        </ul>
    </header>

    <section class="banner" id="banner">
        <div class="content">
            <h2>A Taste Like Home</h2>
            <p>Filipino cuisine has developed from the different cultures that shaped its history;
                With over 7,500 islands, the cuisine of the Philippines is rather a mish-mash of hundreds
                of local, regional, and ethnic cuisines, and without any qualifiers, you would often think
                of ubiquitous dishes such as adobo, sinigang, lechon, and Filipino-Chinese dishes</p>
            <a href="#" class="btn">Let's Eat</a>

        </div>
    </section>

    <section class="about" id="about">
        <div class="row">
            <div class="col50">
                <h2 class="titleText"><span>A</span>bout Filipino Cuisine</h2>
                <p> The country’s colonial past has heavily influenced the local food culture, and a
                    blend of local flavours add a touch of authenticity. The hybrid and constantly
                    evolving culinary traditions are the ideal representation of the country’s rich
                    history and varied geography. From the familiar to the unusual, Filipino cuisine
                    has it all, so read on to know more about food in the Philippines. You heard it here-
                    Filipinos love to eat so you may end up uber full and in love with this cuisine!<br><br>Filipino cuisine
                    is often tagged as “the next big thing” in the culinary world. Drawing inspiration from many international
                    influences, Filipino food is created to suit local tastes – resulting in an altogether fascinating cuisine.</p>
            </div>
            <div class="col50">
                <div class="imgBx">
                    <video src="Images/filcuisine.mp4" type="video/mp4" loop class="clip"></video>
                </div>
            </div>
        </div>
    </section>

    <section class="menu" id="menu">
        <div class="title">
            <h2 class="titleText"><span>M</span>enu</h2>
            <p>Filipino dishes are unique as it draws inspiration from several influences.
                Our food reflects the Spanish, Japanese, Chinese, Western and Pacific Islander
                flavors developed during our many years of colonization.Filipino dishes are
                very colorful combined with vegetables, seafood, lean meat and many more</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="Images/menu1.jpg">
                </div>
                <div class="text">
                    <h3>Pork Adobo</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="Images/menu2.jpg">
                </div>
                <div class="text">
                    <h3>Sisig</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="Images/menu3.jpg">
                </div>
                <div class="text">
                    <h3>Bulalo</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="Images/menu4.jpg">
                </div>
                <div class="text">
                    <h3>Tinola</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="Images/menu5.jpg">
                </div>
                <div class="text">
                    <h3>Kare-Kare</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="Images/menu6.jpg">
                </div>
                <div class="text">
                    <h3>Sinigang</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="Images/menu7.jpg">
                </div>
                <div class="text">
                    <h3>Laing</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="Images/menu8.jpg">
                </div>
                <div class="text">
                    <h3>Pinakbet</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="Images/menu9.jpg">
                </div>
                <div class="text">
                    <h3>Kaldereta</h3>
                </div>
            </div>
        </div>
        <div class="title">
            <a href="#" class="btn">View All</a>
        </div>
    </section>

    <section class="chefs" id="chefs">
        <div class="title">
            <h2 class="titleText">Culinary<span> M</span>asters</h2>
            <p>Filipino cuisine is a profusion of flavors,
                cooking techniques, and heirloom recipes
                prepared to the letter or continuously reinvented.
                Here are some of the culinary masters
                bringing Filipino heritage to the fore.</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="Images/chef1.png">
                </div>
                <div class="text">
                    <h3>Head Chef</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="Images/chef2.jpg">
                </div>
                <div class="text">
                    <h3>Food Genius</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="Images/chef3.jpg">
                </div>
                <div class="text">
                    <h3>Executive Chef</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="Images/chef4.jpg">
                </div>
                <div class="text">
                    <h3>Sous Chef</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="comment" id="comment">
        <div class="title white">
            <h2 class="titleText"><span> C</span>omments and Experiences</h2>
            <p>Filipino cuisine is a profusion of flavors,
                cooking techniques, and heirloom recipes
                prepared to the letter or continuously reinvented.
                Here are some of the culinary masters
                bringing Filipino heritage to the fore.</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="Images/cus1.jpg">
                </div>
                <div class="text">
                    <p>Filipino cuisine in general is simple, delicious
                        and at least appetizing for a foreigner. It also
                        have a lot of influences from other countries, Main
                        dishes are always partnered with rice, as rice
                        is considered the most staple food.</p>
                    <h3>Joshua Flores</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="Images/cus2.jpg">
                </div>
                <div class="text">
                    <p>Filipino food is meant to be paired with rice.
                        Its a must if you want to know the real taste
                        of Adobo or any viand with a strong flavor.
                        So if you don’t eat rice, you probably
                        won’t appreciate Filipino food as much.</p>
                    <h3>Cathy Omay</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="Images/cus3.jpg">
                </div>
                <div class="text">
                    <p>I haven’t eaten that much of it. But you can’t complain
                        about fish for breakfast. Filipino foods are really simple
                        and delicious.A lot of the popular items are
                        tasty but high in fat, like deep-fried lumpia or even pancit (noodles).
                        Overall, I love Filipino dishes!</p>
                    <h3>Ardhiella Solis</h3>
                </div>
            </div>
        </div>
    </section>





    <section class="contact" id="contact">
        <div class="title">
            <h2 class="titleText"><span> K</span>now more </h2>
            <p>For questions, you can contact us on the following:</p>
            <h3>filipinocuisine@gmail.com</h3>
        </div>

        <form class="contact" action="" method="post">
            <div class="contactForm">
                <h3>Contact Us</h3>
                <h3>Or send us a Message</h3>
                <div class="inputBox">
                    <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                    <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <input type="submit" name="submit" class="submit" value="Send">
                </div>
            </div>
        </form>
    </section>

    <?php
    showSharer("https://xelafer.github.io/Midterm-Website/", "A search engine site!");
    ?>
    <div class="copyrightText">
        <p>Copyright © 2021 <a href="#">Filipino Cuisine</a>. All Rights Reserved.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="app.js"></script>

    </script>
</body>

</html>