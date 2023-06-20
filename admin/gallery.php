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
      <h1>Gallery</h1>
    </div>
    <div class="search-bar-wrapper">
      <button id="add-flight-modal-open" class="create-flight btn">
        Add photo
      </button>
    </div>

    <dialog id="add-flight-modal" style="height: 200px;">
      <div class="modal-top">
        <h1>Add a picture</h1>
      </div>
      <div class="modal-bottom-buttons">
      <form action="../php/addImage.php" method="POST">
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
$sql = 'SELECT * FROM gallery';
foreach ($conn->query($sql) as $row) {
  echo '<div class="booked-flight" style="background-position: center center; background-image: url(' ."../img/" .$row['Image'] . ')">';
  echo '<form action="../php/deleteImage.php" method="post">';
  echo '<input type="hidden" name="imageID" value="' . $row['imageID'] . '">';
  echo '<button type="submit" class="delete-flight btn">Delete</button>';
  echo '</form>';
  echo('</div>');
  echo('</div>');
}

?>



    </main>
    <script src="../js/script.js"></script> 
  </body>
</html>
