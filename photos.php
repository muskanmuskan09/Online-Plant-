<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname ="nursery";
 
// Create connection 
$conn = mysqli_connect($servername, $username, $password,$dbname); 
// Check connection 
if (!$conn){ 
  die("Connection failed: ". mysqli_connect_error()); 
} 
    echo "hello";
    $query="Select * from products;
    $data=mysqli_query($conn,$query);
    
    $total=mysqli_num_rows($data);
    print_r($total); 


mysqli_close($conn);

?>