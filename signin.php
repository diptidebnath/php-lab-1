<?php
include_once "inc/header.php";
?>
<div class="jumbotron bg-primary">
<div>
      <h3 class="bold contact-row text-white display-4">You need to Sign in first to book your ticket!</h3>
    </div>
</div>
<main class="main clearfix container">
  <div class="row">

  <?php if(isset($_SESSION["loggedin"])) { ?>
      <p class="py-5 my-5">You have already logged in! Here you can <a href="logout.php">Sign out</a></p>
      <?php
    }
      else{
      ?>

      <form class="mb-5 mt-4 mt-lg-0" name="myForm" action="/lab1/signin-check.php" method="POST">
        <div class="form-group">
        <div>
      <h3>Fill in the form below to sign in:</h3>
    </div>
          <label for="email">Enter your email</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required >
    
        </div>
        <div class="form-group">
          <label for="password">Enter your password</label>
          <input type="password" class="form-control" name="pass" id="password" aria-describedby="password" placeholder="Enter password" required>
    
        </div>

        <button type="sign-in" class="btn btn-primary submit-btn">Sign in</button>
      </form>

    <?php } ?>

    </div>



  </div>
</main>

<?php
include_once "inc/footer.php";
?>