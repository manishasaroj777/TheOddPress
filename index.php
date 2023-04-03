<?php
session_start();
include("connect.php");

if(isset($_SESSION['roleid']))
{
  $s=$_SESSION['roleid'];
}

$sql1 = "SELECT * FROM `postnews` where sid=1 Order by pid DESC limit 4";//tranding 1
$sql2 = "SELECT * FROM `postnews` where sid=2 Order by pid DESC limit 4";//world 2
$sql3 = "SELECT * FROM `postnews` where sid=3 Order by pid DESC limit 4";//fitlife 3
$sql4= "SELECT * FROM `postnews` where sid=4 Order by pid DESC limit 4";//entertainment 4
$sql5 = "SELECT * FROM `postnews` where sid=5 Order by pid DESC limit 4";//sports 5
$sql6 = "SELECT * FROM `postnews` where sid=6 Order by pid DESC limit 4";//odd-blog 6
$top = "SELECT * FROM `postnews` where sid=7 Order by pid DESC limit 1";//tranding 1
$topquery1 = mysqli_query($con,$top);
$query1 = mysqli_query($con,$sql1);
$query2 = mysqli_query($con,$sql2);
$query3 = mysqli_query($con,$sql3);
$query4 = mysqli_query($con,$sql4);
$query5 = mysqli_query($con,$sql5);
$query6 = mysqli_query($con,$sql6);



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
			<!-- start nav -->
	<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#" style="color: white;"><img src="img/logo/top2.jpeg" alt="" class="img-fluid"></a>
			
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

		      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Administrator
             </button>

             <!--  <li class="nav-item active">
		        <a class="nav-link text-white" href="#" id="login">Login</a>
		      </li>  -->

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

             
		      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
              Post Add
             </button>

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
	</nav><!-- end nav -->


<!-- star header-main -->
<div class="header-main">
	<div class="container">
		<div class="row">
			<?php
              if(mysqli_num_rows($topquery1) > 0)
			      {
			        while($tq1r1= mysqli_fetch_array($topquery1))
					{

			?>
			<div class="col-12">
				<div class="card mb-3">
				 <a href='news.php?t1=<?php echo $tq1r1[0];?>'><img src="<?php echo $tq1r1[4]?>" class="card-img-top" alt="..." width="100%"></a>
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $tq1r1[1]?></p>
				    <p class="card-text"><small class="text-muted"><?php echo $tq1r1[2]?></small></p>
				  </div>
				</div>
			</div>
		<?php
		}
	}
		?>	
			<div class="col-12">

				<div class="card-deck">
			  <?php
			  $tops2 = "SELECT * FROM `postnews` where sid=7 Order by pid DESC limit 3";
			  $topquery2 = mysqli_query($con,$tops2);

              if(mysqli_num_rows($topquery2) > 0)
			      {
			        while($tq2r1= mysqli_fetch_array($topquery2))
					{

			   ?>
				  <div class="card">
				   <a href='news.php?t1=<?php echo $tq2r1[0];?>'><img src="<?php echo $tq2r1[4]?>" class="card-img-top" alt="..." width="100%"></a>
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $tq2r1[1]?></p>
				    <p class="card-text"><small class="text-muted"><?php echo $tq2r1[2]?></small></p>
				  </div>
				  </div>
				  <?php
                  }

                 }   
				  ?>
				  <!-- <div class="card">
				    <img src="https://im.indiatimes.in/content/2020/Jun/Baba-Karnail-Singh_5ed49ac5192f4.jpg?w=2184&h=1116&cc=1" class="card-img-top" alt="...">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <div class="card">
				    <img src="https://im.indiatimes.in/content/2020/Jun/Baba-Karnail-Singh_5ed49ac5192f4.jpg?w=2184&h=1116&cc=1" class="card-img-top" alt="...">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div> -->
				</div>


			</div><!--end of col-->
		</div>		
	</div><!--end of container-->	
</header><!-- End header-main -->


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
	    	<?php
				  $trd = "SELECT * FROM `postnews` where sid=1 Order by pid DESC limit 1";
                  $q1 = mysqli_query($con,$trd);
                  if(mysqli_num_rows($q1) > 0)
			      {
			        while($r1= mysqli_fetch_array($q1))
					{

		?>		
	       <a href='news.php?t1=<?php echo $r1[0];?>'><img class="img-fluid" src="<?php echo $r1[4]?>" alt=""></a>
	    </div>
	    <div class="col-md-4">
	      <h3 class="my-3"><?php echo $r1[1]?></p>
	      <h3 class="my-3"><?php echo $r1[2]?></h3>
	    </div>
	    <?php
       }
      } 

	    ?>
	  </div>
	  <!-- /.row -->
	  <!-- Related Projects Row -->
      

	  <h3 class="my-4">Related</h3>
	  <div class="row">
	  	 <?php	
			if(mysqli_num_rows($query1) > 0)
			{
			 while($row1= mysqli_fetch_array($query1))
					{
		 ?>	
	    <div class="col-md-3 col-sm-6 mb-4">
	      <a href='news.php?t1=<?php echo $row1[0];?>'>
	            <img class="img-fluid" src="<?php echo $row1[4]  ?>" alt="no image fetch">
	            <p><?php echo $row1[1]?></p>
	      </a>
	    </div>
	    <?php
                }
           }
	    ?>
	    


       




	   
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
       <?php	
			if(mysqli_num_rows($query2) > 0)
			{
			 while($row2= mysqli_fetch_array($query2))
					{
		?>	
      <div class="row">
        <div class="col-md-7">
         <a href='news.php?t1=<?php echo $row2[0];?>'>
            <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo $row2[4]  ?>" alt="">
          </a>
        </div>
        <div class="col-md-5">
           <a href='news.php?t1=<?php echo $row2[0];?>'><h3><?php echo $row2[1]?></h3></a>
          <p><?php echo $row2[2]?></p>
          <a class="btn btn-primary" href='news.php?t1=<?php echo $row2[0];?>'>View More</a>
        </div>
         
      </div>
      <!-- /.row -->
      <hr>
     <?php
       }
      }
      
      ?>
     
      
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
    	 <?php	
			if(mysqli_num_rows($query3) > 0)
			{
			 while($row3= mysqli_fetch_array($query3))
					{
		?>	

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <a href='news.php?t1=<?php echo $row3[0];?>'><img class="card-img-top" src="<?php echo $row3[4]?>" alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo $row3[1]?></h4></a>
            <p class="card-text"><?php echo $row3[2]?></p>
          </div>
          <div class="card-footer">
             <a href='news.php?t1=<?php echo $row3[0];?>'>Find Out More!</a>
          </div>
        </div>
      </div>

      <?php
       }
      } 

      ?>

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
   <?php	
	if(mysqli_num_rows($query4) > 0)
	{
	 while($row4= mysqli_fetch_array($query4))
			{
    ?>		

     <div class="col-lg-6 mb-4">
      <div class="card h-100">
        <a href='news.php?t1=<?php echo $row4[0];?>'><img class="card-img-top" src="<?php echo $row4[4]  ?>" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href='news.php?t1=<?php echo $row4[0];?>'><?php echo $row4[1]; ?></a>
          </h4>
          <p class="card-text"><?php echo $row4[2]; ?></p>
        </div>
      </div>
    </div> 
    <?php
            }
    }
    ?> 
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
         <div class="row text-center">
		 <?php	
			if(mysqli_num_rows($query5) > 0)
			{
			 while($row5= mysqli_fetch_array($query5))
					{
		 ?>	

		  <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <a href='news.php?t1=<?php echo $row5[0];?>'><img class="card-img-top" src="<?php echo $row5[4]?>" alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo $row5[1]?></h4></a>
            <p class="card-text"><?php echo $row5[2]?></p>
          </div>
        </div>
      </div>	
			<?php
              }
             } 
			?>
		</div><!-- end of owl-carousel owl-theme -->
		  
		
	</div><!--end of container-->
</section>
<!-- End sports -->

<!-- start the odd-blog -->
<section class="Odd-blog pt-2" id="Odd-blog" style="background-color: white;">
	<div class="container">
	<h3 class="p-2 mt-2" style="background-color: #ff2143; color: white;">Odd-blog</h3>
    <!-- Heading Row -->
   <?php
    $odbg = "SELECT * FROM `postnews` where sid=6 Order by pid DESC limit 1";
    $q6 = mysqli_query($con,$odbg);
    $r6= mysqli_fetch_array($q6)

   ?> 
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <a href='news.php?t1=<?php echo $r6[0];?>'><img class="img-fluid rounded mb-4 mb-lg-0" src="<?php echo $r6[4]  ?>" alt=""></a>
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <a href='news.php?t1=<?php echo $r6[0];?>'><h1 class="font-weight-light" ><?php echo $r6[1]  ?></h1></a>
        <p><?php echo $r6[2]  ?></p>
        <a class="btn btn-primary" href='news.php?t1=<?php echo $r6[0];?>'>Call to Action!</a>
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
    <div class="row text-center">
    	 <?php	
			if(mysqli_num_rows($query6) > 0)
			{
			 while($row6= mysqli_fetch_array($query6))
					{
		 ?>	
		     <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <a href='news.php?t1=<?php echo $row6[0];?>'><img class="card-img-top" src="<?php echo $row6[4]?>" alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo $row6[1]?></h4></a>
            <p class="card-text"><?php echo $row6[2]?></p>
          </div>
        </div>
      </div>
		  <?php
		   }
		  } 
		  ?>  
	</div>
    <!-- /.row -->

  </div>
</section><!-- container -->
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


<!-- post news form display -->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" id="form1" action="verifyMe.php">  
   <?php 
     if(!isset($_SESSION['uName']))
        {
   ?>       
   <div class="form-group">
    <label for="un">User Name</label>
    <input type="Text" class="form-control" id="un" name="un" ></div>
   <div class="form-group">

    <label for="Password">Password</label>
    <input type="password" class="form-control" id="pass" name="pass">
  </div>
  
    <button id="btnLogin" type="submit" class="btn btn-primary">Login</button>
  <?php 
  }
  else
  {
  ?>
    <div class="form-group">
    <label for="un">User Name</label>
    <input type="Text" class="form-control" id="un" name="un" value=<?php 
     echo $_SESSION['uName']; ?>></div>
   <div class="form-group">

    <label for="Password">Password</label>
    <input type="password" class="form-control" id="pass" name="pass">
  </div>
  
    <button id="btnLogin" type="submit" class="btn btn-primary">Login</button>
  
 <?php 
  } 
  ?>
     </form>
      </div>
      
    </div>
  </div>
</div>

<!-- end of form display -->



<!-- post news form display -->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Post News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php
       include("loding.php");
       //include("connect.php"); 
       ?>

      <form method="post" action="savepostnew.php" enctype="multipart/form-data">
      <div class="form-group">
      <label for="tit">Title</label>
      <input type="Text" class="form-control"  name="tit" >
     </div>

      <div class="form-group">
      <label for="tit">Add Short Description</label>
      <input type="Text" class="form-control"  name="short" >
     </div>

    <div class="form-group">
      <label for="desc">Add Description</label>
      <textarea class="form-control"  name="desc"></textarea>
    </div>

    <div class="form-group">
     <label for="photo">upload image</label>
     <input type="file" class="form-control"  name="file">
    </div> 

    <div>Select Category</div>
       <div>
        <select name="category"  class="form-control">
          <option value="">select Your Category</option>
          <?php
            $c = new loding();
            $c->loadcategory();
          ?>
        </select>
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="btn1" class="btn btn-primary" value="save post">
      </div>
     
     </form>
      </div>
      
    </div>
  </div>
</div>

<!-- end of form display -->


	
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