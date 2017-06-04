<!DOCTYPE html >
<html lang="en" ng-app='app'>
<head>
    <meta charset="UTF-8">
    <title>Welocome to portfolio</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="assets/js/angular.min.js"></script>
    <script src="assets/js/angular-route.js"></script>
    <script src="assets/js/main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <base href="/">
</head>

<body>

<div id="header">

    <div class="top">

        <!-- Logo -->
        <div id="logo">
            <span class="image avatar48"><img src="assets/images/face.jpg" alt="" /></span>
            <h1 id="title">Андрей Шипуль</h1>
            <p>веб-разработчик</p>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <!--

                Prologue's nav expects links in one of two formats:

                1. Hash link (scrolls to a different section within the page)

                   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

                2. Standard link (sends the user to another page/site)

                   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

            -->
            <ul>
                <li><a href="/" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Резюме</span></a></li>
                <li><a href="/portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Портфолио</span></a></li>
                <li><a href="/about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Обо мне</span></a></li>
                <li><a href="/contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Контакты</span></a></li>
            </ul>
        </nav>
    </div>


    <div class="bottom">

        <!-- Social Icons -->
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
        </ul>

    </div>

</div>

<!-- Main -->
<div id="main" >
    <ng-view></ng-view>
</div>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollzer.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main1.js"></script>

</body>
</html>