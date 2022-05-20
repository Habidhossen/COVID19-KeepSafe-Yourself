<?php

include 'db_connection.php';
session_start();

// declare variable
$userid = '';
$username = '';
$useremail = '';

$sql = "SELECT * FROM `user_tbl` WHERE Email = '$_SESSION[userEmail]'";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $userid = $row['Id'];
    $username = $row['Name'];
    $useremail = $row['Email'];
}

// when User press backbutton after logout then he/she cannot access again this page without Login and this condition also use for security purpose.
if (!isset($_SESSION['userEmail'])) {
    header("location: index.php");
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
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/955a413869.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>


    <!-- ======= Header starts here ======= -->
    <header class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-0 border-bottom header-design">
        <a href="user_dashboard.php" class="d-flex align-items-center mb-3 mb-lg-0 text-dark text-decoration-none">
            <span class="navbar-brand mb-0 h1 text-success"><b>Covid-19 Keepsafe Yourself</b></span>
        </a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

            <li><a class="nav-link px-2 link-success"><strong><?php /*set default timezone as Asia/Dhaka -->*/ date_default_timezone_set("Asia/Dhaka"); /*now print current day & date -->*/
                                                                echo "Today is " . date("l, F j, Y"); ?></strong></a></li>

        </ul>
        <div class="col-md-3 text-end">

            <button class="btn btn-success btn-sm shadow dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                My Profile</button>
            <ul class="dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item small" href="view_profile.php">View Profile</a></li>
                <li><a class="dropdown-item small" href="edit_profile.php">Edit Profile</a></li>
                <li><a class="dropdown-item small" href="change_password.php">Change Password</a></li>
            </ul>

            <a href="logout.php" class="btn btn-danger btn-sm shadow">Log out</a>
        </div>
    </header>
    <!-- ======= Header ends here======= -->




    <!-- ======= Send-Feedback starts here======= -->
    <div class="send-feedback-card">

        <h5 class="mb-3 fw-bold">Message or Feedback</h5>
        <hr class="my-3">

        <!-- PHP Coding for showing alert -->
        <?php
        if (isset($_SESSION['bookRequestAlert'])) {
        ?>
            <div class="alert alert-light alert-dismissible fade show small" role="alert">
                <strong>Book Request</strong>
                <?php echo $_SESSION['bookRequestAlert'];
                unset($_SESSION['bookRequestAlert']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>


        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

            <div class="form-group row align-items-center text-light">
                <div>
                    <input name="name" disabled class="form-control alert-success" value="<?php echo $userid; ?>">
                </div>
            </div>

            <div class="form-group row align-items-center text-light mt-2">
                <div>
                    <input name="name" disabled class="form-control alert-success" value="<?php echo $username; ?>">
                </div>
            </div>

            <div class="form-group row align-items-center text-light mt-2">
                <div>
                    <input name="name" disabled class="form-control alert-success" value="<?php echo $useremail; ?>">
                </div>
            </div>

            <div class="mt-2">
                <textarea name="address" placeholder="Your messages" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>


            <div class="mt-4">
                <button name="send-feedback" type="submit" class="w-100 register-btn">Send Message</button>
            </div>
        </form>

    </div>
    <!-- ======= Send-Feedback ends here======= -->








    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- Lottie Animation -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- Connect with app.js file -->
    <script src="js/app.js"></script>
</body>

</html>