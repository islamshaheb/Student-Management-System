<!doctype html>
<html lang="en">
  <head>
    <title>CREATE COURSE</title>
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
               <li class="nav-item">
                 <a class="nav-link"  href="addcourse">Add Couses</a>
              </li>


               <li class="nav-item">
                <a class="nav-link"  href="createcourse">Create Courses</a>
              </li>


              
              <li class="nav-item">
                <a class="nav-link"  href="allcourse">Show All students Their Courses</a>
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

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/project-7.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate" style="background-color:black">
              <h1 class="mb-2">Already Created Courses</h1>
              <p class="bcrumb">

        <table border="2">
               

                <tr>
                   <th><b style="color: black;">*</b></th>
                   <th> <b style="color: red;">Course Name</b></th>
                   <th><b style="color: red;">Courses Code</b></th>
                   <th><b style="color: red;">Department Name</b></th>
                     

                </tr>
                  
                 @foreach ($allstu as $student)
                   <tr>
                    <td> <b style="color: black;" ></b></td>
                    <td> <b style="color: green;" >{{$student->name}}</b></td>
                    <td>{{$student->code}}</td>
                    <td>{{$student->department}}<br><br></td>
                   </tr>
                 @endforeach
               </table>
               <
                <a href="index">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current"><a href="register">Register</a></span>


              </p>
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
              <h2 class="mb-5">Create new courses</h2>


              <form action="{{ route('save') }} "method="post">
                {{ csrf_field() }}

                  <!-- 
                   <input class="input--style-3" type="text" placeholder="Name" name="name">
                  -->
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Courese full Name</label>
                      <input type="text" name="na" class="form-control py-2">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="code">Course Code</label>
                      <input type="text" name="co" class="form-control py-2 ">
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-md-12 form-group">
                      <label for="code">Re-type Course Code</label>
                      <input type="text" name="co" class="form-control py-2">
                    </div>
                  </div>

                  <div class="row mb-5">
                    <div class="col-md-12 form-group">
                      <label for="department">Dept name</label>
                      <input type="text" name="de" class="form-control py-2">
                    </div>
                  </div>

                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Submit" class="btn btn-primary px-5 py-2">
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
    
    
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