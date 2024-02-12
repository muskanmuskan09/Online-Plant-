<?php
session_start();
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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
        <div class="login">  
                <form action="" method="POST" id="login" enctype="multipart/form-data">
                    <h1>LOGIN</h1><br><br>
                    <input type="email" placeholder="email" name="email" required><br><br><br>
                    <input type="password" placeholder="Password" name="pass" required><br><br><br>
                    <input type="submit" value="Login" name="login" class="btn"><br><br>
                    <h4>OR</h4><br>
                    <a href="signup.php">Signup</a><br>
                </form>
        </div>
    </div>
    </section>
</body>

</html>


<!--User Login-->
<?php
if(isset($_POST['login'])){
     $email=$_POST['email'];   //database to entry fields
     $pass=$_POST['pass'];

$query="Select * from register where email='$email' && pass='$pass'";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);
//echo $total;
if($total==1){
   $_SESSION['user_name']=$email;
   header('location:try.php'); //to redirect to home page
   echo"Login ok";
}
else{
   echo"Login failed";
} 
}

?>