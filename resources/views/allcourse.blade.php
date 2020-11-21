<!doctype html>
<html lang="en">
  <head>
    <title>All Course</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
      
    table, th, td
    {
    border: 1px solid black;
    padding: 5px;
    }
  
   table
   {
   border-spacing: 15px;
   }
 
    </style>
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index">University</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index">Home</a>
              </li>

              <li class="nav-item">
                 <a class="nav-link"  href="addcourse">Add Couses</a>
              </li>


               <li class="nav-item">
                <a class="nav-link"  href="createcourse">Create Courses</a>
              </li>


              
              <li class="nav-item">
                <a class="nav-link"  href="allcourse">Show All students and their Courses</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="login">Login</a> / <a href="register">Register</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/project-2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">All Registered Courses</h1>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
   
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-5">Info About all Student and their taken courses</h2>
              <form action="#" method="post">
                <div class="row">
               <div class="col-md-6 form-group">
                <table >
               

                <tr>
                   <th> <h1><b style="color: black;" >*</b></h1></th>
                   <th> <h1><b style="color: red;" >Name</b></h1></th>
                   <th><b style="color: blue;" >Courses</b></th>
                   <th><b style="color: blue;" >ID</b></th>
                     

                </tr>
                  
                 @foreach ($allstu as $student)
                   <tr>
                    <td> <h1><b style="color: black;" ></b></h1></td>
                    <td> <h1><b style="color: green;" >{{$student->Name}}</b></h1></td>
                    <td>{{$student->Courses}}</td>
                    <td>{{$student->id}}<br><br></td>
                   </tr>
                 @endforeach
                  

               </table>
                  </div>
                </div>
                <!--   <h1>
                    <h3> 
                      <b>{{$student->Name}}</b>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{$student->Courses}}
                  
                     </h3> 
                      </p>
                    -->
                 
                  
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!-- END footer -->
    
    <!-- loader -->
  
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>