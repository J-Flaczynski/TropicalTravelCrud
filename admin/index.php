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
    <?php include_once('../includes/adminNav.php');
?>
    </header>
    <div class="name-container">
      <h1>Welcome</h1>
    </div>
    <main class="home-navigation">
      <div class="home-navigation-container">
        <a href="flights.php"><div class="home-navigation-link">Flights</div></a>
        <a href="tickets.php"><div class="home-navigation-link">Tickets</div></a>
        <a href="gallery.php"><div class="home-navigation-link">Gallery</div></a>
        <a href="#"><div class="home-navigation-link">Sign out</div></a>
      </div>
    </main>
  </body>
</html>
