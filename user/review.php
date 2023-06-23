<?php include_once('../includes/connection.php');
?>
<?php
    session_start();

    if(!isset($_SESSION["name"])){
        header("Location: ../login.php");
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/admin.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
<?php include_once('../includes/userNav.php');
?>
    </header>
    <div class="name-container">
      <h1>Post a review</h1>
    </div>  
    <main class="booked-flights-container">
        <div class="login-form" style="margin-top: 5%;">
            <h1>Review</h1>
            <form action="../php/addReview.php" method="POST">
                <input name="username" type="text" placeholder="Username"><br>
                <br>
                <br>
                
                <textarea name="review" placeholder="Your review..." style="height:150px; width: 220px; "></textarea>
                <br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </main>
    <script src="../js/script.js"></script> 
  </body>
</html>
