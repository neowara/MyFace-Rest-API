<?php 
    session_start();

    if(!empty($_POST['title']) && !empty($_POST["text"])) {

        if(!empty($_SESSION["posts"])){
            $posts = $_SESSION["posts"];
        } else {
            $post = array();
        };

        $id = count($posts) + 1;
        $posts[$id] = array(
            "id" => $id,
            "title" => $_POST["title"],
            "text" => $_POST["text"]
        );
        
        $_SESSION["posts"] = $posts;

        die("true");
    }
    
    die("false");
    
?>