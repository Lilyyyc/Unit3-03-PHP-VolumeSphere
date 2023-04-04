<DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Meta data-->
    <meta charset="utf-8">
    <meta name="description" content="Volume Sphere Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">

    <!--Stylesheet-->
    <link rel="stylesheet" href="./css/style.css">

    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-cyan.min.css">

    <!--Title-->
    <title>Calculating the Volume of a Sphere in PHP</title>
  </head>
  <body>
    <h1>Calculating the Volume of a Sphere in PHP with User Input</h1>

    <!--Text-->
    <p>Welcome! This webpage will calculate the volume of a sphere with the input of your data using php. In the image below you can see the formual for the volume of a sphere, which is how it will be calculated.</p>
    <h3>Please insert your input below:</h3>

    <!--Image-->
    <center>
    <img src="./images/sphereVolume.jpg" width="300" length="300">
    </center>
    <br>

    <!--Form for user input-->
      <center>
      <form action="./calculations.php" method="post" target="display-result">
        <label for="radius">Radius length (cm):</label>
        <input type="float" name="radius" placeholder="Radius">
        <br>
        <br>
        <input type="submit" value="Calculate" button class="mdl-button mdl-js-button-mdl-button-raised-mdl-button-colored">
      </form>
      </center>

    <!--Iframe to display results-->
    <iframe id="display-result" name="display-result"></iframe>
  </body>
</html>