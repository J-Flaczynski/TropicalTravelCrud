<?php include_once('includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/admin.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
    <main class="booked-flights-container">
        <div class="login-form">
            <h1>Register</h1>
            <form action="php/register.php" method="POST">
            <input name="email" type="text" placeholder="Email"><br>
                <br>
                <br>
                <input name="username" type="text" placeholder="Username"><br>
                <br>
                <br>
                <input name="password" type="password" placeholder="password"><br>
                <br>
                <button type="submit">Register</button>
                <a href="login.php"><p1>Login</p1></a>
            </form>
        </div>
    </main>
    <script src="../js/script.js"></script> 
  </body>
</html>
