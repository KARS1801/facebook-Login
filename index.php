<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p><?php echo $_SESSION['userdata']['id'] ?></p>
<br>
<p><?php echo $_SESSION['userdata']['name'] ?></p>
<br>
<p><?php echo $_SESSION['userdata']['email'] ?></p>
<br>
<img src="<?php echo $_SESSION['userdata']['picture']['url'] ?>">
<br>
</body>
</html>