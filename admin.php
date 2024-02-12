<?php
session_start();
include('connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="try.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="head">
            <div class="logo">
                <h1>NURSERY_HERE</h1>
            </div>
        </div>
    </header>
    <section>
        <div class="signback">
        <div class="signup">  
                <form action="" method="POST" id="signup">
                    <h2>REGISTER</h2><br><br>
                    <!-- <input type="text" placeholder="Name" name="name" required><br><br><br> -->
                    <input type="text" placeholder="name" name="username1" required><br><br><br>
                    <input type="text" placeholder="price" name="email" required><br><br><br>
                    <input type="file" placeholder="image" name="password" required><br><br><br>
                    <input type="submit" value="Signup" name="submit-button" required><br><br>
                    <!-- <h4>OR</h4><br>
                    <a href=login.php>Login</a>  -->
                </form>
        </div>
    </div>
    </section>
</body>


<?php

  if(isset($_POST['submit-button'])){
   $User=$_POST['username1'];
   $Email = $_POST['email'];
   $Password = $_POST['password'];
 

$query =" INSERT INTO products (name,price,image) VALUES('$User','$Email','$Password')";
$data= mysqli_query($conn,$query);

if($data){
   echo "You can now Login ";
}
else{
    echo "Error".$query.mysqli_error($conn);
}
  }

//   mysqli_close($conn);
?>

</html>