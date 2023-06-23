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
      <h1>Tickets</h1>
    </div>
    </div>
    <main class="booked-flights-container">
    <dialog id="edit-flight-modal" style="display: block; margin-top:5%;">
    <?php
    $sql = 'SELECT * FROM tickets';
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($rows as $row) {
      echo '<div class="ticket-outline" style="outline: 2px solid black; margin-top: 15%;">';
        echo '<div class="modal-top">';
        echo '</div>';
        echo '<div class="modal-middle">';
        echo '<div class="date-container">';
        echo '<form action="../php/deleteTicket.php" method="post">';
        echo '<label>Name</label><br />';
        echo '<input type="text" name="departureDate" value="' . $row['Name'] . '" /><br />';
        echo '</div>';
        echo '<div class="date-container">';
        echo '<label>E-mail</label><br />';
        echo '<input type="text" name="returnDate" value="' . $row['Email'] . '" />';
        echo '</div>';
        echo '</div>';
        echo '<div class="modal-lower-middle">';
        echo '<div class="lower-modal-container">';
        echo '<label style="margin-left: 54%;">Subject</label><br />';
        echo '<input type="text" style="width: 500px; margin-left: 10%;""name="flightName" value="' . $row['Subject'] . '" />';
        echo '</div>';
        echo '<div class="lower-modal-container">';
        echo '</div>';
        echo '</div>';
        echo '<div class="modal-bottom">';
        echo '<label>Message</label>';
        echo '<textarea name="description">' . $row['Message'] . '</textarea>';
        echo '</div>';
        echo '<div class="modal-bottom-buttons">';
        echo '<div class="lower-bottom-container">';
        echo '<input type="hidden" name="ticketID" value="' . $row['ticketID'] . '">';
        echo '<button type="submit" class="modal-submit btn">Resolved</button>';
        echo '</div>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</dialog>

    </main>
    <script src="../js/script.js"></script> 
  </body>
</html>
