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

    <main style="
    position: relative;
    top: 0;
    z-index: 0;
    ">
        <?php 
             include_once('includes/navbar.php');
        ?>
        <div class="background">
            <h1>Your journey</h1>
            <h1>Our job</h1>
            <br>
            <a href="book.php">

                <div class="book-button">
                Book flights
                </div>
            </a>
        </div>
        <div class="content">
            <h2>Fast and reliable</h2>
            <p>Helped houndreds of travelers across the globe.<p>
            <div class="comments">
                <?php

                $sql = 'SELECT * FROM reviews';
                foreach ($conn->query($sql) as $row) {
                echo('<div class="comment-block">');
                    echo '<div class="comment-text">' . $row['Review'] . '</div>'; 
                    echo('<div class="comment-info">');
                        echo '<div class="comment-name">' ."~". $row['ReviewID'] . '</div>';
                        echo '<div class="comment-date">' ."Traveled by ". $row['Username'] . '</div>';
                    echo('</div>');
                echo('</div>');
                }

                ?>
                <!-- <div class="comment-block">
                     <div class="comment-text">
                       <span>“I've travelled to the Amazon before but i've never gotten such good service  as with Tropical.<br> By far one of the best travel companies"</span>

                    </div>
                    <div class="comment-info">
                        <div class="comment-name"><span>~Luke Anderson</span></div>
                        <div class="comment-date"><span>traveled on: 20-12-2020</span></div>
                    </div>
                </div> -->
            </div>
            <div class="book-adventure-button-holder">
                <a href="book.php">
                    <div class="book-adventure">
                    Book your adventure 
                    </div>
                </a>
            </div>
        </div>
    </main>
<?php
include_once('includes/footer.php');
?>
</body>
</html>