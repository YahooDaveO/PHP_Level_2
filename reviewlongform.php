<html>
<head>
<title>Multi-part Form Test</title>
</head>
<body>
<form action="reviewlongform.php" method="POST">
Contact Number: <input type='text' name="contactnumber" value="" /><br />
Comments: <input type='text' name="comments" value "" /><br />
<input type="hidden" name="username" value="<?php print $_POST['username']; ?>" />
<input type="hidden" name="password" value="<?php print $_POST['password']; ?>" />
<input type="hidden" name="event" value="<?php print $_POST['event']; ?>" />
<input type="hidden" name="eventdate" value="<?php print $_POST['eventdate']; ?>" />
<input type="hidden" name="contactnumber" value="<?php print $_POST['contact number']; ?>" />
<input type="hidden" name="comments" value="<?php print $_POST['comments']; ?>" />
<input type='submit' value='next' />
</form>
</body>
</html>
