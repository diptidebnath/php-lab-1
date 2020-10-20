<?php
if (empty($name)) {
    $name = "";
}
if (empty($email)) {
    $email = "";
}
if (empty($age)) {
    $age = "";
}
if (empty($movie)) {
    $movie = "";
}
if (empty($ticket)) {
    $ticket = "";
}
if (isset($_SESSION["loggedin"])) { ?>

    <form class="order-form" action="/lab1/action_page.php" method="POST">
        <div class="name formgroup">
            <label for="name">Enter your name</label><br>
            <input type="text" id="name" value="<?php echo $name ?>" placeholder="e.g john doe" name="name" min="3" max="20" required>
        </div>
        <div class="email formgroup">
            <label for="email">Enter your email</label><br>
            <input type="email" id="email" value="<?php echo $email ?>" placeholder="e.g example@domainname.com" name="email" required>
        </div>
        <div class="age formgroup">
            <label for="age">Enter your age</label><br>
            <input type="number" id="age" name="age" value="<?php echo $age ?>" placeholder="e.g 13" min="1" max="100" required>
        </div>
        <div class="formgroup radioformgroup">
            <p>Have any gurdian with you?</p>
            <input type="radio" id="gurdian_yes" name="gurdian" value="yes" checked>
            <label for="gurdian_yes"> Yes</label>
            <input type="radio" id="gurdian_no" name="gurdian" value="no">
            <label for="gurdian_no"> No</label>
        </div>

        <div class="formgroup">
            <p>Select your movie</p>

            <select name="movie" required>
                <optgroup class="limit7" label="Age limit 7+">
                    <option value="Kung_Fu_Panda" <?php if ($movie == "Kung_Fu_Panda") {
                                                        echo "selected";
                                                    } ?>>Kung Fu Panda</option>
                    <option value="Paddington" <?php if ($movie == "Paddington") {
                                                    echo "selected";
                                                } ?>>Paddington</option>
                    <option value="Puss_in_Boots" <?php if ($movie == "Puss_in_Boots") {
                                                        echo "selected";
                                                    } ?>>Puss in Boots</option>
                    <option value="Benji" <?php if ($movie == "Benji") {
                                                echo "selected";
                                            } ?>>Benji</option>
                    <option value="Madagascar" <?php if ($movie == "Madagascar") {
                                                    echo "selected";
                                                } ?>>Madagascar</option>
                    <option value="Two_Brothers" <?php if ($movie == "Two_Brothers") {
                                                        echo "selected";
                                                    } ?>>Two Brothers</option>
                    <option value="Karate_kid" <?php if ($movie == "Karate_kid") {
                                                    echo "selected";
                                                } ?>>Karate kid</option>
                    <option value="Dancing_with_the_Birds" <?php if ($movie == "Dancing_with_the_Birds") {
                                                                echo "selected";
                                                            } ?>>Dancing with the Birds</option>

                </optgroup>
                <optgroup class="limit13" label="Age limit 13+">
                    <option value="City_of_God" <?php if ($movie == "City_of_God") {
                                                    echo "selected";
                                                } ?>>City of God</option>
                    <option value="The_Prestige" <?php if ($movie == "The_Prestige") {
                                                        echo "selected";
                                                    } ?>>The Prestige</option>
                    <option value="Avatar" <?php if ($movie == "Avatar") {
                                                echo "selected";
                                            } ?>>Avatar</option>
                    <option value="The_Half_of_It" <?php if ($movie == "The_Half_of_It") {
                                                        echo "selected";
                                                    } ?>>The Half of It</option>
                    <option value="Candy_Jar" <?php if ($movie == "Candy_Jar") {
                                                    echo "selected";
                                                } ?>>Candy Jar</option>
                    <option value="Dunkirk" <?php if ($movie == "Dunkirk") {
                                                echo "selected";
                                            } ?>>Dunkirk</option>
                    <option value="The_Kissing_Booth" <?php if ($movie == "The_Kissing_Booth") {
                                                            echo "selected";
                                                        } ?>>The Kissing Booth</option>
                    <option value="The_Social_Network" <?php if ($movie == "The_Social_Network") {
                                                            echo "selected";
                                                        } ?>>The Social Network</option>
                </optgroup>
                <optgroup class="limit15" label="Age limit 15+">
                    <option value="365_days" <?php if ($movie == "365_days") {
                                                    echo "selected";
                                                } ?>>365 days</option>
                    <option value="Parasite" <?php if ($movie == "Parasite") {
                                                    echo "selected";
                                                } ?>>Parasite</option>
                    <option value="1917" <?php if ($movie == "1917") {
                                                echo "selected";
                                            } ?>>1917</option>
                    <option value="Midsommar" <?php if ($movie == "Midsommar") {
                                                    echo "selected";
                                                } ?>>Midsommar</option>
                    <option value="Marriage_Story" <?php if ($movie == "Marriage_Story") {
                                                        echo "selected";
                                                    } ?>>Marriage Story</option>
                    <option value="Waves" <?php if ($movie == "Waves") {
                                                echo "selected";
                                            } ?>>Waves</option>
                    <option value="Birds_of_Passage" <?php if ($movie == "Birds_of_Passage") {
                                                            echo "selected";
                                                        } ?>>Birds of Passage</option>
                    <option value="For_Sama" <?php if ($movie == "For_Sama") {
                                                    echo "selected";
                                                } ?>>For Sama</option>
                    <option value="Fifty_Shades_of_Grey" <?php if ($movie == "Fifty_Shades_of_Grey") {
                                                                echo "selected";
                                                            } ?>>Fifty Shades of Grey</option>
                </optgroup>
            </select>
        </div>


        <div class="ticket formgroup">
            <label for="ticket">Select how meny ticket you want to buy</label><br>
            <input type="number" id="ticket" name="ticket" value="<?php echo $ticket ?>" placeholder="e.g 2" min="1" max="10" required>
        </div>

        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
    </form>
<?php
} else {
?>
   <p class="text-center"> You need to Sign in first to book your ticket! Sign in below <a class="nav-link" href="/lab1/signin.php">Sign In</a></p>
<?php
}
?>