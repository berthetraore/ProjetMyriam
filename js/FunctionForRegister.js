function validateForm() {
    var msg = document.getElementById('message');
    var myInputSurname = document.getElementById("surname");
    var myInputName = document.getElementById("name");
    var myInputEmail = document.getElementById("email");
    var myInputTelephone = document.getElementById("telephone");
    var myInputPassword = document.getElementById("password");
    var myInputPasswordRepeat = document.getElementById("upassword-repeat");


    if (myInputSurname == "" || myInputName == "" || myInputEmail || myInputTelephone || myInputPassword || myInputPasswordRepeat) {
        msg.style.display = 'block';
        msg.innerHTML = "<li>Veuillez remplir tout les champs</li>";
        return false;
    } else {
        msg.style.display = 'none';
    }

    // Validate letters for name and surname
    var letters = /[a-zA-Z\s]{2,50}/;
    if (myInputSurname.value.match(letters)) {
        msg.style.display = 'none';
    } else {
        msg.style.display = 'block';
        msg.innerHTML = "<li>Veuillez remplir avec un prenom correct</li>";
        myInputSurname.value = "";
        return false;
    }
    if (myInputName.value.match(letters)) {
        msg.style.display = 'none';
    } else {
        msg.style.display = 'block';
        msg.innerHTML = "<li>Veuillez remplir avec un nom correct</li>";
        myInputName.value = "";
        return false;
    }

    //Validate Password
    if (myInputPassword != myInputPasswordRepeat) {
        msg.style.display = 'block';
        msg.innerHTML = "<li>Les mots de passe doivent etre identiques</li>";
        return false;
    } else {
        msg.style.display = 'none';
    }

    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if (myInputPassword.value.match(lowerCaseLetters)) {
        msg.style.display = 'none';
    } else {
        msg.style.display = 'block';
        msg.innerHTML = "<li>Le mot de passe doit contenir des minuscules</li>";
        return false;
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (myInputPassword.value.match(upperCaseLetters)) {
        msg.style.display = 'none';
    } else {
        msg.style.display = 'block';
        msg.innerHTML = "<li>Le mot de passe doit contenir des majuscules</li>";
        return false;
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (myInputPassword.value.match(numbers)) {
        msg.style.display = 'none';
    } else {
        msg.style.display = 'block';
        msg.innerHTML = "<li>Le mot de passe doit contenir des nombres</li>";
        return false;
    }

    // Validate length
    if (myInputPassword.value.length >= 8) {
        msg.style.display = 'none';
    } else {
        msg.style.display = 'block';
        msg.innerHTML = "<li>Le mot de passe doit contenir au moins 8 caracteres</li>";
        return false;
    }


}

