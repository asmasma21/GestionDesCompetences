<?php

//include config
include("../../../../config/config.php");

if($_SESSION['c_user']->privilege != 1) {
    header("Location: index.html");
}

require_once "../../../../class/business/Projet.php";
<<<<<<< HEAD
=======
require_once "../../../../class/business/User.php";

>>>>>>> 8f59c7ad32652b89422144b74e3a390884e4c07c


/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['submit'])) {
    $projet = array();

    if(isset($_POST['nom_projet'])){
       $projet['nom_projet'] = $_POST['nom_projet'];
    }else{
        echo "nom_projet";
        die();
    }

    if(isset($_POST['description_projet'])){
       $projet['description_projet'] = $_POST['description_projet'];
    }else{
        echo "description_projet";
        die();
    }
<<<<<<< HEAD
    
    $projet = new Projet($projet);
=======
	
	if(isset($_POST['date_creation_projet'])){
       $projet['date_creation_projet'] = $_POST['date_creation_projet'];
    }else{
       echo "date_creation_projet";
	   //$projet['date_creation_projet'] = date("Y-m-d");
	   die();
	}
	   
	   //$projet['id_service'] = $user['id_service'];
       $projet = new Projet($projet);
>>>>>>> 8f59c7ad32652b89422144b74e3a390884e4c07c

    define('fromajax',true);
    define('forprojet',true);

<<<<<<< HEAD
    //ComeptenceDAO.class.php requires
=======
    //ProjetDAO.class.php requires
>>>>>>> 8f59c7ad32652b89422144b74e3a390884e4c07c
    require_once "../../../../class/business/Projet.php";
    require_once "../../../../lib/functions.php";
    require_once "../../../../class/dao/IProjetDAO.interface.php";

    //DAOFactroy.class.php requires
    require_once "../../../../class/technique/Singleton.class.php";

    require_once "../../../../class/dao/DAOFactory.class.php";

    $result = DAOFactory::getDAOFactory()->getProjetDAO()->insertProjet($projet);

    if($result){
        echo "1";
    }
    else{
        echo "0";
    }
}else{
    echo 'test';
    die();
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 8f59c7ad32652b89422144b74e3a390884e4c07c
