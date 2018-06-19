
    <script type = "text/javascript">
        function query(){
            alert("Thank you for submitting your query, you will receive reply shortly");
        }
    </script>

    <?php

    $pageTitle = 'Contact Us';

    $contactusLinkStyle = 'current';


    require_once __DIR__ . '/header.php';
    ?>
<h1> <em>Contact Us</em> </h1>

<div id="section4">
    <form method="post">
        <img id="logo2" src="images/logo2.png" alt="logo2">
        <p> if you have any querys please compleate the form below</p>
        <br>
        <fieldset>
            <legend> Your information</legend>
            <label class="contactfield">First name:</label>
            <input type= "text" size="20" maxlength="20" placeholder="enter first name" required><small>*</small>
            <br>
            <label class="contactfield">Last name:</label>
            <input type= "text" size="20" maxlength="20" placeholder="enter last name" required><small>*</small>
            <br>
            <label class="contactfield">Email address:</label>
            <input type= "email" size="20" maxlength="20"  placeholder="enter email adress" required><small>*</small>
            <br>
            <label class="contactfield">Phone number:</label>
            <input type= "tel" size="20" maxlength="20" placeholder="enter phone number" title="use this format 0879999999">
            <br>
        </fieldset>
        <fieldset>
            <legend>Your query</legend>
            <br>
            <textarea rows="10" cols="50" class="textarea">
</textarea>
            <br>
            <br>

        </fieldset>
        <br>
        <input type = "submit" value="Send" class="button" onClick="query()" id="submitmember">
        <input type = "reset" value="reset">

    </form>
</div>
<?php require_once __DIR__."/footer.php" ?>