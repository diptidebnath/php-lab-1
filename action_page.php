<?php
include_once "inc/header.php";


$movieList_age7 = ['Kung_Fu_Panda', 'Paddington', 'Puss_in_Boots', 'Benji', 'Madagascar', 'Two_Brothers', 'Karate_kid', 'Dancing_with_the_Birds']; // movie list array based on age limit
$movie_age13 = ['City_of_God', 'The_Prestige', 'Avatar', 'The_Half_of_It', 'Candy_Jar', 'Dunkirk', 'The_Kissing_Booth', 'The_Social_Network'];
$movie_age15 = ['365_days', 'Parasite', '1917', 'Midsommar', 'Marriage Story', 'Waves', 'Birds of Passage', 'For Sama', 'Fifty Shades of Grey'];
$movieList_age13 = array_merge($movieList_age7, $movie_age13); // combine movile list with previous age limit
$movieList_age15 = array_merge($movieList_age13, $movie_age15); // combine movile list with previous age limit

/* check the movie name with the age limit to complete the order */
function checkAgeLimit($moveieName, $age)
{
    global $movieList_age7, $movieList_age13, $movieList_age15;

    if ($age == 7) {
        $order = in_array($moveieName, $movieList_age7);
    } else if ($age == 13) {
        $order = in_array($moveieName, $movieList_age13);
    } else if ($age == 15) {
        $order = in_array($moveieName, $movieList_age15);
    } else {
        $order = FALSE;
    }

    return $order;

}


$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$movie = $_POST['movie'];
$ticket = $_POST['ticket'];
$gurdian = $_POST['gurdian'];

$error = FALSE;
$errorText = "";
/* form validation */
if(empty($name)) {
    $errorText = "You have not filled the name field. Go back and fill the name and submit again.";
$error = TRUE;
}
if(empty($email)) {
    $errorText = "You have not filled the email field. Go back and fill the email and submit again.";
$error = TRUE;
}
if(empty($age)) {
    $errorText = "You have not filled the age field. Go back and fill the age and submit again.";
    $error = TRUE;
}
if(empty($movie)) {
    $errorText = "You have not filled the movie field. Go back and fill the movie and submit again.";
    $error = TRUE;
}
if(empty($ticket)) {
    $errorText = "You have not filled the ticket field. Go back and fill the ticket and submit again.";
    $error = TRUE;
}



$order = false;
if($error===FALSE):   /* execute if there is no error */

if ($age < 13) { /*  check the age and call the function */
    if ($gurdian == "yes") {
        $order = checkAgeLimit($movie, 13);
    } else {
        $order = checkAgeLimit($movie, 7);
    }
} else if ($age > 13 && $age <= 15) {
    if ($gurdian == "yes") {
        $order = checkAgeLimit($movie, 15);
    } else {
        $order = checkAgeLimit($movie, 13);
    }
} else {
    $order = checkAgeLimit($movie, 15);
}


$total_price = 125*$ticket;

if($order === FALSE){
    $errorText = "Sorry! You have selected the movies that beyound your age limit. Either you need to come with your
    gurdian or select the movies within your age limit.";
    $error = TRUE;
}




endif;  /* error check if end */

?>
<section class="wrapper py-5">
      <div class="container">
      <?php
    if($error===FALSE){
      ?>
    <h3>Your Ticket has confirmed!</h3>
        <p>Your ticket details:</p>
        Name : <?php echo $name; ?><br>
        Number of Ticket:   <?php echo $ticket; ?><br>
        Total Price : <?php echo $total_price; ?> SEK <br>
        Movie name: <?php echo $movie; ?><br>
        order number: <?php echo rand(); ?><br>
        <p class= "font-weight-bold">An invoice has sent to your email. Please check your email and pay the invoice within next 12 hours, otherwise the ticket will be canceled!</p>

        <?php }
        else{
            echo '<p class="alert alert-danger">'.$errorText.'<p>';
           
            include_once "inc/form.php";
        }
        
        ?>
      </div>
</section>

<?php
include_once "inc/footer.php";
?>