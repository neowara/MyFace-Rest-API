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
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="../CSS/style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>

<div id="logoutPage">
<p>Session Cleared!</p>
<button id="logoutButton"><a href="../index.html" id="logoutLink">Go Back</a></button>
</div>

</body>
</html>