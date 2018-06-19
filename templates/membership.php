
<script type = "text/javascript">
function passwordCheck()
{

    var pass  = document.getElementById("password").value;
    var pass2  = document.getElementById("password2").value;
    if(pass == pass2){
        alert("Thank You for submitting your Membership form.");
    }
    if(pass !== pass2){

        alert("entered passwords dont match, please reenter");
    }
}

</script>

<?php

$pageTitle = 'Membership';

$membershipLinkStyle = 'current';

require_once __DIR__ . '/header.php';
?>

<h1> <em>Membership</em> </h1>
<div id="section4">
<form method="post">
<img id="logo2" src="images/gymlogo2.jpg" alt="logo2">

<p>Please complete the following form:</p>

<fieldset>
<legend>Personal details</legend>
<div id="personalleft">
<label class="left">Name:</label><input type="text" size="20" name="Username" required autofocus  placeholder="enter username"><small>*</small>
<br>
<label class="left">Phone Number:</label> <input type="tel" size="20" id="tel" title="089 9999999" required placeholder="enter phone number"><small>*</small>
<br>
<label class="left">Date of birth:</label> <input type="text" required class="required" placeholder="enter date of birth" title="dd/mm/yyyy"><small>*</small>
<br>
<label class="left">Password:</label> <input type="password" id="password" required class="required" placeholder="enter password"><small>*</small>

</div>
<div id="personalright">
<label class="right">Address:</label><input class="label" type="text" size="20" name="address" required placeholder="enter address"><small>*</small>
<br>
<label class="right">Email:</label><input class="label" type="email" size="20" name="email" required placeholder="enter email"><small>*</small>
<br>
    <label class="right" >Gender :</label>
    <input type="radio" name="gender" value="male" checked="checked"/>
    <label>Male</label>
    <input type="radio" name="gender" value="female">
    <label>Female</label>
    <br>
<label class="right">Reenter Password:</label> <input type="password" id="password2" required class="required" placeholder="repeat password"><small>*</small>
<br>

</div>

</fieldset>
<fieldset>
<legend> Health/Physical Condition</legend>
<div id="continued"><select>
                                        <option value="plain">Unfit</option>
                                        <option value="plain">Fit</option>
                                        <option value="plain">Healthy</option>
                                        <option value="plain">Unwell</option>
                                        <option value="plain">Overweight</option>
                                        </select>
</div>
</fieldset>
<fieldset>
<legend>Membership</legend>
<label class="member">Cathegory</label> <input type="radio" name="cathegory" value="Student" checked="checked">
                         <label>Student</label>
                         <input type="radio" name="cathegory" value="Adult">
                         <label>Adult</label>
                         <input type="radio" name="cathegory" value="Senior">
                         <label>Senior</label>
                         <input type="radio" name="cathegory" value="Off-peak">
                         <label>Off-peak</label>
                         <br>
<label class="member">Term</label>   <input type="radio" checked="checked" value="3-month">
                      <label>3-month</label>
                      <input type="radio" name="cathegory" value="">
                      <label>6-month</label>
                      <input type="radio">
					  <label>9-month</label>
					  <input type="radio" name="cathegory" value="Adult">
                      <label>12-month</label>
</fieldset>
<fieldset>
<legend>Extra facilities</legend>
<div id="facleft">
                      <div class="top"><input type="checkbox" value="drysauna">
                      <label>Infrared Sauna</label></div>
                      <div class="top"><input type="checkbox" value="steamroom">
                      <label>Steam Room</label></div>
                      <div class="top"><input type="checkbox" value="Watermassage">
                      <label>Water Massage</label></div>

</div>
<div id="facright">

                      <div class="top"><input type="checkbox" value="Jacuzzi">
                      <label>Jacuzzi</label></div>
                      <div class="top"><input type="checkbox" value="relaxation">
                      <label>Relaxation Room</label></div>
                      <div class="top"><input type="checkbox" value="drysauna">
                      <label>Dry Sauna</label></div>

</div>
</fieldset>
<fieldset>
<legend>Excercise aims / Classes / Sports</legend>
<div id="aimsleft">
                      <div class="top"><input type="checkbox" value="health">
                      <label>Health</label><br></div>
                      <div class="top"><input type="checkbox" value="fitness">
                      <label>Fitness</label></div>
                      <div class="top"><input type="checkbox" value="weightloss">
                      <label>Weight loss</label></div>
</div>

<div id="aimsright">
                      <div class="top"><input type="checkbox" value="energy" class="aimsright">
                      <label>Energy</label></div>

                      <div class="top"><input type="checkbox" value="toning" class="aimsright">
                      <label>Toning</label></div>
                      <div class="top"><input type="checkbox" value="rehab" class="aimsright">
                      <label>Rehabilitation</label></div>
</div>
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
<fieldset>
<legend>Other Details</legend>
                       <textarea cols="50" rows="10" class="box" id="otherdetails"></textarea>
</fieldset>
<fieldset>
<legend>Submit a recent fotograph</legend>
<div id="upload">
                       <input type="File" name="upfile">
</div>
</fieldset>

<input type = "submit" onClick="passwordCheck()" value="Submit" id="submitmember">
<input type = "reset" value="reset">
</form>

</div>

<?php require_once __DIR__."/footer.php" ?>