<?php
// -- Contrôleur frontal --
spl_autoload_register(function ($class_name) {
    if (file_exists('../controleur/' . $class_name . '.php')) {
        require_once './controleur/' . $class_name . '.php';
        return true;
    }
    return false;
});
spl_autoload_register(function ($class_name) {
    if (file_exists('../modele/classes/' . $class_name . '.php')) {
        require_once './modele/classes/' . $class_name . '.php';
        return true;
    }
    return false;
});
spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/config/' . $class_name . '.php')) {
        require_once '../modele/config/' . $class_name . '.php';
        return true;
    }
    return false;
});
require_once('./controleur/ActionBuilder.php');
require_once('./controleur/RequirePRGAction.php');
$action = NULL;
$vue = NULL;
if (ISSET($_REQUEST["action"])) {
    $action = ActionBuilder::getAction($_REQUEST["action"]);
    $vue = $action->execute();
} else {
    $action = ActionBuilder::getAction("");
    $vue = $action->execute();
}

?>

