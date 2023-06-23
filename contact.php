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
            <h1>Contact us</h1>
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
                    <form action="php/contact.php" method="POST" class="contact-form">
                        <div class="contact-form-row">
                            <input type="text" name="Name" placeholder="Name" class="contact-form-input"/>
                            <input type="text" name="Email" placeholder="Email" class="contact-form-input" />
                        </div>
                        <div class="contact-form-subject">                            
                            <input type="text" name="Subject" placeholder="Subject" class="contact-form-input" />
                        </div>
                            <textarea name="Message" placeholder="Message" id="" cols="30" rows="10"></textarea>
                        <div class="contact-form-subject">
                            <input type="submit" value="Submit" class="submit-button"/>
                        </div>
                   </form>
        </div>
    </main>
<?php
include_once('includes/footer.php');
?>
</body>
</html>