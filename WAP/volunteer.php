<?php
require_once "pdo.php";
if ( isset($_POST['name']) && isset($_POST['gender'])
     && isset($_POST['age']) && isset($_POST['phone']) 
     && isset($_POST['birth']) && isset($_POST['profession'])
	 && isset($_POST['email']) && isset($_POST['hours']))
	 {
    $sql = "INSERT INTO volunteer (name, gender, age, phone, birth, 
	                               profession, email, hours)
               VALUES (:name, :gender, :age, :phone, :birth, :profession, 
			   :email, :hours)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':name' => $_POST['name'],
        ':gender' => $_POST['gender'],
        ':age' => $_POST['age'],
		':phone' => $_POST['phone'],
		':birth' => $_POST['birth'],
		':profession' => $_POST['profession'],
		':email' => $_POST['email'],
		':hours' => $_POST['hours']));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/volunteer.css">
	<link rel="stylesheet" href="css/base.css">
	<title>Volunteer Application</title>
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
	<form action="" method="post">
		<fieldset class="c" >
			<legend>Volunteer Application</legend>
			<label>Name：<input type="text" class="txt" name="name" /></label>		
			<label>Gender：<input type="text"  name="gender" list="gender"/></label><br><br>
			<label>Age：<input type="text" class="text" name="age" /></label>	
			<label>Phone Number：<input type="tel" class="text" name="phone" /></label><br /><br />
			<datalist id="gender">
				<option>Male</option>
				<option>Female</option>	
			</datalist>
			<label>Birth Date：<input type="date" name="birth" /></label>
			<label>Profession：<input type="text" name="profession" /></label><br /><br />
			<label>Email Address：<input type="email" name="email" /></label><br /><br />
			<label>Available Volunteer Hours：<input type="text" name="hours"  /></label><br /><br />
			<input type="submit" class="btn" value="Submit" formaction="volunteer.php" />
			<input type="reset" class="btn" value="Reset" formaction="volunteer.php" />
		</fieldset>
	</form>
	<div class="footer">
		<div class="copyright w">
			<p>Hope Orphans Volunteer</p>
		</div>
	</div>
</body>
</html>