<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Appointment</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="container" style="background-color: #EEF2E6 ;">
    <header class="mt-3">
        <nav class="navbar navbar-expand-lg rounded " style="background-color: #37E2D5;">
            <div class="container-fluid">
                <a class="navbar-brand fs-3 dasColor" href="#">Doctor Appointment System</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav fs-5">
                        <li class="nav-item">
                            <a onclick="home()" class="nav-link hover" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Info Management
                            </a>
                            <ul class="dropdown-menu">
                                <li><a onclick="addDoctor()" class="dropdown-item" href="#">Add Doctor</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a onclick="updelDoctor()" class="dropdown-item" href="#">Update/Delete</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover" href="#">Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a onclick="docProfile()" class="nav-link hover" href="#">Doctor Profile</a>
                           
                        </li>
                        <li class="nav-item">
                            <a onclick="logout()" class="nav-link hover" href="#">Logout</a>
                           
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<main class="mt-3" >
    <div class="mx-auto">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active "data-bs-interval="3000">
      <img src="pic/pic1.jpg" class="d-block w-75 mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Doctor Management</h5>
        
      </div>
    </div>
    <div class="carousel-item " data-bs-interval="3000">
      <img src="pic/pic2.png" class="d-block w-75 mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="pic/pic3.jpeg" class="d-block w-75 mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
</main>


    <script>
        function docProfile() {
            location.replace("http://localhost/fatto/doctorProfile.php")
        }
        function addDoctor(){
            location.replace("http://localhost/fatto/table.php")

        }
        function home(){
            location.replace("http://localhost/fatto/index.php")

        }
        function updelDoctor(){
            location.replace("http://localhost/fatto/show.php")
        }
        function logout(){
            location.replace("http://localhost/fatto/logout.php")

        }
    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <script src="js/operation.js"></script>
</body>

</html>