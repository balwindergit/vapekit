<?php
include_once dirname(__file__)."/config/common.php";
$cities=getUniqueCities();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vape Business Listing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./css/bootstrap.css" rel="stylesheet">
  <link href="./css/owl.carousel.min.css" rel="stylesheet">
  <link href="./css/owl.theme.default.css" rel="stylesheet">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/owl.carousel.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
   <script src="./js/custom.js"></script>
   <link href="./css/style.css" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <script src="https://use.fontawesome.com/c0ec5c3938.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
  
<div class="container-fluid p-3 my-3">
  <header>
    <section class="header">
    <div class="row">
      <div class="col-md-6">
        <div class="left-header d-flex justify-content-between align-items-center">
          <div class="logo-header">
            <img src="./img/logo.png" alt="logo">
          </div>
          <div class="search-header">
            <select>
              <option value="">Select City</option>
              <option value="">New York</option>
            </select>
            <input type="text" placeholder="Search by business name or category">
            <i class="fa fa-search" aria-hidden="true"></i>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-header">
          <nav class="navbar navbar-expand-sm pull-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
           <ul class="navbar-nav menu-list m-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Listings</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item btn btn-dark rounded">
                    <a class="nav-link" href="#">Add Listing <i class="fa fa-plus" aria-hidden="true"></i></a>
                  </li>
                
            </ul>
          </div>
          </nav>
          
        </div>
      </div>
    </div>
  </section>
  <section class="banner my-5">
    <div class="row align-items-center">
      <div class="col-md-6 py-5 align-items-center">
        <div class="left-banner align-items-center">
          <div class="title-banner">
            <h1>Discover the Best <br/>
              Vape Shops Near You</h1>
              <p>Find top-rated vape stores, explore diverse product selections, read detailed reviews, and enjoy exclusive deals. Whether you're a seasoned vaper or just starting out, your ultimate guide to the vaping community starts here</p>
          </div>
          <div class="banner-btns">
              <button class="btn btn-dark">Explore Now</button>
              <button class="btn btn-light">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i>
              </button>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-header">
          <div class="right-one">
            <img src="./img/banner/1.png" alt="ban-1" class="first">
              <img src="./img/banner/4.png" alt="ban-4" class="second">
              <img src="./img/banner/2.png" alt="ban-2" class="third">
                <img src="./img/banner/5.png" alt="ban-1" class="fourth">
                <img src="./img/banner/3.png" alt="ban-3" class="fifth">
                 <img src="./img/banner/6.png" alt="ban-1" class="sixth">
               </div>
            
               
        </div>
      </div>
    </div>
  </section>
  </header>

   <section class="city my-5">
      <h2>Browse by Citys</h2>
    <div class="city-list">
      <div class="city-list-item owl-carousel owl-carousel-city">
	  <?php
		foreach($cities as $index=>$data)
		{	
			if(!empty(trim($data['town'])))
			{
				if($index==0)
				{
					?>
					  <div class="city-list-image item">
			  <img src="images/?i=<?php echo $data['town'];?>" alt="ban-1" style="width:205px;height:253px;">
			  <div class="city-list-content">
				<h3><?php echo $data['town'];?></h3>
				<p>300 Businesses</p>
			  </div>
			 </div>
			 <?php
					
					
				}
				else
				{
					?>
					<div class="city-list-image">
			  <img src="images/?i=<?php echo $data['town'];?>" alt="ban-1" style="width:205px;height:253px;">
			  <div class="city-list-content">
				<h3><?php echo $data['town'];?></h3>
				<p>300 Businesses</p>
			  </div>
			 </div>
			 <?php
					
				}
			}
			// if(!empty(trim($data['town'])))
			// {
				// echo '<a href="business-directory.php?local='.$data['town'].'">'.$data['town'].'</a><br/>';

			// }
		}
?>	  
        
      </div>
      
    </div>
  </section>
  <section class="about my-5 py-5 bg-white">
    <div class="row align-items-center">
      <div class="col-md-5 align-items-center">
        <div class="left-about align-items-center">
          <div class="img-about">
            <img src="./img/about-img.png" alt="about-vape-business" width="100%">
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="right-about px-3">
          <h2>About Us</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum

            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
          </p>
          <div class="list-one d-flex">
            <ul class="list-none p-0">
              <li>Lorem ipsum dolor sit amet, consectetur.</li>
              <li>Lorem ipsum dolor sit amet, consectetur.</li>
              <li>Lorem ipsum dolor sit amet, consectetur.</li>
              <li>Lorem ipsum dolor sit amet, consectetur.</li>
            </ul>
            <ul class="list-none p-0">
              <li>Lorem ipsum dolor sit amet, consectetur.</li>
              <li>Lorem ipsum dolor sit amet, consectetur.</li>
              <li>Lorem ipsum dolor sit amet, consectetur.</li>
              <li>Lorem ipsum dolor sit amet, consectetur.</li>
            </ul>
          </div>
            
               
        </div>
      </div>
    </div>
  </section>
  <section class="states my-5">
      <h2>Stores in New York</h2>
    <div class="states-list">
      <div class="states-list-item owl-carousel owl-carousel-states">
        <div class="states-list-image item">
          <img src="./img/state/state1.png" alt="ban-1">
          <div class="states-list-content">
            <div class="states-tit d-flex justify-content-between align-items-center">
              <h4 class="my-1">Vapor Haven</h4>
              <p class="d-flex my-1">4.9/5 <span><i class="fa fa-star" aria-hidden="true"></i>
</span></p>
            </div>
            <p>State-of-the-art gym facilities and personalized training programs...</p>
            <div class="states-address d-flex">
              <p class="m-0"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>129 NE. Jamaica, NY 11432
</span></p>
            </div>
          </div>
         </div>
         <div class="states-list-image item">
          <img src="./img/state/state2.png" alt="ban-1">
          <div class="states-list-content">
            <div class="states-tit d-flex justify-content-between align-items-center">
              <h4 class="my-1">Vapor Haven</h4>
              <p class="d-flex my-1">4.9/5 <span><i class="fa fa-star" aria-hidden="true"></i>
</span></p>
            </div>
            <p>State-of-the-art gym facilities and personalized training programs...</p>
            <div class="states-address d-flex">
              <p class="m-0"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>129 NE. Jamaica, NY 11432
</span></p>
            </div>
          </div>
         </div>
         <div class="states-list-image item">
          <img src="./img/state/state3.png" alt="ban-1">
          <div class="states-list-content">
            <div class="states-tit d-flex justify-content-between align-items-center">
              <h4 class="my-1">Vapor Haven</h4>
              <p class="d-flex my-1">4.9/5 <span><i class="fa fa-star" aria-hidden="true"></i>
</span></p>
            </div>
            <p>State-of-the-art gym facilities and personalized training programs...</p>
            <div class="states-address d-flex">
              <p class="m-0"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>129 NE. Jamaica, NY 11432
</span></p>
            </div>
          </div>
         </div>
         <div class="states-list-image item">
          <img src="./img/state/state4.png" alt="ban-1">
          <div class="states-list-content">
            <div class="states-tit d-flex justify-content-between align-items-center">
              <h4 class="my-1">Vapor Haven</h4>
              <p class="d-flex my-1">4.9/5 <span><i class="fa fa-star" aria-hidden="true"></i>
</span></p>
            </div>
            <p>State-of-the-art gym facilities and personalized training programs...</p>
            <div class="states-address d-flex">
              <p class="m-0"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>129 NE. Jamaica, NY 11432
</span></p>
            </div>
          </div>
         </div>
         <div class="states-list-image item">
          <img src="./img/state/state5.png" alt="ban-1">
          <div class="states-list-content">
            <div class="states-tit d-flex justify-content-between align-items-center">
              <h4 class="my-1">Vapor Haven</h4>
              <p class="d-flex my-1">4.9/5 <span><i class="fa fa-star" aria-hidden="true"></i>
</span></p>
            </div>
            <p>State-of-the-art gym facilities and personalized training programs...</p>
            <div class="states-address d-flex">
              <p class="m-0"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>129 NE. Jamaica, NY 11432
</span></p>
            </div>
          </div>
         </div>
         <div class="states-list-image item">
          <img src="./img/state/state1.png" alt="ban-1">
          <div class="states-list-content">
            <div class="states-tit d-flex justify-content-between align-items-center">
              <h4 class="my-1">Vapor Haven</h4>
              <p class="d-flex my-1">4.9/5 <span><i class="fa fa-star" aria-hidden="true"></i>
</span></p>
            </div>
            <p>State-of-the-art gym facilities and personalized training programs...</p>
            <div class="states-address d-flex">
              <p class="m-0"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>129 NE. Jamaica, NY 11432
</span></p>
            </div>
          </div>
         </div>
      </div>
      
    </div>
  </section>
  <section class="states my-5">
      <h2>Stores in Las Vegas</h2>
    <div class="states-list">
      <div class="states-list-item owl-carousel owl-carousel-stat">
        <div class="states-list-image item">
          <img src="./img/state/state1.png" alt="ban-1">
          <div class="states-list-content">
            <div class="states-tit d-flex justify-content-between align-items-center">
              <h4 class="my-1">Vapor Haven</h4>
              <p class="d-flex my-1">4.9/5 <span><i class="fa fa-star" aria-hidden="true"></i>
</span></p>
            </div>
            <p>State-of-the-art gym facilities and personalized training programs...</p>
            <div class="states-address d-flex">
              <p class="m-0"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>129 NE. Jamaica, NY 11432
</span></p>
            </div>
          </div>
         </div>
         <div class="states-list-image item">
          <img src="./img/state/state2.png" alt="ban-1">
          <div class="states-list-content">
            <div class="states-tit d-flex justify-content-between align-items-center">
              <h4 class="my-1">Vapor Haven</h4>
              <p class="d-flex my-1">4.9/5 <span><i class="fa fa-star" aria-hidden="true"></i>
</span></p>
            </div>
            <p>State-of-the-art gym facilities and personalized training programs...</p>
            <div class="states-address d-flex">
              <p class="m-0"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>129 NE. Jamaica, NY 11432
</span></p>
            </div>
          </div>
         </div>
         <div class="states-list-image item">
          <img src="./img/state/state4.png" alt="ban-1">
          <div class="states-list-content">
            <div class="states-tit d-flex justify-content-between align-items-center">
              <h4 class="my-1">Vapor Haven</h4>
              <p class="d-flex my-1">4.9/5 <span><i class="fa fa-star" aria-hidden="true"></i>
</span></p>
            </div>
            <p>State-of-the-art gym facilities and personalized training programs...</p>
            <div class="states-address d-flex">
              <p class="m-0"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>129 NE. Jamaica, NY 11432
</span></p>
            </div>
          </div>
         </div>
         <div class="states-list-image item">
          <img src="./img/state/state5.png" alt="ban-1">
          <div class="states-list-content">
            <div class="states-tit d-flex justify-content-between align-items-center">
              <h4 class="my-1">Vapor Haven</h4>
              <p class="d-flex my-1">4.9/5 <span><i class="fa fa-star" aria-hidden="true"></i>
</span></p>
            </div>
            <p>State-of-the-art gym facilities and personalized training programs...</p>
            <div class="states-address d-flex">
              <p class="m-0"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>129 NE. Jamaica, NY 11432
</span></p>
            </div>
          </div>
         </div>
         <div class="states-list-image item">
          <img src="./img/state/state3.png" alt="ban-1">
          <div class="states-list-content">
            <div class="states-tit d-flex justify-content-between align-items-center">
              <h4 class="my-1">Vapor Haven</h4>
              <p class="d-flex my-1">4.9/5 <span><i class="fa fa-star" aria-hidden="true"></i>
</span></p>
            </div>
            <p>State-of-the-art gym facilities and personalized training programs...</p>
            <div class="states-address d-flex">
              <p class="m-0"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>129 NE. Jamaica, NY 11432
</span></p>
            </div>
          </div>
         </div>
         <div class="states-list-image item">
          <img src="./img/state/state1.png" alt="ban-1">
          <div class="states-list-content">
            <div class="states-tit d-flex justify-content-between align-items-center">
              <h4 class="my-1">Vapor Haven</h4>
              <p class="d-flex my-1">4.9/5 <span><i class="fa fa-star" aria-hidden="true"></i>
</span></p>
            </div>
            <p>State-of-the-art gym facilities and personalized training programs...</p>
            <div class="states-address d-flex">
              <p class="m-0"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>129 NE. Jamaica, NY 11432
</span></p>
            </div>
          </div>
         </div>
      </div>
      
    </div>
  </section>
  <section class="how-it my-5">
    <div class="how-inside py-3">
      <div class="how-con text-center">
          <h2>How It Works</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
      </div>
      <div class="how-info my-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="col-arr d-flex justify-content-center align-items-center flex-column">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <h2 class="my-3">Find interesting places</h2>
                <p>Lorem ipsum dolor sit amet</p>
              </div>
            </div>
             <div class="col-md-4">
               <div class="col-arr d-flex justify-content-center align-items-center flex-column">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <h2 class="my-3">Find interesting places</h2>
                <p>Lorem ipsum dolor sit amet</p>
              </div>
            </div>
            <div class="col-md-4">
               <div class="col-arr no-arr d-flex justify-content-center align-items-center flex-column">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <h2 class="my-3">Find interesting places</h2>
                <p>Lorem ipsum dolor sit amet</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="blog-sec my-5 bg-dark">
    <div class="blog-inside">
      <div class="blog-con text-center">
          <h2>Read Our Blogs</h2>
          <p>Get latest update from our platform</p>
      </div>
      <div class="blog-info mt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="blog-arr">
                <div class="blog-img">
                  <img src="./img/blog/blog.png" alt="blog" width="100%">
                </div>
                <div class="blogs-con">
                 <h5>Vape Info</h5>
                  <h2>Experience the vape</h2>
                  <p>Get up close and personal with nature on our wildlife safaris...</p>
                  <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
             <div class="col-md-3">
              <div class="blog-arr">
                <div class="blog-img">
                  <img src="./img/blog/blog.png" alt="blog" width="100%">
                </div>
                <div class="blogs-con">
                 <h5>Vape Info</h5>
                  <h2>Experience the vape</h2>
                  <p>Get up close and personal with nature on our wildlife safaris...</p>
                  <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="blog-arr">
                <div class="blog-img">
                  <img src="./img/blog/blog.png" alt="blog" width="100%">
                </div>
                <div class="blogs-con">
                 <h5>Vape Info</h5>
                  <h2>Experience the vape</h2>
                  <p>Get up close and personal with nature on our wildlife safaris...</p>
                  <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="blog-arr">
                <div class="blog-img">
                  <img src="./img/blog/blog.png" alt="blog" width="100%">
                </div>
                <div class="blogs-con">
                 <h5>Vape Info</h5>
                  <h2>Experience the vape</h2>
                  <p>Get up close and personal with nature on our wildlife safaris...</p>
                  <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <section class="newsletter-sec my-5 bg-white">
      <div class="news-con d-flex flex-column align-items-center">
          <h2>Subscribe Our Newsletter</h2>
          <p>Get latest update from our platform</p>
          <form class="subs-form d-flex flex-column">
              <input type="text" class="border no-border" placeholder="name@example.com">
              <input type="submit" name="Subscribe" class="text-white text-center">
          </form>
          <p class="my-3 text-center">Read our terms and condition</p>
      </div>
   </section>
   <footer>
     <section class="footer">
        <div class="row">
          <div class="col-md-4">
            <div class="logo-footer">
              <img src="./img/logo.png" alt="logo">
            </div>
            <div class="footer-con mt-3">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="use-links">
              <h6>Use Cases</h6>
              <ul class="p-0">
                <li class="px-0"><a href="#">UI Design</a></li>
                <li class="px-0"><a href="#">UX Design</a></li>
                <li class="px-0"><a href="#">Wireframing</a></li>
                <li class="px-0"><a href="#">Diagramming</a></li>
                <li class="px-0"><a href="#">Brainstorming</a></li>
                <li class="px-0"><a href="#">Online Whiteboard</a></li>
                <li class="px-0"><a href="#">Team Collaboration</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
             <div class="explore-links">
              <h6>Explore</h6>
              <ul class="p-0">
                <li class="px-0"><a href="#">Design</a></li>
                <li class="px-0"><a href="#">Prototyping</a></li>
                <li class="px-0"><a href="#">Development Features</a></li>
                <li class="px-0"><a href="#">Design Systems</a></li>
                <li class="px-0"><a href="#">Collaboration Features</a></li>
                <li class="px-0"><a href="#">Design Process</a></li>
                <li class="px-0"><a href="#">FigJam</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <div class="explore-links">
              <h6>Resources</h6>
              <ul class="p-0">
                <li class="px-0"><a href="#">Blog</a></li>
                <li class="px-0"><a href="#">Best Practices</a></li>
                <li class="px-0"><a href="#">Colors</a></li>
                <li class="px-0"><a href="#">Color Wheel</a></li>
                <li class="px-0"><a href="#">Support</a></li>
                <li class="px-0"><a href="#">Developers</a></li>
                <li class="px-0"><a href="#">Resource Library</a></li>
              </ul>
            </div>
          </div>
        </div>
        <p class="text-center my-3 copyright">© Copyright 2024 All Right Reserved</p>
   </footer>
</div>


</body>
</html>
