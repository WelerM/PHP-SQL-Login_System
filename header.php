<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <header>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="discover.php">ABOUT US</a></li>
            <li><a href="blog.php">FIND BLOGS</a></li>
            <?php 
                if(isset($_SESSION["useruid"])){
                 echo " <li><a href='profile.php'>PROFILE PAGE</a></li>";
                 echo "<li><a href='includes/logout.inc.php'>LOG OUT</a></li>";        
                }else{
                    echo " <li><a href='signup.php'>SING UP</a></li>";
                    echo "<li><a href='login.php'>LOG IN</a></li>";  
                }
            ?>
        </ul>
    </header>