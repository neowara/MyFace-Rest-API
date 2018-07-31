<?php

session_start();
session_unset();
session_destroy();


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link rel="icon" href="http://mariadesiree.se/christiantoledo/MyFace_API/favicon.ico">
    <title>MyFace</title>
</head>
<body>
<div id="header">
        <h1 class="mainheader">MyFace</h1>
        <div><img  src="../images/myface.png"></a></div>
        </div>

<div id="logoutPage">
<p>Session Cleared!</p>
<a href="../index.html" id="logoutLink"><button id="logoutButton">Go Back</button></a>
</div>

</body>
</html>