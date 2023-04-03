<?php
include("connect.php");
if(isset($_GET['t1']))
{
 $pid=$_GET['t1'];
 //echo $pid;
 $sql= "SELECT * FROM postnews where pid=$pid";
 $query = mysqli_query($con,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  <header>
      <!-- start nav -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#" style="color: white;"><img src="img/logo/top2.jpeg" alt="" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="index.php">Home</a>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blogs
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.html #Sports">Sports</a>
              <a class="dropdown-item" href="index.html #Entertainment">Entertainment</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white" href="index.html #tranding">Tranding</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white" href="index.html #world">world</a>
          </li>
          <li class="nav-item active">
            <a href="index.html #fit-life" class="nav-link text-white">fit life</a>
          </li>
          <li class="nav-item active">
            <a href="index.html #Odd-blog" class="nav-link text-white">Odd-blog</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white" href="#">About</a>
          </li>
        </ul>
      </div>

    </div><!--end of container-->  
  </nav>
      <!-- end nav -->
  </header>

  <main>
      <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
         <?php 
            if(mysqli_num_rows($query) > 0)
             {
              while($row = mysqli_fetch_array($query))
              {
        ?> 

        <!-- Title -->
        <h1 class="mt-4"><?php echo $row[1]; ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Start Bootstrap</a>
        </p>

        <hr>
       

        <!-- Date/Time -->
        <p>Posted on <?php echo $row[5];?></p>

        <hr>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo $row[4]; ?>" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead"><?php echo $row[1]; ?></p>

        <p><?php echo $row[3]; ?></p>
         <a href="index.php">GO BACK</a>

       <?php
         }
       }
       ?>

        
        <!-- <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus harum laborum ex quasi ducimus laboriosam voluptate ab inventore. Deleniti, asperiores! Quo officia, odio tenetur non dolor fugit natus magni error!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est in alias veniam neque, dolor cum eligendi rem adipisci! Voluptas labore illum esse error pariatur, eligendi officia, soluta sapiente rem! Asperiores!</p>

 -->        <hr>

        <div class="social-share pt-30">
          <div class="section-tittle">
              <div class="row">
                <div class="col-5">
                  <h1 class="mr-20">Share:</h1>
                </div>
                <div class="col-7">
                  <a href=""><img src="img/ads/icon-fb.png" alt="" class="mt-2"></a>
                  <a href=""><img src="img/ads/icon-ins.png" alt="" class="mt-2"></a>
                  <a href=""><img src="img/ads/icon-tw.png" alt="" class="mt-2"></a>
                  <a href=""><img src="img/ads/icon-yo.png" alt="" class="mt-2"></a>
                </div>
              </div>
          </div>
      </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row text-center">
              <div class="col-6 p-2">
                <a href=""><img src="img/ads/icon-fb.png" alt=""></a>
              </div>
              <div class="col-6 p-2">
               <a href=""><img src="img/ads/icon-ins.png" alt=""></a>
              </div>
              <div class="col-6 p-2">
               <a href=""><img src="img/ads/icon-tw.png" alt=""></a>
              </div>
              <div class="col-6 p-2">
               <a href=""><img src="img/ads/icon-yo.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>
    
    <!-- poster wds -->
    <div class="poster-ads">
      <img src="img/ads/news_card.jpg" alt="" class="img-fluid mx-auto d-block mb-5">
    </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


  </main>

  
  <footer class="pt-5 pb-3">
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-4 col-12">
        <img src="img/logo/top1.jpeg" alt="" class="rounded img-fluid">
        <p class="mt-3">Lorem ipsum dolor sit amet, nsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>

        <p>198 West 21th Street, Suite 721 New York,NY 10010</p>

        <p>Phone: +95 (0) 123 456 789 Cell: +95 (0) 123 456 789</p>
      </div>
      <div class="col-md-4 col-12 ">
        <div class="footer-nav">
          <h2 class="text-white">News</h2>
            <ul>
              <li>
                <a href="#Sports">Sports</a>
              </li>
              <li>
                <a href="#">Tranding</a>
              </li>
              <li>
                <a href="#Entertainment">Entertainment</a>
              </li>
              <li>
                <a href="#world">Word</a>
              </li>
              <li>
                <a href="#fit-life">Fit life</a>
              </li>
              <li>
                <a href="#">Odd-blog</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
            </ul>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="footer-img-last">
          <img src="img/ads/body_card2.png" alt="" class="img-fluid rounded float-right d-block">
        </div>
      </div>
    </div>
  </div>
</footer>
  <div class="copy-right">
    <h6 class="text-center text-white">
      Copyright ©2020 All rights reserved | This template is made By Deepak Choudhary
    </h6>
  </div>


<script src="js/jquery-3.4.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script type="text/javascript" src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script>
  var scroll = new SmoothScroll('a[href*="#"]');
</script>
<script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>
</body>
</html>

