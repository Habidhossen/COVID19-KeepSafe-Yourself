<!-- PHP Coding... -->
<?php

session_start();
include 'db_connection.php';

if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $nid = $_POST['nid'];
  $dob = $_POST['dob'];
  $mobile = $_POST['mobile'];
  $city = $_POST['city'];
  $address = $_POST['address'];

  $emailQuery = "SELECT * FROM `user_tbl` WHERE Email = '$email'";
  $query = mysqli_query($connection, $emailQuery);
  $emailCount = mysqli_num_rows($query);

  if ($emailCount > 0) {
    $_SESSION['emailExistsAlert'] = 'Email already exists! Please enter a valid email.';
    header("location: signup.php");
    exit;
  } else {
    $sql = "INSERT INTO `user_tbl`(`Name`, `Email`, `Password`, `NID`, `DOB`, `Mobile`, `City`, `Address`) VALUES ('$name','$email','$password','$nid','$dob','$mobile','$city','$address')";
    $query = mysqli_query($connection, $sql);
    header("location: registration_success.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Title -->
  <title>COVID19 - KeepSafe Yourself</title>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/955a413869.js" crossorigin="anonymous"></script>
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!----------------------------------
            Header start here...
    ---------------------------------->
  <header>
    <nav class="navbar navbar-expand-lg bg-light py-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">COVID19</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex justify-content-center" href="#"><span>
                  <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_4eo2289h.json" background="transparent" speed="1" style="width: 26px; height: 26px" loop autoplay></lottie-player>
                </span>
                Live Update</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Covid Test
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Covid Test</a></li>
                <li><a class="dropdown-item" href="#">Covid Report</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Treatment
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Symptom</a></li>
                <li><a class="dropdown-item" href="#">Prevention</a></li>
                <li><a class="dropdown-item" href="#">Treatment</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Doctor's Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
          <a class="register-btn" href="signup.php">Register</a>
        </div>
      </div>
    </nav>
  </header>

  <!----------------------------------
            Main start here...
    ---------------------------------->
  <main>
    <!-- Create new account -->
    <section class="registration-section">
      <div class="container bg-light rounded-3 p-5">
        <div class="row row-cols-1 row-sm-cols-1 row-cols-md-2 row-cols-lg-2 g-3 align-items-center">
          <!-- left part -->
          <div class="col">
            <div class="register-left-part p-3">
              <h2>Create new account</h2>
              <p>
                Create account and access all features.
              </p>
              <img class="img-fluid mt-5" src="images/registration-cover.svg" alt="" />
            </div>
          </div>
          <!-- right part -->
          <div class="col">
            <div>
              <!-- form start -->
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="mb-3">
                  <label for="" class="form-label">Full name</label>
                  <input type="text" class="form-control form-control" name="name" required />
                </div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 mb-3">
                  <div class="col">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control form-control" name="email" required />
                  </div>
                  <div class="col">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control form-control" name="password" required />
                  </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 mb-3">
                  <div class="col">
                    <label for="" class="form-label">NID</label>
                    <input type="number" class="form-control form-control" name="nid" required />
                  </div>
                  <div class="col">
                    <label for="" class="form-label">Date of birth</label>
                    <input type="date" class="form-control form-control" name="dob" required />
                  </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 mb-3">
                  <div class="col">
                    <label for="" class="form-label">Mobile no</label>
                    <input type="text" class="form-control form-control" name="mobile" required />
                  </div>
                  <div class="col">
                    <label for="" class="form-label">City</label>
                    <input type="text" class="form-control form-control" name="city" required />
                  </div>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                  <textarea name="address" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button name="submit" type="submit" class="btn register-btn w-100">
                  Register
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Admin Login Page -->
  </main>

  <!-- Bootstrap JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <!-- Lottie Animation -->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <!-- Connect with app.js file -->
  <script src="js/app.js"></script>
</body>

</html>