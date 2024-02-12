
<?php
    @include 'connection.php';  
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="try.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
            margin:0%;
            padding:0%;
            font-family:'Poppins',monospace;
        }
    </style>
</head>

<body>
    <header>
        <div class="head">
            <div class="logo">
                <h1>NURSERY_HERE</h1>
            </div>
</div>
            <div class="search">
                <input type="search_head" placeholder="Search Here">
            </div>
            <div class="pages">
                <nav>
                    <ul>
                        <li>
                            <a href="try.php">Home</a>
                        </li>
                        <li>
                            <a href="products.html">Products</a>
                        </li>
                        <li>
                            <a href="cart.html">Cart<span>
                            </span></a>
                        </li>
                        <li>
                            <a href="myaccount">MyAccount</a>
                            <ul class="drop">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Cart</a></li>
                                <li><a href="#">Order</a></li>
                                <li><a href="#">Logout</a></l>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>
</html>
</header>