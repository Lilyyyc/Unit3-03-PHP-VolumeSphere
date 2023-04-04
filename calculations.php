<?php
  //Get the user input
  $radius = floatval($_POST["radius"]);

  //Calculate the volume
   $volume = $radius ** 3 * pi() * (4/3);
  $volumeRounded = round($volume, 2);
?>

<h3>Results:</h3>
The volume of the sphere is <?php echo "$volumeRounded" ?> cm.