<?php 
    session_start();

    //if title is filled then save in Session if empty echo error
    if($_POST['title']){
        $_SESSION["title"] = $_POST['title'];
        $_SESSION["text"] = $_POST["text"];
        echo $_SESSION["title"];
        echo $_SESSION["test"];

    }
    
?>