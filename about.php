<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Tropical travels</title>
</head>
<body>
<?php 
include_once('includes/navbar.php');
?>
    <main>
        <div class="background-about">
            <h1>This is our mission</h1>
            <br>
            <div class="search-bar-wrapper">
      <div class="search-bar">
        <form action="#" method="get">
          <input type="text" name="Destination" placeholder="Destination" />
          <input type="number" name="Depart date" placeholder="Depart date" />
          <input type="number" name="Return date" placeholder="Return date" />
          <button type="submit">Search</button>
        </form>
      </div>
    </div>
        </div>
        <div class="content">
            <h2>About us</h2>
            <div class="about-us-text">
                <p>Hi there! We are Tropical, a travel agency focused on making tropical travel more affordable and accessible. We offer a range of unique travel experiences, from luxurious beach getaways to adventurous jungle treks, and our team of experienced professionals is dedicated to providing top-notch service.
<br><br>
At Tropical, we prioritize sustainable and responsible tourism practices to protect the environment and communities we visit. We believe it's our responsibility to make sure our travels have a positive impact. So, contact us to plan your dream tropical vacation and let our team help make it a reality.</p>
            </div>

        </div>
    </main>
<?php
include_once('includes/footer.php');
?>
</body>
</html>