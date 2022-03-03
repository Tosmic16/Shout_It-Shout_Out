<?php 
include('shoutout.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shout it</title>
	<link rel="stylesheet" type="text/css" href="shoutit.css">
</head>
<body>

<div id="header">
	<head>Shout It!</head>
</div>

<div id="cont">
	<h1>Comments</h1>


	<div id="content">
		<?php

		$sq="SELECT username,comment,thyme FROM users";
		$result =mysqli_query($conn,$sq);
		if (mysqli_num_rows($result)>0){
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row["thyme"]." - <b>".$row["username"].":  </b>".$row["comment"]."<br>";
			}
		}
		else{
			echo "No comment available";
		}

		  ?>
	</div>


	<form method="post" action="shoutit.php">
	Username: <input type="text" name="username" style="border-radius: 3px; border: 1.6px solid chocolate;" autofocus>
	Comment: <input type="text" name="comment"  placeholder="  not more than 255 characters" style="width:75%; border-radius: 3px; border: 1.6px solid chocolate;">
	<button style="background:chocolate; border:1px solid white; border-radius: 15px; color:white; padding:2px; font-size: 17px; " name="shoutit" type="submit" >Submit</button>
	</form>
	

</div>

<div id="foot">
	<p>Shout Out!</p>
	<p> created by Tosin</p>
</div>

</body>
</html>