<?php
session_start();
include 'sqlconn.php';

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "select * from customer";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['email'] == $email && $row['password'] == $password) {
        $_SESSION["loggedIn"] = true;
        $_SESSION["email"] = $email;
        $_SESSION["id"] = $row['cust_id'];
        header("location:pickup.php");
        echo 'success';
        break;
    }else{
        $_SESSION["loggedIn"] = false;
        echo '<script>alert("Incorrect email Password"); 
        window.location = "index.html";
         </script>';
        
    
    }
}

?>
