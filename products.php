<?php
@include 'connection.php';
?>
<?php
if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;
    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");
 
    if(mysqli_num_rows($select_cart) > 0){
       $message[] = 'item already added to cart';
    }else{
       $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
       $message[] = 'item added to cart succesfully';
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<style>
@import url('https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Fugaz+One&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Sedgwick+Ave+Display&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap');

:root{
   --blue:#2980b9;
   --red:tomato;
   --orange:orange;
   --black:#333;
   --white:#fff;
   --bg-color:#eee;
   --dark-bg:rgba(0,0,0,.7);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.3);
   --border:.1rem solid #999;
}
   * {
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
}
   .head{
      width:206vh;
      height:13vh;
      background-color: #064e2e;
   }
   .logo{
      font-family: 'Bruno Ace SC', cursive;
      font-family: 'Fugaz One', cursive;
      font-family: 'Sigmar', cursive;
      padding-top:2vh;
      color:white;
      
   }
    .back-1{
        background:rgb(196, 218, 184);
        width:10vh;
        height:5vh;
        padding:10px;
        border-radius:45%;
        /* margin-left:160vh; */
        font-size:20px;
        font-weight:bolder;
        letter-spacing:2px;
        /* margin-top:2vh; */
        position:absolute;
        left:87%;
        }
      .back-2{
         background:rgb(196, 218, 184);
         width:10vh;
         height:5vh;
         padding:10px;
         border-radius:45%;
         margin-left:190vh;
         font-size:20px;
         font-weight:bolder;
         letter-spacing:2px;
         position:absolute;
         right:3%;
      }
    .pro-1{
        text-align:center;
        font-size:3vw;
        color:#064e2e;
        margin-top:4vh;    
        margin-left:75vh;
        /* margin-top:10vh; */
        background:rgb(196, 218, 184);
        width:45vh;
        border-radius: 48%;
        padding:20px;
        letter-spacing:3px;
        margin-bottom:5vh;
    }
    .cart{
        background:rgb(196, 218, 184);
        width:10vh;
        height:5vh;
        padding:10px;
        border-radius:45%;
        margin-right:5vh;
        font-size:15px;
        font-weight:bolder;
        letter-spacing:2px;
    }
    
    
.products .box-container{
   margin-left:0%;
   display: grid;
   grid-template-columns: repeat(auto-fit, 25rem);
   gap:5rem;
   justify-content: center;
}
.products .box-container .box{
   text-align: center;
   padding:2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
}
.products .box-container .box{
   text-align: center;
   padding:2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
}.products .box-container .box img{
   height: 15rem;
}

.products .box-container .box h3{
   margin:1rem 0;
   font-size: 2.5rem;
   color:var(--black);
}

.products .box-container .box .price{
   font-size: 2.5rem;
   color:var(--black);
}
.btn,
.option-btn,
.delete-btn{
   display: block;
   width: 100%;
   text-align: center;
   background-color: rgb(230,99,71);
   color:var(--white);
   font-size: 1.7rem;
   padding:1.2rem 3rem;
   border-radius: .8rem;
   cursor: pointer;
   margin-top: 1rem;
}

.btn:hover,
.option-btn:hover,
.delete-btn:hover{
   background-color: var(--black);
}

.option-btn i,
.delete-btn i{
   padding-right: .5rem;
}

.option-btn{
   background-color: var(--orange);
}

.delete-btn{
   margin-top: 0;
   background-color: var(--red);
}

.message{
   background-color: var(--blue);
   position: sticky;
   top:0; left:0;
   z-index: 10000;
   border-radius: .5rem;
   background-color: var(--white);
   padding:1.5rem 2rem;
   margin:0 auto;
   max-width: 1200px;
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1.5rem;
}

.message span{
   font-size: 2rem;
   color:var(--black);
}

.message i{
   font-size: 2.5rem;
   color:var(--black);
   cursor: pointer;
}

.message i:hover{
   color:var(--red);
}


</style>
<head>
    <title>Document</title>
    <!-- <link rel="stylesheet" href="mus.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   
   <div class="head">
      <div class="logo">
      <h1>NURSERY_HERE</h1>
      <button class="back-1" type="button" onclick="location.href='try.php'">BACK</button>
      <button class="back-2" type="button" onclick="location.href='cart.php'">CART</button>
      </div>
     
   </div>
   <section class="products">
   <div class="pro-back">
    <h2 class="pro-1">PRODUCTS</h2>

   <div class="box-container">
    
      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">Rs<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="Add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

<script src="style.js"></script>
