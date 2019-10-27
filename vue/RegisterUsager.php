<?php
require_once '../modele/ConnectUsager.php';

if (!ISSET($_SESSION)) {
    session_start();
}
$name = (ISSET($_REQUEST['fname'])) ? $_REQUEST['fname'] : "";
$surname = (ISSET($_REQUEST['fsurname'])) ? $_REQUEST['fsurname'] : "";
$email = (ISSET($_REQUEST['femail'])) ? $_REQUEST['femail'] : "";
$cellulaire = (ISSET($_REQUEST['fcellulaire'])) ? $_REQUEST['fcellulaire'] : "";
$password = (ISSET($_REQUEST['fpassword'])) ? $_REQUEST['fpassword'] : "";
$password_repeat = (ISSET($_REQUEST['fpassword-repeat'])) ? $_REQUEST['fpassword-repeat'] : "";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <!-- -->
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

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="../style/styleforLogin.css">
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Creer un compte</h3>
                <div class="d-flex justify-content-end social_icon">
                    <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                </div>
            </div>

            <div class="card-body">

                <form name="myForm" onsubmit="return validateForm()" method="post" action="">
                    <input type="hidden" name="action" value="sinscrire"/>
                    <input type="hidden" name="ftypecompte" value="3"/>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="surname" id="surname" name="fsurname"
                               pattern="[a-zA-Z\s]{2,50}" required>
                        <span class="error"><?= ConnectUsager::getMessage("fsurname") ?></span>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="name" id="name" name="fname"
                               pattern="[a-zA-Z\s]{2,50}" required>
                        <span class="error"><?= ConnectUsager::getMessage("fname") ?></span>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope icon"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="email" id="email" name="femail">
                        <span class="error"><?= ConnectUsager::getMessage("femail") ?></span>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-mobile"></i></span>
                        </div>
                        <input type="tel" class="form-control" placeholder="cellulaire" id="cellulaire"
                               name="fcellulaire">
                        <span class="error"><?= ConnectUsager::getMessage("fcellulaire") ?></span>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="password" id="password"
                               name="fpassword"
                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                               title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                               required>
                        <span class="error"><?= ConnectUsager::getMessage("fpassword") ?></span>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Repeat password"
                               name="fpassword-repeat"
                               id="password-repeat" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                               title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                               required>
                    </div>

                    <div id="message"><span class="error"><?= ConnectUsager::getMessage("fcellulaire") ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Valider" class="btn float-right login_btn" id="register"
                               name="register">
                    </div>
                </form>

            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">

                </div>

            </div>
        </div>
    </div>
</div>

<script src="../js/FunctionForRegister.js">


</script>


</body>
</html>
