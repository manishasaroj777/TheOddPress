<?php
session_start();
include("connect.php");

if(isset($_SESSION['roleid']))
{
  $s=$_SESSION['roleid'];
 
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
<body onload="myfunction()">
	<!-- loder -->
	<!-- <div id="loading"></div> -->
	<!-- End loder -->

<header>
	<div class="container">
		<div class="header-top mt-2">
			<div class="row">
				<div class="col-lg-4">
					<div class="brand-img">	
						<a class="navbar-brand" href="#"><img src="img/logo/logo.png" alt="" class="img-fluid"></a>
					</div>
				</div>
				<div class="col-lg-8">
					<img src="img/ads/header_card.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div><!--end of container-->
			<!-- header-top-end -->
			<!-- start nav -->
	<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#" style="color: white;"><img src="img/logo/top2.jpeg" alt="" class="img-fluid"></a>
			<div class="dropdown">
			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    language
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
			    <button class="dropdown-item" type="button">English</button>
			    <button class="dropdown-item" type="button">Hindi</button>
			  </div>
			</div>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse text-center" id="navbarNav">
		    <ul class="navbar-nav ml-auto">

		   <?php
  			if(!isset($_SESSION['uName']))
  			{
    	   ?><!--starting of php 	 -->
		      <li class="nav-item active">
		        <a class="nav-link text-white" href="index.html">Home</a>
		      </li>
		       <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Blogs
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#Sports">Sports</a>
		          <a class="dropdown-item" href="#Entertainment">Entertainment</a>
		      </li>

		      <li class="nav-item active">
		        <a class="nav-link text-white" href="#tranding">Tranding</a>
		      </li>

		      <li class="nav-item active">
		        <a class="nav-link text-white" href="#world">world</a>
		      </li>

		      <li class="nav-item active">
		      	<a href="#fit-life" class="nav-link text-white">fit life</a>
		      </li>

		      <li class="nav-item active">
		      	<a href="#Odd-blog" class="nav-link text-white">Odd-blog</a>
		      </li>

		      <li class="nav-item active">
		        <a class="nav-link text-white" href="#">About</a>
		      </li>

              <li class="nav-item active">
		        <a class="nav-link text-white" href="#" id="login">Login</a>
		      </li> 

		    <?php
              }//end of if loop
             else if(isset($_SESSION['uName']))
                    {
                     if(isset($_SESSION['roleid']))
                     {
                       $roleId = $_SESSION['roleid'];
                       if($roleId==1)
                        {
                         //for admin
             ?> 
             <li class="nav-item active">
		        <a class="nav-link text-white" href="#" id="postnews">Post News</a>
		      </li> 

              <li class="nav-item active">
		      <a href="logout.php"class="nav-link text-white">Logout</a>
		      </li>

		      <?php
		       }
              }
             }
		      ?>    

		    </ul>
		  </div>

		</div><!--end of container-->  
	</nav>
			<!-- end nav -->
			<!-- star header-main -->


   <div class="jumbotron mt-3" ><!-- This is to display forms -->
 
   </div>			
			
	<div class="header-main">
		<div class="container">
			<div class="row mt-2">
				<div class="col-md-8 col-12 d-block tranding">
					

					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					    <a href="news.html">
					      <img src="img/trending/fb_5f0078b93cb7e.jpg" class="d-block w-100" alt="...">
					   		<h5 class="ml-2 mt-2">News Title</h5>
					   		<p class="ml-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores alias distinctio architecto repellat necessitatibus, voluptate culpa sed, quod quia nostrum ab cupiditate omnis atque laborum quo labore, iusto, explicabo quos.</p>
					   </a>
					    </div>
					    <div class="carousel-item">
					   <a href="news.html">
					      <img src="img/trending/fb_5f0078b93cb7e.jpg" class="d-block w-100" alt="...">
					   		<h5 class="ml-2 mt-2">News Title</h5>
					   		<p class="ml-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia quos id aperiam magnam dolores ducimus nulla ea nihil earum, quas voluptatibus minus velit reprehenderit suscipit magni vel. Odit, molestiae, ullam.</p>
					   </a>
					    </div>
					    <div class="carousel-item">
					    <a href="news.html">
					      <img src="img/trending/fb_5f0078b93cb7e.jpg" class="d-block w-100" alt="...">
					   		<h5 class="ml-2 mt-2">News Title</h5>
					   		<p class="ml-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis consequuntur aliquam dolor praesentium accusantium assumenda possimus, dolores a quo fuga dolorem odio soluta, veritatis ea, magnam ab reprehenderit placeat maxime.</p>
					   </a>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>


				</div>
				<div class="col-md-4 col-12">
					<div class="row tranding">
						<div class="col-12">
							<a href="news.html">
						      <img src="http://placehold.it/800x400" class="d-block w-100" alt="...">
						   		<h5 class="ml-2 mt-0 mb-0">News Title</h5>
						   		<p class="ml-2 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						   </a>
						</div>
						<div class="col-12">
							<a href="news.html">
						      <img src="http://placehold.it/800x400" class="d-block w-100" alt="...">
						   		<h5 class="ml-2 mt-0 mb-0">News Title</h5>
						   		<p class="ml-2 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						   </a>
						</div>
					</div>
	
				</div>	
			</div>
		</div><!--end of container-->	
	</div>

			<!-- End header-main -->
</header>

<!-- *************************************************end header**************************************** -->
<main>
<!-- start tranding New -->
<section class="tranding mt-3 mb-2" id="tranding">
	<div class="container pt-1">
	  <!-- Portfolio Item Heading -->
	  <h3 class="p-2 mt-2" style="background-color: #ff2143; color: white;">Tranding</h3>
	  <!-- Portfolio Item Row -->
	  <div class="row">
	    <div class="col-md-8">
	      <a href="news.html"><img class="img-fluid" src="img/word/amp_5f0073ee80838.jpg" alt=""></a>
	    </div>
	    <div class="col-md-4">
	      <h3 class="my-3">Project Description</h3>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
	      <h3 class="my-3">Project Details</h3>
	      <ul>
	        <li>Lorem Ipsum</li>
	        <li>Dolor Sit Amet</li>
	        <li>Consectetur</li>
	        <li>Adipiscing Elit</li>
	      </ul>
	    </div>
	  </div>
	  <!-- /.row -->
	  <!-- Related Projects Row -->
	  <h3 class="my-4">Related</h3>
	  <div class="row">
	    <div class="col-md-3 col-sm-6 mb-4">
	      <a href="news.html">
	            <img class="img-fluid" src="img/word/1_5efd762ff10e1.jpg" alt="">
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	      </a>
	    </div>
	    <div class="col-md-3 col-sm-6 mb-4">
	      <a href="news.html">
	            <img class="img-fluid" src="img/word/1_5efd8b0ab014d.jpg" alt="">
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	      </a>
	    </div>
	    <div class="col-md-3 col-sm-6 mb-4">
	      <a href="news.html">
	            <img class="img-fluid" src="img/word/200702035409-02-new-shinkansen-train-restricted_5efecf10a0c18.jpg" alt="">
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	          </a>
	    </div>
	    <div class="col-md-3 col-sm-6 mb-4">
	      <a href="news.html">
	            <img class="img-fluid" src="img/word/NINTCHDBPICT000592826516_5efeeebd24127.jpg" alt="">
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	          </a>
	    </div>
	  </div>
	  <!-- /.row -->
	</div>
</section>
<!-- End tranding New -->

<section class="world mt-3 mb-3" id="world">

	<!-- Page Content -->
    <div class="container">
      <!-- Page Heading -->
      <h3 class="p-2 mt-2" style="background-color: #3db4ae; color: white;">World</h3>
      <!-- Project One -->
      <div class="row">
        <div class="col-md-7">
          <a href="news.html">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/india/fb_5f0078b93cb7e.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Project One</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
          <a class="btn btn-primary" href="#">View More</a>
        </div>
      </div>
      <!-- /.row -->
      <hr>
      <!-- Project Two -->
      <div class="row">
        <div class="col-md-7">
          <a href="news.html">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/india/fb_5f0078b93cb7e.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Project Two</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
          <a class="btn btn-primary" href="#">View More</a>
        </div>
      </div>
      <!-- /.row -->
      <hr>
      <!-- Project Three -->
      <div class="row">
        <div class="col-md-7">
          <a href="news.html">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/india/fb_5f0078b93cb7e.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Project Three</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
          <a class="btn btn-primary" href="#">View More</a>
        </div>
      </div>
      <!-- /.row -->
      <hr>
      <!-- Project Four -->
      <div class="row">

        <div class="col-md-7">
          <a href="news.html">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/india/fb_5f0078b93cb7e.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Project Four</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
          <a class="btn btn-primary" href="#">View More</a>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!--End fo world-->

<!-- start fit style -->
<section class="fit-life" id="fit-life">
  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <h3 class="p-2 mt-2" style="background-color: #cb589d; color: white;">Fitlife</h3>
    <header class="jumbotron my-4">
      <h1 class="display-3">A Warm Welcome!</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
      <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <a href="news.html"><img class="card-img-top" src="http://placehold.it/500x325" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="news.html" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <a href="news.html"><img class="card-img-top" src="http://placehold.it/500x325" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="news.html" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <a href="news.html"><img class="card-img-top" src="http://placehold.it/500x325" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="news.html" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <a href="news.html"><img class="card-img-top" src="http://placehold.it/500x325" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="news.html" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</section>
<!-- End fit style -->

<!-- start entertainment -->
<section class="entertainment pt-2 pb-2" id="Entertainment" style="background-color: white;">
	<div class="container">
		<h3 class="p-2 mt-2" style="background-color: #da0005; color: white;">Entertainment</h3>
	</div>
	<!-- Page Content -->
 <div class="container">

  <!-- Page Heading -->
  <h1 class="my-4">Page Heading
    <small>Secondary Text</small>
  </h1>

  <div class="row">
    <div class="col-lg-6 mb-4">
      <div class="card h-100">
        <a href="news.html"><img class="card-img-top" src="img/Entertainment/0023_5f00155942613.jpg" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Project One</a>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card h-100">
        <a href="news.html"><img class="card-img-top" src="img/Entertainment/ELzSW4IU0AAdhmg_5efefd3af235a.jpg" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Project Two</a>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card h-100">
        <a href="news.html"><img class="card-img-top" src="img/Entertainment/FBImage7-2_5f0041e24ad04.jpg" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Project Three</a>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card h-100">
        <a href="news.html"><img class="card-img-top" src="img/Entertainment/When-Saroj-Khan-Lovingly-Slapped-Shah-Rukh-Khan-for-Complaining_5f003a2c6fe92.jpg" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Project Four</a>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->

	</div>
	<!-- /.container -->
</section>
<!-- End entertainment -->

<!-- start sports -->
<section class="Sport pt-2" id="Sports">
	<div class="container">
		<h3 class="p-2 mt-2" style="background-color: #7bb101; color: white;">Sports</h3>
		<div class="owl-carousel owl-theme">
		    <div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
		    <div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
			<div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
		    <div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
		    <div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
		    <div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
		    <div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
		    <div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
		</div>
	</div><!--end of container-->
</section>
<!-- End sports -->

<!-- start the odd-blog -->
<section class="Odd-blog pt-2" id="Odd-blog" style="background-color: white;">
	<div class="container">
	<h3 class="p-2 mt-2" style="background-color: #ff2143; color: white;">Odd-blog</h3>
    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <a href="news.html"><img class="img-fluid rounded mb-4 mb-lg-0" src="http://placehold.it/900x400" alt=""></a>
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">Business Name or Tagline</h1>
        <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
        <a class="btn btn-primary" href="news.html">Call to Action!</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="owl-carousel owl-theme">
		    <div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
		    <div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
			<div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
		    <div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
		    <div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
		    <div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
		    <div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
		    <div class="item">
			  <div class="col mb-4">
			    <div class="card">
			      <a href="news.html"><img src="http://placehold.it/500x325" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <a href=""><h5 class="card-title">Card title</h5></a>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
		    </div>
		</div>
    <!-- /.row -->

  </div>
</section>
<!-- End the odd-blog -->

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

   <script>
    $(document).ready(function(){
            $("#login").click(function(){
              $(".jumbotron").load("login.php");
            });

            $("#postnews").click(function(){
              $(".jumbotron").load("postnews.php");
            });

            $("#logout").click(function(){
              $(".jumbotron").load("logout.php");
            });
            
            
        });
    </script>
</body>
</html>