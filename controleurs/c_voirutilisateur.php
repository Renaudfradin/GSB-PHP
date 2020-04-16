<?php
include("vues/v_sommaire_admin.php");
$action = $_REQUEST['action'];
//var_dump($action);
switch ($action) {
    case 'voircompte':{
        $lesinfosvisi=$pdo->getInfosVisiteur1();
        include("vues/v_voirutilisateur.php");
        break;
    }
    case 'suprimmercompte':{
        $id = $_REQUEST['id'];
        var_dump($id);
        $exex = $pdo->deltevisiteur($id);
        var_dump($exex);
        break;
    }
}
//include("vues/v_voirutilisateur.php");

?>