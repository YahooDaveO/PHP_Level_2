<html>
<head>
<title>Multi-part Form Test</title>
</head>
<body>
<form action="longform3.php" method="POST">
Event: <input type='text' name="event" value="" /><br />
Date Needed: <input type='text' name="eventdate" value "" /><br />
<input type="hidden" name="username" value="<?php print $_POST['username']; ?>" />
<input type="hidden" name="password" value="<?php print $_POST['password']; ?>" />
<input type='submit' value='next' />
</form>
</body>
</html>
