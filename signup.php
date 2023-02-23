<?php
include_once 'header.php';
?>

<section class="signup_form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="uid" placeholder="User name">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Repeat password">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p class='error'>Fill up all the fields</p>";
        } else if ($_GET["error"] == "invaliduid") {
            echo "<p class='error'>Choose a proper user name!</p>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<p class='error'>Choose a proper email!</p>";
        } else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p class='error'>Passwords don't match!</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p class='error'>Something went wrong!</p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p class='error'>This user name is already taken!</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p class='signed_up'>You are signed up!</p>";
        }
    }
    ?>
</section>



<?php
include_once 'footer.php';
?>