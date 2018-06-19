<?php
$pageTitle = 'Home Page';

$indexLinkStyle = 'current';

require_once __DIR__ . '/header.php';
?>
<script type="text/javascript" src="js/slideshow.js">
</script>

<h1> <em>Home Page</em> </h1>


<div id="section">

<h2><em>Pirates of the Caribbean</em></h2>
<p>
    Pirates of the Caribbean is a series of fantasy swashbuckler films produced by Jerry Bruckheimer and based on Walt
    Disney's theme park ride of the same name. Directors of the series include Gore Verbinski (1–3), Rob Marshall (4),
    and Joachim Rønning and Espen Sandberg (5). The series was most notably written by Ted Elliott and Terry Rossio (1–4);
    other writers include Stuart Beattie (1), Jay Wolpert (1), and Jeff Nathanson (5). The stories followed the adventures
    of Captain Jack Sparrow (Johnny Depp), Will Turner (Orlando Bloom), and Elizabeth Swann (Keira Knightley).
    Characters such as Hector Barbossa (Geoffrey Rush) and Joshamee Gibbs (Kevin McNally) follow Jack, Will, and Elizabeth
    in the course of the films. The fourth film featured Philip Swift (Sam Claflin) and Syrena (Àstrid Bergès-Frisbey),
    while the fifth film will feature Henry (Brenton Thwaites) and Carina Smyth (Kaya Scodelario). The films take place in
    a fictional historical setting; a world ruled largely by alternative versions of the British Empire, the East India
    Company and the Spanish Empire, with pirates representing freedom from the ruling powers.
</p>

<div> <img id="slideshow" src="images/pirates1.jpg" alt="slideshow"></div>
</div>

<div id="sideb">
<h2> <em>Movies so far:</em> </h2>
<p>
    "Pirates of the Caribbean: The Curse of the Black Pearl" <br>released in 2003 <br><br>
    "Pirates of the Caribbean: Dead Man's Chest" <br>released in 2006<br><br>
    "Pirates of the Caribbean: At World's End" <br>released in 2007<br><br>
    "Pirates of the Caribbean: On Stranger Tides" <br>released in 20011<br><br>
    "Pirates of the Caribbean: Dead Men Tell No Tales" <br> to be released in 2017 <br><br>


    <br>
</p>

</div>
//<script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(53.3868127,-6.377197099999989),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(53.3868127,-6.377197099999989)});infowindow = new google.maps.InfoWindow({content:'<strong>Powerhouse Gym</strong><br>Blanchardstown, Ireland<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

</div>

<?php require_once __DIR__."/footer.php" ?>