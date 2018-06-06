<?php
    
    session_start();

    /* Erreurs */
    // Masquer les erreurs PHP : https://stackoverflow.com/a/32648423
    // error_reporting(E_ALL); ini_set('display_errors', 0);

    /* Infos de connexion */
    include("/modeles/conf.php");

    /* Classes */
    include_once("/librairies/class.recuperation.php");

    /* controleurs */
    include_once("controleurs/c_compte.php");
    include_once("controleurs/c_footer.php");

    //$_SESSION['listes'] = $stockDatas->saveInfosSession();

?>