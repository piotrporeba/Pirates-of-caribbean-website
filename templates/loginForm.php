<?php
//--------------------------------
require_once __DIR__ . '/header.php';
//--------------------------------
?>

<form
    action="/index.php?action=processLogin"
    method="post"
    >

    <p id="login1">
        username:
        <input  type="text" name="username" autofocus>
    </p>

    <p id="login1">
        password:
        <input type="password" name="password">
    </p>

    <input type="submit" value="login">

</form>