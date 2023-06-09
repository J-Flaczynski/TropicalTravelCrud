<?php include_once('../includes/connection.php');
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
      <nav>
        <div class="logo">
          <img src="../img/DALL_E_2023-05-09_09.57 1.png" alt="tropical logo" />
        </div>
        <div class="links">
          <a href="#"><h1>Booked</h1></a>
          <a href="#"><h1>Flights</h1></a>
          <a href="#"><h1>Gallery</h1></a>
          <a href="#"><h1>Messages</h1></a>
          <a href="#"><h1>Sign out</h1></a>
        </div>
      </nav>
    </header>
    <div class="name-container">
      <h1>Manage flights</h1>
    </div>
    <div class="search-bar-wrapper">
      <button id="add-flight-modal-open" class="create-flight btn">
        Create flight
      </button>
    </div>

    <dialog id="add-flight-modal">
      <div class="modal-top">
        <h1>Flight creation</h1>
      </div>
      <div class="modal-middle">
        <div class="date-container">
          <form action="../php/addFlight.php" method="post">
          <label>Departure date</label><br />
          <input type="date" name="departureDate" /><br />
        </div>
        <div class="date-container">
          <label>Return date</label><br />
          <input type="date" name="returnDate" />
        </div>
      </div>
      <div class="modal-lower-middle">
        <div class="lower-modal-container">
          <label>Destination</label><br />
          <input type="text" name="flightName" />
        </div>
        <div class="lower-modal-container">
          <label>Price</label><br />
          <input type="text" name="price" />
        </div>
      </div>
      <div class="modal-bottom">
        <label>Description</label>
        <textarea name="description"></textarea>
      </div>
      <div class="modal-bottom-buttons">
        <div class="lower-bottom-container">
          <button type="submit" class="modal-submit btn">Submit</button>
          <input type="file" name="image" id="image" accept="image/*" />
          <label for="image" id="modal-img" class="modal-image btn"
            >Attach image</label
          >
        </div>
        </form>
      </div>
    </dialog>

    <main class="booked-flights-container">
    <?php
$sql = 'SELECT * FROM flights';

foreach ($conn->query($sql) as $row) {
  echo '<div class="booked-flight" style="background-position: center center; background-image: url(data:image/jpeg;base64,' . base64_encode($row['Image']) . ')">';
  echo('<div class="flights-flight-top">');
  echo '<div class="manage-flight-info">' . $row['Destination'] . '</div>';
  echo('</div>');
  echo('<button class="edit-flight btn">Edit</button>');
  echo('<button class="delete-flight btn">Delete</button>');
  echo('</div>');
  echo('</div>');
}

    ?>
    </main>
    <script src="../js/script.js"></script>
  </body>
</html>
