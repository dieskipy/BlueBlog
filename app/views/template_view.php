<!--//$content_view - dropdown menu (nav_basic/nav_auth)-->
<!--//$content_body - some content (depends on the page)-->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/6db05585b5.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Playfair+Display:wght@400;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" type="image/x-icon" href="img/ico.ico"/>
    <title>BlueBlog</title>

</head>

<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">
                <img src="img/ico.png" width="20" class="d-inline-block align-top" alt="">
                BlueBlog
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="/news">Новости</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Аккаунт
                        </a>

                        <?php include 'app/views/' . $content_view["nav"]; ?>

                    </li>
                </ul>
            </div>

        </nav>
    </div>
</header>

<?php include 'app/views/' . $content_view["body"]; ?>
<script src="js/main.js"></script>

</body>
</html>

