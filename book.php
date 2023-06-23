<?php 
include_once('./includes/connection.php');
?>
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
        <div class="background-book">
            <h1>Where do you want to go?</h1>
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

        <div class="booked-flights-container">
            <div class="book-container">
                <?php

$sql = 'SELECT flights.*, users.* FROM flights INNER JOIN users';
                    foreach ($conn->query($sql) as $row) {
                    echo '<div class="booked-flight" style="background-position: center center; background-image: url(' ."img/" .$row['Image'] . ')">';
                    echo('<div class="flights-flight-top">');
                    echo '<div class="manage-flight-info">' . $row['Price'] . '</div>';
                    echo '<div class="manage-flight-info">' . $row['Destination'] . '</div>';
                    echo('</div>');
                    echo '<form action="php/bookFlight.php" method="post">';
                    echo '<input type="hidden" name="flightID" value="' . $row['FlightID'] . '">';
                    echo '<input type="hidden" name="userID" value="' . $row['UserID'] . '">';
                    echo '<input type="hidden" name="username" value="' . $row['Username'] . '">';
                    echo '<button type="submit" class="more-info-btn">Book flight</button>';
                    echo '</form>';
                    echo('</div>');
                    }
        
                ?>

            </div>



        </div>
    </div>
</main>
    
<?php
include_once('includes/footer.php');
?>
</body>
</html>