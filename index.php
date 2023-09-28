<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hi my name is Lamorna a junior web developer, view my projects and skills. If you like my work please get in touch.">
    <title>Lamorna Read</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,200;0,300;0,400;0,600;1,200;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://kit.fontawesome.com/2af8b76caa.js" crossorigin="anonymous"></script>
</head>
<body>
    <script>0</script>
    <!--Nav-->
    <header>
        <div class="nav">
            <div class="ham-nav">
                <a href="#">
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </a>
                <div class="small-nav large-hidden x-large-hidden">
                    <a href="#">
                        <div class="ham-logo">
                            <img class="initials" src="android-chrome-192x192.png" alt="L R">
                        </div>
                    </a>
                    <ul class="nav-ul-small">
                        <li><a class="nav-li" href="about.html">About</a></li>
                        <li><a class="nav-li" href="#portfolio">Portfolio</a></li>
                        <li><a class="nav-li" href="coding.html">Examples</a></li>
                        <li><a class="nav-li" href="scs.html">SCS</a></li>
                        <li><a class="nav-li" href="#contact">Contact</a></li>
                        <li>
                            <a class="nav-li" href="https://www.linkedin.com/in/lamorna-read-54292b284/" target="_blank"><i class="fa-brands fa-linkedin fa-xl" style="color: #ffffff;"></i></a>
                            <a class="nav-li" href="https://github.com/LamornaRead" target="_blank"><i class="fa-brands fa-github fa-xl" style="color: #ffffff;"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-bar small-hidden medium-hidden">
                <a href="#">
                    <div>
                        <img class ="logo-text" src="android-chrome-192x192.png" alt="L R">
                    </div>
                </a>
                <div>
                    <ul class="nav-ul">
                        <li><a class="nav-li" href="about.html">About Me</a></li>
                        <li><a class="nav-li" href="#portfolio">My Portfolio</a></li>
                        <li><a class="nav-li" href="coding.html">Coding Examples</a></li>
                        <li><a class="nav-li" href="scs.html">SCS Scheme</a></li>
                        <li><a class="nav-li" href="#contact">Contact Me</a></li>
                        <li>
                            <a class="nav-li" href="https://www.linkedin.com/in/lamorna-read-54292b284/" target="_blank"><i class="fa-brands fa-linkedin fa-xl" style="color: #ffffff;"></i></a>
                            <a class="nav-li" href="https://github.com/LamornaRead" target="_blank"><i class="fa-brands fa-github fa-xl" style="color: #ffffff;"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--Banner-->
    <div class="container-main">
        <div id="homepage" class="banner" style="background-image: url('images/space-g2f7526c66_1280.jpg');">
            <div class="info">
                <div class="image-container xsmall-hidden small-hidden">
                    <img class="profile-image" src="images/318345121_10224362642386879_2221550810901392762_n.jpg" alt="An a i portrait of author.">
                </div>
                <div class="profile-text">
                    <div>
                    <h2 id="type-header"></h2>
                    <p id="type-para"></p>
                    </div>
                </div>
            </div>
            <div class="scroll">
                <h2 class="section-heading-small"><a class="heading-scroll" href="#portfolio">Scroll Down</a></h2>
                <h3 class="section-heading-small"><i class="fa-solid fa-chevron-down"></i></h3>
            </div>
        </div>

    <!--my Portfolio-->
        <div id="portfolio" class="container">
            <div class="port-section">
                <div class="container-heading">
                    <h2 class="heading">My Portfolio</h2>
                </div>
                <div class="port-item">
                    <a href="https://netmatters.lamorna-read.netmatters-scs.co.uk/" target="_blank">
                        <div class="project-img" style="background-image: url(images/project-card/rebuild.png);">
                            <div class="project-info">
                                <p class="info-text">I rebuilt the Netmatters homepage as closely as possibly using HTML, SASS, CSS, JavaScript and PHP.</p>
                            </div>
                        </div>
                        <div class="port-text">
                            <h3 class="pro-heading">Netmatters Rebuild</h3>
                            <p class="info-text-two  x-large-hidden">I rebuilt the Netmatters homepage as closely as possibly using HTML, SASS, CSS, JavaScript and PHP.</p>
                            <p class="info-text-icons"><span class="code-icons"><i class="fa-brands fa-square-js"></i></span> <span class="code-icons"><i class="fa-brands fa-html5"></i></span> <span class="code-icons"><i class="fa-brands fa-css3-alt"></i></span> <span class="code-icons"><i class="fa-brands fa-sass"></i></span> <span class="code-icons"><i class="fa-brands fa-php"></i></span></p>
                            <h4 class="view-heading">View Project <i class="fa-solid fa-arrow-right"></i></h4>
                        </div>
                    </a>
                </div>
                <div class="port-item">
                    <a href="https://js-array.lamorna-read.netmatters-scs.co.uk/" target="_blank">
                        <div class="project-img" style="background-image: url(images/project-card/array.png);">
                            <div class="project-info">
                                <p class="info-text">I created a project that uses fetch API to get random images from a website and then attaches them to an email and stores them in an array. Then displays them for the user to see. I did this using HTML SASS CSS and JavaScript.</p>
                            </div>
                        </div>
                        <div class="port-text">
                            <h3 class="pro-heading">JavaScript Array</h3>
                            <p class="info-text-two  x-large-hidden">I created a project that uses fetch API to get random images from a website and then attaches them to an email and stores them in an array. Then displays them for the user to see. I did this using HTML SASS CSS and JavaScript.</p>
                            <p class="info-text-icons"><span class="code-icons"><i class="fa-brands fa-square-js"></i></span> <span class="code-icons"><i class="fa-brands fa-html5"></i></span> <span class="code-icons"><i class="fa-brands fa-css3-alt"></i></span> <span class="code-icons"><i class="fa-brands fa-sass"></i></span></p>
                            <h4 class="view-heading">View Project <i class="fa-solid fa-arrow-right"></i></h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--Contact Form-->
        <div id="contact" class="container">
            <div class="contact-section">
                <div class="container-heading">
                    <h2 class="heading">Contact Me</h2>
                </div>
                <div class="contact-item-1">
                    <div class="section">
                        <h3 class="heading">Get In Touch</h3>
                        <p class="section-content">Do you want to get in touch? Please do! You can give me a call at ...</p>
                        <h3 class="section-heading-two phone-me"><a href="tel:07934858981">07934858981</a></h3>
                        <p class="section-content">Or send me an email at ...</p>
                        <h3 class="section-heading-two email-me"><a href="mailto:lamornaread@outlook.com">lamornaread<br class="medium-hidden">@outlook.com</a></h3>
                    </div>
                </div>
                <div class="contact-item-2" id="contact-me">

                <!-- PHP FORM -->
                <?php

                include('inc/form.php');

                ?>
                <!-- PHP FORM -->

                </div>
            </div>
        </div>
    </div>
    <footer class="container-main">
        <div class="container-footer">
            <a href="#top" class="text-container">
                <h3 class="section-heading-small"><i class="fa-solid fa-chevron-up"></i></h3>
                <h2 class="section-heading-small">Back To Top</h2>
            </a>
        </div>
    </footer>
    <script src="js/jquery3.6.4.js"></script>
    <script src="js/main.js"></script>
    <script src="js/header.js"></script>
    <script src="js/form.js"></script>
</body>
</html>