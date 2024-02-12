<?php
@include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Fira+Sans+Condensed:ital,wght@1,300&display=swap');
.aboutus{
    font-family: 'Vesper Libre', serif;
    color:rgb(196, 218, 184);
    text-align: center;
    margin: 20px;
    border-radius: 10px;
    padding-top: 20px;
    background-color: #064e2e;
    height: 79vh;
    width: 200vh;
    font-size: 30px;
}
.gallery{
    color:rgb(29, 75, 4);
    text-align: center;
    margin: 20px;
    border-radius: 10px;
    padding-top: 20px;
    background-color: #c1c5c3;
    height: 60vh;
    width: 200vh;
    font-size: 30px;
}
.gallery h1{
    font-family: 'Vesper Libre', serif;
    font-size: 50px;
    font-weight: bold;
    letter-spacing: 5px;
    text-align: center;
}
.gal{
    display: flex;
    flex: row;
    text-align: center;
    margin-top: 70px;
    margin-left: 70px;
}
.gal-1{
    background-image: url(m5.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 30vh;
    width: 50vh;
    border: 2px solid whitesmoke;
    /* border-radius:  50% 0% 0% 0%; */
    margin-left: 100px;
    border-radius: 5%;
}
.gal-2{
    background-image: url(m6.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 30vh;
    width: 50vh;
     border: 2px solid whitesmoke;
    margin-left: 100px;
    border-radius: 5%;
}
.gal-3{
    background-image: url(m7.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 30vh;
    width: 50vh;
     border: 2px solid whitesmoke;
    margin-left: 100px;
    border-radius: 5%;
}
.about-us{
    color:rgb(196, 218, 184);
    text-align: center;
    margin: 20px;
    border-radius: 10px;
    padding-top: 20px;
    background-color: #064e2e;
    height: 72vh;
    width: 200vh;
    font-size: 30px;
    margin-bottom:0%;
}
.about-1{
    background-image: url('m8.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    height: 65vh;
    width: 50vh;
    color: #c1c5c3;
    float: left;
    border-radius: 5%;
    border: 2px solid white;
    left: 50%;
    margin-top: 1%;
    margin-left: 30vh;
}
.about-2{
    background-repeat: no-repeat;
    background-size: cover;
    height: 65vh;
    width: 60vh;
    color: white;
    float: right;
    right: 20%;
    margin-top: 1%;
    margin-right: 15%;
}
.about-2 h1{
    font-family: 'Vesper Libre', serif;
    font-size: 50px;
    color: rgb(196, 218, 184);
}
.about-2 p{
    font-family: 'Dosis', sans-serif;
    font-family: 'Fira Sans Condensed', sans-serif;
    letter-spacing: 2px;
    font-size:30px;
    color:rgb(196, 218, 184);
    padding: 5%;
}
.contact{
    color:rgb(29, 75, 4);
    margin: 20px;
    border-radius: 10px;
    padding-top: 20px;
    background-color: #c1c5c3;
    height: 60vh;
    width: 200vh;
    font-size: 30px;
}
.cont-1{
    height: 50vh;
    width: 50vh;
    color: #c1c5c3;
    float: left;
    border:none;
    left: 10%;
    margin-top: 1%;
    margin-left: 10vh;
}
.cont-2{
    color:rgb(29, 75, 4);
    text-align: center;
    height: 50vh;
    width: 80vh;
    float: right;
    right: 20%;
    margin-top: 1%;
    margin-right: 10%;
    border-radius: 5%;
}
.cont-2 h1{
    text-align: center;
    color:rgb(29, 75, 4);
    font-size: 5rem;
    font-family: 'Vesper Libre', serif;
}
.cont-2 h5{
    text-align: center;
    color:rgb(29, 75, 4);
    font-size: 2rem;
    font-family: 'Vesper Libre', serif;
    /* text-align: left; */
}
.cont-2 p{
    text-align: center;
    color:rgb(29, 75, 4);;
    font-size: 1.5rem;
    font-family: 'Vesper Libre', serif;
    /* text-align: left; */
}
.cont-2 h2{
    text-align: center;
    color:black;
    font-size: 1.5rem;
    font-family: 'Vesper Libre', serif;
}
.products .box-container{
   margin-left:0%;
   display: grid;
   grid-template-columns: repeat(auto-fit, 25rem);
   gap:2rem;
   justify-content: center;
}
.products .box-container .boxx{
   text-align: center;
   padding:2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
}
.products .box-container .boxx{
   text-align: center;
   /* padding:2rem; */
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
}.products .box-container .boxx img{
   height: 15rem;
}

.products .box-container .boxx h3{
   margin:1rem 0;
   font-size: 2.5rem;
   color:var(--black);
}

.products .box-container .boxx .price{
   font-size: 2.5rem;
   color:var(--black);
}
.btn,
.option-btn,
.delete-btn{
   display: block;
   width: 10%;
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
   /* max-width: 1200px; */
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

.products {
    font-family: 'Vesper Libre', serif;
    color: rgb(29, 75, 4);
            text-align: center;
            margin-top: 20px;
            border-radius: 10px;
            padding-top: 20px;
            background-color: #c1c5c3;
            height: 60vh;
            width: 200vh;
            font-size: 30px;
        }

        .pr {
            position: relative;
            margin-top:5vh;
            /* background-repeat: no-repeat; */
            width: 150%;
            display:flex;
            flex-direction: left;
            /* max-width: 100%; */
        }

        .image {
            margin-top: 5%;
            margin-left: 15%;
            padding-right: 20vh;
            display: block;
            width: 50vh;
            height: auto;
        }

        .overlay{
            position: absolute;
            bottom: 0;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
            width: 29vh;
            transition: .5s ease;
            opacity: 0;
            color: white;
            font-size: 20px;
            padding: 20px;
            text-align: center;
            margin-left: 8vh;
        }

        .pr:hover .overlay {
            opacity: 1;
        }
        .pages a{
            font-size:30px;
        }
    </style>
    <title>Document</title>
    <link rel="stylesheet" href="try.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div class="head">
            <div class="logo">
                <h1>NURSERY_HERE</h1>
            </div>
            <div class="pages">
                <nav>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#cate">Categories</a>
                        </li>
                        <li>
                            <a href="products.php">Products</a>
                        </li>
                        <li>
                            <a href="#SER">Services</a>
                        </li>
                        <li>
                            <a href="#ABOUT">AboutUs</a>
                        </li>
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
         
        <section>
            <div class="container">
                <div class="box">
                    <div class="box1">
                        <h1>
                            PLANT GONNA MAKE PEOPLE HAPPY
                        </h1>
                    </div>
                    <div class="box2">
                        <button type="submit" onclick="location.href='products.php'">SHOP NOW !</button>
                    </div>
                </div>
            </div>
        </section>
        <section> 
            <div class="nav1">
            <a name="cate">
            </div>
            <div class="categories">
                <div class="con-1">
                    <h1>CATEGORIES</h1>
                </div>
                <div class="con-2">
                    <div class="con1">
                    </div>
                    <div class="con2">
                    </div>
                    <div class="con3">
                    </div>
                    <div class="con4">
                    </div>
                </div>
                <div class="con-3">
                    <div class="s1">
                        <h2>Succulent</h2>
                        <h5>
                            Buy the largest collection of the succulent and
                            cactus plants online. Our plants
                            are a true delight for the cactus plants collectors
                        </h5>
                    </div>  
                    <div class="b1">
                        <h2>
                            Bonsai
                        </h2>
                        <h5>
                            Browse from a wide variety of the bonsai plants which
                            purify the air around you and creates a positive environment
                        </h5>
                    </div>
                    <div class="f1">
                        <h2>Flower Plant</h2>
                        <h5>
                            Buying Flowering plants from largest online nursery for Flowering
                            plants inculding all flowering plant,
                            orchids etc.
                        </h5>
                    </div>
                    <div class="c1">
                        <h2>
                            Creepers
                        </h2>
                        <h5>
                            Opt for climbing plant they add color to dull fences, walls or trellises,
                            We are offering online services for buying creeper plants
                        </h5>
                    </div>
                </div>
            </div>
        </section>
        <section>
        <div class="products">
        <h1>FEATURED PRODUCTS</h1>
        <div class="pr">
            <div class="pr-1">
                <img src="mm1.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <button style="background: none; border: none; color:white; font-size: 1rem; border-radius:5%;" onclick="location.href='products.php'">
                        QUICK VIEW
                    </button></div>
            </div>
            <div class="pr-2">
                <img src="mm2.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <button style="background: none; border: none; color:white;font-size: 1rem;" onclick="location.href='products.php'">
                    QUICK VIEW
                </button></div>
            </div>
            <div class="pr-3">
                <img src="mm3.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <button style="background: none; border: none; color:white;font-size: 1rem;" onclick="location.href='products.php'">
                    QUICK VIEW
                </button></div>
            </div>
            <div class="pr-4">
                <img src="mm4.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <button style="background: none; border: none; color:white;font-size: 1rem;" onclick="location.href='products.php'">
                    QUICK VIEW
                </button></div>
            </div>
        </div>
    </div>
        </section>
         <!-- SERVICES                    SERVICES                     SERVICES -->
        <section> 
        <a name="SER">
            <div class="services">
                <h1>SERVICES</h1>

                <div class="ser">
                    <div class="ser1">
                        <div class="ser2">
                        </div>
                        <div id="service1">
                        <h3>Plant Supplying Services</h3>
                            <p>Our skilled and experienced team offers a wide range of plants and sapling to our reputed clients as per their requirements and at adorable offers or rates. You can easily buy the plant.</p>
                            <button type="button" class="enquire-1" onclick="location.href='enquire.php'">Enquire!</button>
                        </div>
                    </div>
                    <div class="ser1">
                        <div class="ser3"></div>
                        <div id="service2">
                        <h3>Nursery Services</h3>
                            <p>Using the vast industrial knowledge, which we have amassed over the years, we constantly provide various nursery services to our clients as and when requested</p><br>
                            <button type="button" class="enquire-1"onclick="location.href='enquire.php'" >Enquire!</button><br><br>
                        </div>
                    </div>
                    <div class="ser1">
                        <div class="ser4"></div>
                        <div id="service3">
                        <h3>Landscapes design</h3>
                            <p>Looking for beautiful landscapes ideas?
                            Count on our plants, garden flowers to be heathly and thriving. We bring you stunning examples of garden design from properties around the world.   </p><br>
                            <button type="button" class="enquire-1" onclick="location.href='enquire.php'">Enquire!</button><br>
                        </div>
                    </div>
                    <div class="ser1">
                        <div class="ser5"></div>
                        <div id="service4">
                        <h3>Garden Maintenance</h3>
                            <p>Create the perfect background for your life happen with the perfect selection of houseplants, Home decor, home fragrance and gifts items for everyone you know.  </p><br>
                            <button type="button" class="enquire-1" onclick="location.href='enquire.php'">Enquire!</button><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="gallery">
                <h1>GALLERY</h1>
                <div class="gal">
                <div class="gal-1">
                </div>
                <div class="gal-2">
                </div>
                <div class="gal-3">
                </div>
            </div>
            </div>
        </section>
        <section>
        <a name="ABOUT">
            <div class="about-us">
                <div class="about-1"></div>
                <div class="about-2"><br>
                    <h1>WHAT WE DO</h1>
                    <p>We, Seedling Nursery, situated at West,Amritsar, Punjab, aim to promote 
                        environmental sustainbility and make our country pollution-free and encourage
                        our customers to purchase more plants to be one with nature.<br> We aim at building
                        an excellent reputation and growing our business by selling beautiful plants that
                    you can decorate your home or veranda with. Greenary is the best form of decoration
                and we thus have plenty of scented and wonderful plants to choose from.  </p>
                </div>
            </div>
        </section>
        <section> 
            <a name="cON">
            <div class="contact">
                <div class="cont-1">
                    <p> 
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.630709434952!2d74.87442987533638!3d31.671321639669145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391963dc2387a537%3A0xff68e8eab29343c8!2sGuru%20Ram%20Dass%20Nursery!5e0!3m2!1sen!2sin!4v1691332825706!5m2!1sen!2sin" width="700" height="550" style="border-radius:2%; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
                </div>
                <div class="cont-2">
                    <h1>CONTACT</h1>
                    <h5>+91 88826-88888, +91 99999-878787</h5>
                    <p>Guru Ram Dass Nursery, Fatehgarh Churian Road,<br>
                    Nangli, Amritsar, Punjab <br>
                Near Neelkanth Hospital, Akash Avenue
            <br>
        Pin Code- 143008 <br><br>
        <h2>OUR TIMINGS</h2>
        <h2>Mon-Sun : 09:00AM - 08:00PM</h2>
    <b><a href="#" style="color:black ; font-size: 20px;">gururamdassnursery1@gmail.com</a></b></p>
                </div>
            </div>
        </section>  
        <br><br><br><br><br>
        <script src="style.js"></script>
</body>
</main>
<footer>
    <div class="footer-content">
        <h3><center>NURSERY_HERE</center></h3>
    </div>
    <ul class="socials">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
    </ul>
    <div class="footer-bottom">
        <p>Copyright &copy; 2023 NURSERY_HERE. design by <span>MUSKAN </span></p>

    </div>
</footer>

</html>