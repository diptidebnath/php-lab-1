<?php
// Startar upp sessionen
session_start();

// Nollställer sessionsvariabeln
unset($_SESSION['loggedin']);

// Återställer hela sessionen och tömmer innehållet i alla sessionsvariabler
session_destroy();
header("Location: http://localhost:8080/lab1/signin.php");
?>