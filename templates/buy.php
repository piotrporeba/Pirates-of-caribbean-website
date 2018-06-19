
    <script type = "text/javascript">
        function query(){
            alert("Thank You for Purchasing our product");
        }
    </script>

    <?php


    require_once __DIR__ . '/header.php';
    ?>
<h1> <em>Buy an item</em> </h1>

<div id="section4">
    <form method="post">
        <img id="logo2" src="images/logo2.png" alt="logo2"><br><br>
        <img class ="shopitem" src="images/<?= $product['picture'] ?>">
        <p><?= $product['title'] ?>,  Price:  <?= $product['price'] ?> </p>

        <p> please enter your detaials below to buy product</p>
        <br>
        <fieldset>
            <legend> Your information</legend>
            <label class="contactfield">First name:</label>
            <input type= "text" size="20" maxlength="20" placeholder="enter first name" required><small>*</small>
            <br>
            <label class="contactfield">Last name:</label>
            <input type= "text" size="20" maxlength="20" placeholder="enter last name" required><small>*</small>
            <br>
            <label class="contactfield">Home address</label>
            <input type= "text" size="20" maxlength="100"  placeholder="enter adress" required><small>*</small>
            <br>
            <label class="contactfield">Email address:</label>
            <input type= "email" size="20" maxlength="20"  placeholder="enter email adress" required><small>*</small>
            <br>
            <label class="contactfield">Phone number:</label>
            <input type= "tel" size="20" maxlength="20" placeholder="enter phone number" title="use this format 0879999999">
            <br>
        </fieldset>
        <fieldset>
            <legend>Payment Method</legend>
            <div id="payment">
                <div class="top"><input type="radio" value="visa">
                    <img src="images/visa.png" class="paymentimage" alt="visa"></div>
                <div class="top"><input type="radio" value="mastercard" >
                    <img src="images/mastercard.png" class="paymentimage" alt="mastercard"></div>
                <div class="top"><input type="radio" value="paypal" >
                    <img src="images/paypal.png" class="paymentimage" alt="paypal"></div>

            </div>
        </fieldset>

        <br>
        <input type = "submit" value="Buy" class="button" onClick="query()" id="submitmember">
        <input type = "reset" value="reset">

    </form>
</div>
<?php require_once __DIR__."/footer.php" ?>