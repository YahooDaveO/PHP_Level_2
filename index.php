<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    }
?>
<html>
<head>
</head>    
<body>
<br />
<br />   
Welcome to this login INDEX page.  To logout, simply click <a href=logout.php>logout</href>.
<p>

</body>
</html>


