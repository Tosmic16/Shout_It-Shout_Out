<?php 
$username="";
$comment="";

define('DB_NAME', 'shoutit');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
if (isset($_POST['shoutit'])){

	$username = ($_POST['username']);
	$comment = ($_POST['comment']);
if(empty($username) || empty($comment)){
	echo "<script>alert('fields cannot be empty');</script>";
}
else{
	$sql= "INSERT INTO users(username,comment)
					VALUES('$username','$comment')";
	mysqli_query($conn, $sql);

}
 }
