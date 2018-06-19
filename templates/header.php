<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "utf-8">
    <title><?= $pageTitle ?> </title>
    <style>@import "/css/gym.css"</style>
    <style>@import "/css/nav.css"</style>
</head>
<body>

<header id="header">
    <img class="moving" src="images/header3.png"></a>
    <div id="login">
        <?php
        //-- login / logout ---
        require_once __DIR__ . '/_login_details.php';
        ?>
    </div>

</header>

<?php require_once __DIR__. "/nav.php" ?>
<p> .</p>