<?php
$insert = false;
if(isset($_POST['name'])){

    $server="localhost";
    $username="root";
    $password="";

    $con = mysqli_connect($server,$username,$password);

    if(!$con)
    {
        die("connection to this database failed due to ". mysqli_connect_error());
    }
    // echo "Success connecting to the db"

    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];

    $sql = "INSERT INTO `us_trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)  VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
   

    if($con->query($sql)==true)
    {
        // echo "Successfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR : $sql <br> $con->error";
    }

    $con->close();
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to travel form</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kalnia+Glaze:wght@100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="pg" src="pg.jpg" alt="car" >
    <div class="container">
        <h1>Welcome to Travel Form</h1>
        <p>Enter your form and submit your details to confirm your participation
            in the trip
        </p>
        <?php
        if($insert == true){
        echo"<p class='submitmsg'>Thanks for submitting your form</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number ">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other infomation here">
            </textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>

    </div>
    <script src="index.js"></script>

    
</body>
</html>