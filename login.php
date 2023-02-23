<?php
include_once 'header.php';
?>

<section class="signup_form">
    <h2>Login In</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username or Email">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="submit">Log In</button>
    </form>
    <?php 
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p class='error'>Fill up all the fields</p>";
        }else if($_GET["error"] == "wronglogin"){
            echo "<p class='error'>Password is wrong!</p>";
        }
    }
?>
</section>

<?php
include_once 'footer.php';
?>