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
        <div class="background-gallery">
            <h1>Beautiful journeys at your fingertips</h1>
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
    
      <div class="booked-flight">
        <div class="booked-flight-top">
          <div class="booked-flight-info">User ID</div>
          <div class="booked-flight-info">Flight ID</div>
        </div>
        <div class="booked-flight-bottom">
          <button class="cancel-flight btn">Cancel</button>
        </div>
      </div>


</div>
        </div>
    </main>
<?php
include_once('includes/footer.php');
?>
</body>
</html>