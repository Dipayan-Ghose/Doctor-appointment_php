<!DOCTYPE html>
<html>

<head>
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
                    </ul>
                </div>
            </div>
        </nav>
    </header>
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
      
    </script>




    <div class=" text-center mx-auto  mb-3">
    <form action="add.php" method="post">

<table class="table align-items-center justify-content-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Category</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="int" required name="id"></td>
      <td><input type="text" required name="fname"></td>
      <td><input type="text" required name="lname"></td>
      <td><input type="email" required name="email"></td>
      <td><input type="category" required name="category"></td>
    </tr>
  </tbody>
</table>
<br>
  <div class="d-grid gap-2 col-2 mx-auto">
  <input type="submit" class="btn btn-primary " button="Add" data-bs-toggle="modal" data-bs-target="#exampleModal"></div>
 

</form>
</div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  <script src="js/operation.js"></script>
</body>

</html>
