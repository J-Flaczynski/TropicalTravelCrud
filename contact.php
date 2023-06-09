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
        <div class="background">
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
            <h2>Contact us</h2>

                    <form action="#" class="contact-form">
                        <div class="contact-form-row">
                            <input type="text" name="Name" placeholder="Name" />
                            <input type="text" name="Email" placeholder="Email" />
                        </div>
                    <input type="text" name="Subject" placeholder="Subject" />
                    <textarea name="" placeholder="Message" id="" cols="30" rows="10"></textarea>
                    <div class="contact-form-row">
                            <input type="text" name="Name" placeholder="Name" />
                            <input type="text" name="Email" placeholder="Email" />
                        </div>
                   </form>

                
        </div>
    </main>
<?php
include_once('includes/footer.php');
?>
</body>
</html>