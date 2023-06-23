<?php
  
include_once('../includes/connection.php');
   
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $admin = $row["Admin"];
    $Username = test_input($_POST["Username"]);
    $Password = test_input($_POST["Password"]);
    $stmt = $conn->prepare("SELECT * FROM users WHERE Username = :Username");
    $stmt->bindParam(':Username', $Username);
    $stmt->execute();
    $user = $stmt->fetch();
          
    if(($user['Username'] == $Username) && 
        ($user['Password'] == $Password) && $admin == 1) {
            session_start();
            $_SESSION["name"];

            header("Location: ../admin/index.php");
            exit();
    } else if(($user['Username'] == $Username) && 
    ($user['Password'] == $Password) && $admin == 0) {
        session_start();
        $_SESSION["name"] = 'user';

        header("Location: ../user/booked.php");
        exit();
}

    else {
        // header("Location: ../login.php");
        exit();
    }
}
  
?>