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
  </header>

   <section class="add-list mt-5 mb-3">
      <div class="add-lilist text-center">
        <h2 class="my-3">Add Your Listing</h2> 
        <p>Add your vape store to our directory</p>
      </div>
      <div class="add-list-form mx-auto">
        <form>
          <div class="basic my-3">
            <h4>Basic Information</h4>
            <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Business Name" id="bname">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Category" id="bcategory">
                  </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Short Description" id="shortdesc"></textarea>
                  </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Detailed Description" id="detaileddesc"></textarea>
                  </div>
                </div>
            </div>
          </div>
          <div class="contact my-3">
            <h4>Contact Information</h4>
            <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Full Address" id="fadd">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select>
                      <option>City</option>
                      <option>City1</option>
                    </select>
                  </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <select>
                      <option>State/Province</option>
                      <option>State1</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Zip Code" id="zcode">
                  </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone Number" id="pno">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Address" id="email">
                  </div>
                </div>
            </div>
          </div>
          <div class="bhours my-3">
            <h4>Business Hours</h4>
              <div class="table-responsive-sm">          
              <table class="table">
                <thead>
                  <tr>
                    <th>Weekdays</th>
                    <th>Status</th>
                    <th>Hours</th>
                    <th>Add Hours</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                       <div class="form-group">
                        <div class="form-sel">
                        <select>
                          <option>Monday</option>
                          <option>Tuesday</option>
                        </select>
                      </div>
                      </div>
                    </td>
                    <td>
                      <!-- <label class="switch"> 
                        <input type="checkbox" checked>
                        <span class="slider round">Open</span>
                      </label> -->
                      <label class="switch">
                        <input type="checkbox" id="togBtn" checked>
                        <div class="slider round"></div>
                      </label>
                    </td>
                    <td>
                      <div class="form-group">
                        <div class="form-sel">
                        <select>
                          <option>08:00 AM - 05:00 PM</option>
                          <option>09:00 AM - 06:00 PM</option>
                        </select>
                      </div>
                      </div>
                    </td>
                    <td>
                      <div class="btn rounded">
                        <a class="btn" href="#">Add <i class="fa fa-plus" aria-hidden="true"></i></a>
                      </div>
                    </td>
                    <td>
                      <div class="btn remove">
                        <a class="btn" href="#">Remove <i class="fa fa-minus" aria-hidden="true"></i></a>
                      </div>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>
                       <div class="form-group">
                        <div class="form-sel">
                        <select>
                          <option>Tuesday</option>
                          <option>Tuesday</option>
                        </select>
                      </div>
                      </div>
                    </td>
                    <td>
                      <label class="switch">
<input type="checkbox" id="togBtn" checked>
<div class="slider round"></div>
</label>
                      <!-- <label class="switch"> 
                        <input type="checkbox" checked>
                        <span class="slider round">Open</span>
                      </label> -->
                    </td>
                    <td>
                      <div class="form-group">
                        <div class="form-sel">
                        <select>
                          <option>08:00 AM - 05:00 PM</option>
                          <option>09:00 AM - 06:00 PM</option>
                        </select>
                      </div>
                      </div>
                    </td>
                    <td>
                      <div class="btn rounded">
                        <a class="btn" href="#">Add <i class="fa fa-plus" aria-hidden="true"></i></a>
                      </div>
                    </td>
                    <td>
                      <div class="btn remove">
                        <a class="btn" href="#">Remove <i class="fa fa-minus" aria-hidden="true"></i></a>
                      </div>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>
                       <div class="form-group">
                        <div class="form-sel">
                        <select>
                          <option>Wednesday</option>
                          <option>Tuesday</option>
                        </select>
                      </div>
                      </div>
                    </td>
                    <td>
                      <label class="switch">
<input type="checkbox" id="togBtn" checked>
<div class="slider round"></div>
</label>
                    </td>
                    <td>
                      <div class="form-group">
                        <div class="form-sel">
                        <select>
                          <option>08:00 AM - 05:00 PM</option>
                          <option>09:00 AM - 06:00 PM</option>
                        </select>
                      </div>
                      </div>
                    </td>
                    <td>
                      <div class="btn rounded">
                        <a class="btn" href="#">Add <i class="fa fa-plus" aria-hidden="true"></i></a>
                      </div>
                    </td>
                    <td>
                      <div class="btn remove">
                        <a class="btn" href="#">Remove <i class="fa fa-minus" aria-hidden="true"></i></a>
                      </div>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>
                       <div class="form-group">
                        <div class="form-sel">
                        <select>
                          <option>Thursday</option>
                          <option>Tuesday</option>
                        </select>
                      </div>
                      </div>
                    </td>
                    <td>
                      <label class="switch">
<input type="checkbox" id="togBtn" checked>
<div class="slider round"></div>
</label>
                    </td>
                    <td>
                      <div class="form-group">
                        <div class="form-sel">
                        <select>
                          <option>08:00 AM - 05:00 PM</option>
                          <option>09:00 AM - 06:00 PM</option>
                        </select>
                      </div>
                      </div>
                    </td>
                    <td>
                      <div class="btn rounded">
                        <a class="btn" href="#">Add <i class="fa fa-plus" aria-hidden="true"></i></a>
                      </div>
                    </td>
                    <td>
                      <div class="btn remove">
                        <a class="btn" href="#">Remove <i class="fa fa-minus" aria-hidden="true"></i></a>
                      </div>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>
                       <div class="form-group">
                        <div class="form-sel">
                        <select>
                          <option>Friday</option>
                          <option>Tuesday</option>
                        </select>
                      </div>
                      </div>
                    </td>
                    <td>
                      <label class="switch">
<input type="checkbox" id="togBtn" checked>
<div class="slider round"></div>
</label>
                    </td>
                    <td>
                      <div class="form-group">
                        <!-- <select>
                          <option>08:00 AM - 05:00 PM</option>
                          <option>09:00 AM - 06:00 PM</option>
                        </select> -->
                      </div>
                    </td>
                    <td>
                      <!-- <div class="btn rounded">
                        <a class="btn" href="#">Add <i class="fa fa-plus" aria-hidden="true"></i></a>
                      </div> -->
                    </td>
                    <td>
                      <!-- <div class="btn remove">
                        <a class="btn" href="#">Remove <i class="fa fa-minus" aria-hidden="true"></i></a>
                      </div> -->
                    </td>
                    
                  </tr>
                  <tr>
                    <td>
                       <div class="form-group">
                        <div class="form-sel">
                        <select>
                          <option>Saturday</option>
                          <option>Tuesday</option>
                        </select>
                      </div>
                      </div>
                    </td>
                    <td>
                      <label class="switch">
<input type="checkbox" id="togBtn" checked>
<div class="slider round"></div>
</label>
                    </td>
                    <td>
                      <div class="form-group">
                        <div class="form-sel">
                        <select>
                          <option>08:00 AM - 05:00 PM</option>
                          <option>09:00 AM - 06:00 PM</option>
                        </select>
                      </div>
                      </div>
                    </td>
                    <td>
                      <div class="btn rounded">
                        <a class="btn" href="#">Add <i class="fa fa-plus" aria-hidden="true"></i></a>
                      </div>
                    </td>
                    <td>
                      <div class="btn remove">
                        <a class="btn" href="#">Remove <i class="fa fa-minus" aria-hidden="true"></i></a>
                      </div>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>
                       <div class="form-group">
                        <div class="form-sel">
                        <select>
                          <option>Sunday</option>
                          <option>Tuesday</option>
                        </select>
                      </div>
                      </div>
                    </td>
                    <td>
                      <label class="switch">
<input type="checkbox" id="togBtn" checked>
<div class="slider round"></div>
</label>
                    </td>
                    <td>
                      <div class="form-group">
                        <div class="form-sel">
                        <select>
                          <option>08:00 AM - 05:00 PM</option>
                          <option>09:00 AM - 06:00 PM</option>
                        </select>
                      </div>
                      </div>
                    </td>
                    <td>
                      <div class="btn rounded">
                        <a class="btn" href="#">Add <i class="fa fa-plus" aria-hidden="true"></i></a>
                      </div>
                    </td>
                    <td>
                      <div class="btn remove">
                        <a class="btn" href="#">Remove <i class="fa fa-minus" aria-hidden="true"></i></a>
                      </div>
                    </td>
                    
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="image my-3">
              <h4>Image and Media</h4>
              <div class="drop-zone my-3">
                <span class="drop-zone__prompt">Drop Files Here <span class="innup"><br/>or <br/>Browse Your Files</span></span>
                <input type="file" name="myFile" class="drop-zone__input">
              </div>
            </div>
            <div class="btns-grp">
              <div class="btn rounded">
                <a class="btn" href="#">Submit Listing</a>
              </div>
               <div class="btn rounded">
                <a class="btn white" href="#">Save as Draft</a>
              </div>
               <div class="btn rounded">
                <a class="btn bg-none" href="#">Cancel</a>
              </div>
            </div>
          </div>
        </form>
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
