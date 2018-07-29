<?php 
    session_start();

    //if title is filled then save in Session if empty echo error
    if($_POST['title']){
        $_SESSION["title"] = $_POST['title'];
        echo $_SESSION["title"];

    }
    
?>