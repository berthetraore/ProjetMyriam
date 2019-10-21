<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>swipngo</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <!-- CSS Files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href=".\style\style.accueil.css">


</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="blue">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="javascript:;" class="simple-text">
                    Logo
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a class="nav-link" href="Acceuil%20dashboard.php">
                        <i class="fa fa-home"></i>
                        <p>Acceuil</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="Acceuil%20dashboard.php">
                        <i class="fas fa-money-bill-alt"></i>
                        <p>Acheter Credit</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="Acceuil%20dashboard.php">
                        <i class="fas fa-exchange-alt"></i>
                        <p>Transferer Credit</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="Acceuil%20dashboard.php">
                        <i class="fas fa-history"></i>
                        <p>Historique</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-expand-lg " color-on-scroll="800">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                <span class="d-lg-block">&nbsp;Search</span>
                            </a>
                        </li>

                    </ul>
                    <ul class="navbar-nav ml-auto">

                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <i class="fas fa-user-circle"></i>
                                <span class="notification">10</span>
                                <span class="d-lg-none">Notification</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">message</a>
                                <a href="#" class="dropdown-item">Drafts</a>
                                <a href="#" class="dropdown-item">Sent Items</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">deconnexion</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
</body>

<?php
