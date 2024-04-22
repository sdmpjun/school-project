<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/base.css">
    <title>Delete</title>
    <style >
        .llp {
        width: 40%;
        height: 300px;
        background-color: #efc2c2;
        }
        .btn{
        margin-top:15px;
        background: #eee;
        border:none; 
        padding: 5px 20px;
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
    <div class="fla c">
        <img src="images/banner3.jpg">
    </div>
    <div class="null c"></div>
    <div class="title">
            <h5>---------- DELETE DATE----------</h5>
    </div>
    <div class="llp c">
        <form method="post">
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
        if ( isset($_POST['name']) ) {
            $sql="DELETE FROM volunteer WHERE name = :zip";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':zip'=>$_POST['name']));
        }
        ?>
        <p>name to Delete:<input type="text" name="name"></p>
        <p><input type="submit" value="Delete"/></p>
        <input type="submit" class="btn" value="Update" formaction="change.php"/>
        </form>
    </div>
    <div class="footer">
        <div class="copyright w">
            <p>Hope Orphans Volunteer</p>
        </div>
    </div>
</body>
</html>