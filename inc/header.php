<?php //session starts
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Buy your movie tickets here</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="asset/css/style.css">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
      <a class="navbar-brand" href="index.html">BD Movies.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="/lab1/index.php">Home<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <?php if(isset($_SESSION["loggedin"])) { ?>
              <a class="nav-link" href="/lab1/sign-out.php">Sign Out</a>
            <?php
            } else { ?>
              <a class="nav-link" href="/lab1/signin.php">Sign In</a>
            <?php } ?>
          </li>

        </ul>

      </div>
    </nav>
  </header>