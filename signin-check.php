<?php

include_once "inc/header.php";

$email = $_POST['email'];
$pass = $_POST['pass'];

/* form validation */

if ($email==="diptibj@gmail.com" && $pass==="admin123"){
 
    $_SESSION["loggedin"] = "yes";
    echo "you have sucessfully signed in!";
    header("Location: http://localhost:8080/lab1/index.php#book-now");
    exit();
}
else{
    echo "your email & password is not match. Try again!";
}

?>
<?php
include_once "inc/footer.php";
?>