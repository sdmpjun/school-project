<?php
$cookie_name = "user";
$cookie_value = "administrator";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
echo "<script>alert('You are successfully logged in');</script>";
?>
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/base.css">
    <title>Users</title>
    <style >
        .llp {
        width: 40%;
        height: 200px;
        background-color: #fafafa;
        }
        .btn{
        margin-top:20px;
        background: #eee;
        border:none; 
        padding: 10px 60px;
        margin-right: 25px;
        }
    </style>
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
    <?php
if(count($_COOKIE) > 0) {
  echo "<script>alert('Cookies are enabled.');</script>";
} else {
  echo "<script>alert('Cookies are disabled.');</script>";
}
?> 
    <div class="fla c">
        <img src="images/banner3.jpg">
    </div>
    <div class="null c"></div>
    <div class="title">
            <h5>---------- USERS DETAIL----------</h5>
    </div>
    <div class="llp c">
        <form method="post">
            <br>Hello, Administrator.<br>
        <?php
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=wap',
            'root', '');
        $stmt = $pdo->query("SELECT name, gender, age, phone, birth, profession, email, hours FROM volunteer");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo '<table border="1">'."\n";
        foreach ( $rows as $row ) {
             echo "<tr><td>";
             echo($row['name']);
             echo("</td><td>");
             echo($row['gender']);
             echo("</td><td>");
             echo($row['age']);
             echo("</td><td>");
             echo($row['phone']);
             echo("</td><td>");
             echo($row['birth']);
             echo("</td><td>");
             echo($row['profession']);
             echo("</td><td>");
             echo($row['email']);
             echo("</td><td>");
             echo($row['hours']);
             echo("</td></tr>\n");
        }
        echo "</table>\n";
        ?>
        <br><input type="submit" class="btn" value="Update" formaction="change.php"/>
        <input type="submit" class="btn" value="Delete" formaction="delete.php"/>
        <input type="submit" class="btn" value="Logout" formaction="logout.php"/>
        </form>
    </div>
    <div class="footer">
        <div class="copyright w">
            <p>Hope Orphans Volunteer</p>
        </div>
    </div>
</body>
</html>