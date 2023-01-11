<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";


// $servername = "localhost";
// $username = "root";
// $password = "";

// Create connection
$con = mysqli_connect($server, $username, $password);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['desc'];
$desc=$_POST['phone'];
$sql="INSERT INTO `traveltrip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', 
'$email', '$phone', '$desc', current_timestamp());";
//echo $sql;
if($con->query($sql)==true){
   $insert = true;
}
else{
    echo "Error: $sql <br> $con->error";}
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Travellers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="Bgimage" src="bg.jpeg" alt="Trip Image">
    <div class="Container">
        <h2>Welcome to Trip Travellers</h2>
        <p>Enter your details and submit the form for participation :</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
           <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="gender" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
        </form>
    
    </div>
    <script src="index.js"></script>
    
        
</body>
</html>
