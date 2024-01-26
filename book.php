<html>
    <head>
        <title>About</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>
<body>
    <!-- header -->
    <div class="row">
        <div class="col-12 ">
  <nav class="navbar navbar-expand-lg bg-info sticky-top py-3 text-center">
  <div class="container-fluid">
    <a class="navbar-brand fs-1 mx-3" href="Home.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fs-1 mx-3" aria-current="page" href="package.php">Package</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-1 mx-3" aria-current="page" href="book.php">Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-1 mx-3" aria-current="page" href="about.php">About</a>
        </li>
        
        
       
      </ul>

    </div>
  </div>
</nav>
 </div>
    </div>
<div class="heading" style="background:url(images/image4.jpeg) no-repeat">
<h1>Book now</h1>
</div>
<!-- booking -->
<section class="booking">
    <h1 class="heading-title">Book your trip</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>Name:</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>Email:</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>Phone:</span>
                <input type="number" placeholder="enter your phone number" name="phone">
            </div>
            <div class="inputBox">
                <span>Address:</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>Where to:</span>
                <input type="text" placeholder="enter the place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>how many:</span>
                <input type="number" placeholder="enter number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>Arrivals:</span>
                <input type="date"  name="arrivals">
            </div>
            <div class="inputBox">
                <span>Leaving: </span>
                <input type="date" name="leaving">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">

</form>













<!-- footer -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
        <a href="Home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>

        </div>
        <div class="box">
            <h3>extra links</h3>
        <a href="#">ask question</a>
        <a href="#">about us </a>
        <a href="#">privacy policy</a>
        <a href="#">terms of users</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
        <a href="#">9840477388</a>
        <a href="#">056-531393</a>
        <a href="#">abc@gmail.com</a>
        <a href="#">Bharatpur,Chitwan</a>
        
        </div>
        <div class="box">
            <h3>follow us</h3>
        <a href="#">Facebook</a>
        <a href="#">Instagram </a>
        <a href="#">Twitter</a>
        <a href="#">Youtube</a>
        </div>
        <div class="credit">Created by<span>Divya</span> |all rights reserved</div>

    </div>
</section>




<script src="https://unpkg.com/swiper@7/swiper-bundel.min.js"></script>

<!-- custom js file link -->
<script src="jss/script.js"></script>


</body>
</html>
