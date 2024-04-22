<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/base.css">
    <title>Change Date</title>
    <style >
        .llp {
        width: 40%;
        height: 400px;
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
        <h5>---------- CHANGE DATE----------</h5>
    </div>
    <div class="llp c">
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
        <form method="post">  

           <label>Name: </label><input type="text" name="name" value="<?php echo $row['name']?>"><br/>
      
           <label>Gender: </label><input type="text" name="gender" value="<?php echo $row['gender']?>"><br/>
      
           <label>Age: </label><input type="text" name="age" value="<?php echo $row['age']?>"><br/>
      
           <label>Birth: </label><input type="date" name="birth" value="<?php echo $row['birth']?>"><br/>

           <label>Profession: </label><input type="text" name="profession" value="<?php echo $row['profession']?>"><br/>
      
           <label>Email: </label><input type="text" name="email" value="<?php echo $row['email']?>"><br/>

           <label>Hours: </label><input type="text" name="hours" value="<?php echo $row['hours']?>"><br/>
      
           <br><input type="submit" class="btn" value="Submit" name="Submit">  
           <input type="submit" class="btn" value="Return" name="Return" formaction="login.php">
  
        </form>  
    </div>
    <div class="footer">
        <div class="copyright w">
            <p>Hope Orphans Volunteer</p>
        </div>
    </div>
</body>
</html>
