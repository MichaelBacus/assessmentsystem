
<!DOCTYPE html>
<html lang="en">
<head>
	</head>
	<?php include('header.php') ?>
	<?php include('auth.php') ?>
	<?php include('db_connect.php') ?>
	<?php 
	$quiz = $conn->query("SELECT * FROM quiz_list where id =".$_GET['id'])->fetch_array();
	$hist = $conn->query("SELECT * FROM history where quiz_id =".$_GET['id']." and user_id = ".$_SESSION['login_id'])->fetch_array();
	?>
	<title><?php echo $quiz['title'] ?> | Answer Sheet</title>
</head>
<body>
	 <h1>GOODLUCK<h1>
</body>
</html>