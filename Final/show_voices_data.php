<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", 1); 
    include_once("./includes/db_config.php");
    include_once("./includes/Recording.php");

    //Create an empty array that will be filled with albums
    if(isset($_GET['genre']) && $_GET['genre'] != ''){
        $recordings = Recording::load($_GET['genre']);
    } else {
        $recordings = Recording::load();
    }

    //This loop iterates through the $albums array and prints out the data for each album
    for($i=0; $i<count($recordings); $i++){
        print_r("<p>");
        $recordings[$i]->getData();
        print_r('</p>');
    }
?>

