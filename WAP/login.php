<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/volunteer.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/login.css">
	<title>Login</title>
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
	<div class='login'>
        <div class='title'>Login</div>
        <div class='biao'>
            <form method='post'>
                <label>Administrator：</label><input type="text" name='administrator'><br><br>
                <label>Password：</label><input type="password" name='password'><br>
                <input class="btn" type="submit" name="submit" value="Submit" formaction="users.php" />
            </form>
        </div>
    </div>
    <div style="background-color: white; height: 780px;"></div>
    <div class="footer">
		<div class="copyright w">
			<p>Hope Orphans Volunteer</p>
		</div>
	</div>
</body>
</html>