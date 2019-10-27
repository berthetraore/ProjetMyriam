<div class="col-sm-8 col-lg-6">

    <!--    Menu dynamique de Login-->
    <ul class="list-inline user-menu pull-right ">
        <?php
        //On lance la session
        if (!ISSET($_SESSION)) session_start();

        if (ISSET($_SESSION["connected"])) {
            //Menu une fois que l'utilisateur est connecté
            ?>
            <li class="user-register  mr-md-3"><a href="?action=afficher" class="text-uppercase btn nav-link"> <i
                            class="fa fa-sign-out-alt mr-1 "></i> Se déconnecter (<?= $_SESSION["connected"] ?>) </a>
            </li>
            <li class="user-login  "><a href="?action=deconnecter" class="text-uppercase btn"><i
                            class="fa fa-chart-line mr-1 "></i> Mon Espace <i class="fa fa-chevron-right"></i></a></li>

            <?php
        } else {
            //Menu une par défault
            ?>
            <li class="user-register  mr-md-3"><a href="?action=newMember" class="text-uppercase btn nav-link"> <i
                            class="fa fa-edit mr-1 "></i> Devenir client </a></li>
            <li class="user-login  "><a href="?action=connecter" class="text-uppercase btn"><i
                            class="fa fa-user-circle mr-1 "></i> Se connecter <i class="fa fa-chevron-down"></i></a>
            </li>

            <?php
        }


        ?>
    </ul>


</div>
