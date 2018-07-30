<?php 
    session_start();


    if(empty($_GET["id"]) || empty($_SESSION["posts"][$_GET["id"]]))
        exit;

        $blogPost = $_SESSION["posts"][$_GET["id"]];

        echo json_encode($blogPost);


?>