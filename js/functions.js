function loader() {
    window.onload = function () {
        homeSectionMenuListener();
        changeContent("solEntrep")
        activeMenu();
        sliderClients();

    }
}


function activeMenu() {


//On recuper le parent de notre div
    var header = document.getElementById("menu");
    //On recupere une liste d'element ayant la btn se trouvant ds le parent header
    var btns = header.getElementsByTagName("a");

    //on ajouter un écouteur de type click sur chaque btn en utilisant la boucle for et ainsi que son indice
    for (var i = 0; i < btns.length; i++) {

        btns[i].addEventListener("click", function () {

            console.log(btns.className);

        })
    }

}


/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function mobileSwitch() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

/**
 * Function permettant d'ajouter un evenement du menu de la 2e section Home
 * **/
function homeSectionMenuListener() {

    var x = document.getElementById("sng_Home_2_Menu_1");

    var y = x.getElementsByTagName("li");

    //On parcours fes tableau de li
    for (i = 0; i < y.length - 1; i++) {

        y[i].addEventListener("click", function () {
            //On recure l'id de l'élement cliqué et on le transmet a notre function homeSection
            homeSectionMenu(this.id);
        })

    }

}

/**
 *  Fonction permettant d''enlever active et d'ajouter au nouveau li cliqué
 * */
function homeSectionMenu(idCible) {

    var x = document.getElementById("sng_Home_2_Menu_1");
    var y = x.getElementsByTagName("li");

    //On parcourt le tableau de la liste li et on retire la className
    for (i = 0; i < y.length - 1; i++) {
        // Si
        if (y[i].className = "active") {
            toRemove = y[i];
            toRemove.className = "";
        }


    }
    //on ajouter une classe a l'élement cliqué
    document.getElementById(idCible).className = "slick-active";
    changeContent(idCible);
}

function changeContent(idCible) {
    var x = document.getElementById("sng_Home_2_Content");
    var title = x.getElementsByTagName("h3");
    var content = x.getElementsByTagName('p');

    var httpRequest = new XMLHttpRequest();

    httpRequest.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            //Stocke le text JSON
            var text = this.responseText;
            //Converty en objet
            var obj = JSON.parse(text);

            switch (idCible) {

                case 'solEntrep':
                    title[0].innerHTML = obj.contents[0].title;
                    content[0].innerHTML = obj.contents[0].content;
                    break;

                case 'carteUsager':
                    title[0].innerHTML = obj.contents[1].title;
                    content[0].innerHTML = obj.contents[1].content;
                    break;
            }


        }
    }
    httpRequest.open("GET", "./pages/homeChangeContent.json", true);
    httpRequest.send();

}

function sliderClients() {

    $('#blogCarousel').carousel({
        interval: 5000
    });

}







