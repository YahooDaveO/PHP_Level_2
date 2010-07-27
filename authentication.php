<?php
    session_start();
if ($_POST['username'] == "guest"){
    $_SESSION['username'] = "guest";
        print "Your username is correct";
        header("Location: index.php");
    }else{
        header("Location: login.php");
        } 
?>

