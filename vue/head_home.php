<!DOCTYPE>
<html lang="fr">
<head>

    <title>Gestionnaire Ticket</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="./style/style.css">
    <!-- Google Font   -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <script src="./js/functionsHead.js"></script>
    <script>
        loader();
    </script>


</head>
<body>

<!--Main Navigation-->
<div class="bgBuild" id="background-wrapper" data-stellar-background-ratio="0.1" style="background-position: 0% 0%;">

    <div id="navaigation" class="wrapper">

        <div class="header">
            <div class="header-inner container">

                <!-- Logo-->
                <div class="row">

                    <div class="col-sm-4 col-lg-6  ">
                        <a href="#" class="navbar-brand">
                            <h1 class="hidden">
                                <img src="" alt="Solution Afrika logo">
                                <!--                            Nom de l'entreprise-->
                                Solution Afrika
                            </h1>
                        </a>

                        <!--                    Section slogan Header-->
                        <div class="navbar-slogan">
                            Responsive HTML Theme <br>
                            By Malcom
                        </div>

                    </div>
                    <!--Inclusion du Menu dynamique-->
                    <?php require_once('menuLogin.php'); ?>

                </div>

                <!-- Menu mobile-->
                <div class="row  mobil">


                    <div class="mobilBg">
                        <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
                        <a href="javascript:void(0);" class="icon" onclick="mobileSwitch()">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>

                    <div class="mobileNav " id="myLinks">
                        <a class="btn active" href="#home">Home</a>
                        <a href="#news" class="btn">News</a>
                        <a href="?action=contact" class="btn">Contact</a>
                        <a href="#about" class="btn">About</a>
                    </div>


                </div>
                <!-- Fin Menu mobile-->
                <!-- Default Menu-->
                <div class="row pl-3">
                    <div class="topnav" id="menu">
                        <a class="btn active" href="#home">Home</a>
                        <a href="#news" class="btn">News</a>
                        <a href="?action=contact" class="btn">Contact</a>
                        <a href="#about" class="btn">About</a>
                    </div>
                </div>
                <!-- Fin Menu mobile-->


            </div>


        </div>

    </div>


</div>



