<?php

    //include config
    include("../../../../config/config.php");

    if($_SESSION['c_user']->privilege != 1) {
        header("Location: index.html");
    }
    
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    require_once "../../../../class/business/Projet.php";

    $projets_filtre = new Projet(null);

    define('fromajax',true);
    define('forprojet',true);

    //UserDAO.class.php requires
    require_once "../../../../class/business/Projet.php";
    require_once "../../../../lib/functions.php";
    require_once "../../../../class/dao/IProjetDAO.interface.php";

    //DAOFactroy.class.php requires
    require_once "../../../../class/technique/Singleton.class.php";

    require_once "../../../../class/dao/DAOFactory.class.php";

    
    if(isset($_GET['begin']) && is_numeric($_GET['begin']) && isset($_GET['limit']) && is_numeric($_GET['limit'])){
    $begin = $_GET['begin'];
    $limit = $_GET['limit'];
    $limit = " LIMIT $begin, $limit";
    }else {
        $limit = "";
    }
    
    $projets = DAOFactory::getDAOFactory()->getProjetDAO()->selectProjets($projets_filtre, $limit);
    header("Content-type: text/xml");
    echo "<?xml version='1.0' encoding='utf-8'?>\n";
    echo "<projets total=\"".count(DAOFactory::getDAOFactory()->getProjetDAO()->selectProjets($projets_filtre, ""))."\">\n";
    foreach ($projets as $projet){
        echo "<projet>\n";
            echo "<projet_id>".$projet["id_projet"]."</projet_id>";
            echo "<projet_nom>".$projet["nom_projet"]."</projet_nom>";
            echo "<projet_description>".$projet["description_projet"]."</projet_description>";
        echo "</projet>\n";
     }
     echo "</projets>\n";
?>
