<?php
require_once "pdo.php";
if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) 
     && isset($_POST['type']))
	 {
    $sql = "INSERT INTO donation (name, email, phone, type)
               VALUES (:name, :email, :phone, :type)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':phone' => $_POST['phone'],
		':type' => $_POST['type']));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/love.css">
	<link rel="stylesheet" href="css/base.css">
	<title>Donation</title>
</head>
<body>
	<div class="header">
		<div class="w">
			<ul >								
				<li><a href="login.php">Login</a></li>
				<li><a href="contact.php" >Contact Us</a></li>			
				<li><a href="volunteer.php" >Volunteer</a></li>	
				<li><a href="donation.php" >Donation</a></li>		
				<li><a href="activity.html" >Activity</a></li>
				<li><a href="about.html" >About Us</a></li>	
				<li><a href="index.html">Home</a></li>			
			</ul>
		</div>	
	</div>	
	<div class="fla c">
		<img src="images/banner3.jpg">
	</div>
	<div class="null c"></div>
	<div class="intro w">
		<div class="title">
			<h5>----------Love donation----------</h5>
		</div>
		<div class="table w">
		<div class="a">
		<p>If you give me a period of glitz, I will allow you to flourish in the world.</p>
  			<p>Leave your information and let us keep in touch with you:</p>
  			<form method="post">
				<label>Name：<input type="text" name="name"  /></label>
				<label>Email：<input type="email" name="email" /></label><br>
				<label>Phone Number：<input type="tel"  name="phone" /></label>
				<label>Type：<input type="tel"  name="type" /></label><br>
				<input class="btn" type="submit" name="submit" value="Submit" />
				<input class="btn" type="reset" value="Reset" />
			</form>
		</div>
		</div>
	</div>
	<div class="footer">
		<div class="copyright w">
			<p>Hope Orphans Volunteer</p>
		</div>
	</div>
</body>
</html>