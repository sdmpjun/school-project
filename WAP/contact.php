<?php
require_once "pdo.php";
if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['question']) 
     && isset($_POST['message']))
	 {
    $sql = "INSERT INTO contact (name, email, question, message)
               VALUES (:name, :email, :question, :message)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':question' => $_POST['question'],
		':message' => $_POST['message']));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/base.css">
	<title>Contact Us</title>
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
	<div class="title">
			<h5>---------- CONTACT US----------</h5>
	</div>
	<div class="con c">
		<div class="table ">
			<form method="post">
				<p>CONTACT WITH US</p>
				<label>Name:<input type="text" placeholder="Name" required name="name" /></label><br>
				<label>E-mail Address:<input type="text" placeholder="E-mail Address" required name="email" /></label><br>
				<label>Question:<input type="text" placeholder="Question" required name="question" /></label><br>
				<label class="content">Message:<textarea name="message" style="width: 462px; height: 121px;"></textarea></label>
				<input type="submit" class="submit" value="Submit" />
			</form>
		</div>
	</div>
	<div class="footer">
		<div class="copyright w">
			<p>Hope Orphans Volunteer</p>
		</div>
	</div>
</body>
</html>