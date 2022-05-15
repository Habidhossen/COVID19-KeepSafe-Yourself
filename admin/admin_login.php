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
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <!----------------------------------
            Header start here...
    ---------------------------------->
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
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
                            <a class="nav-link" href="#">Home</a>
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
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    </ul>
                    <a class="register-btn" href="">Register</a>
                </div>
            </div>
        </nav>
    </header>

    <!----------------------------------
            Main start here...
    ---------------------------------->

    <!-- Login Page -->
    <section>
        <div class="col-4 mx-auto login-bg">
            <h1 class="login-title">Admin Login</h1>
            <hr>
            <form action="">
                <input type="email" name="email" placeholder="Email address" required class="form-control form-control mb-3 mt-4" />
                <input type="password" name="password" placeholder="Password" required class="form-control form-control mb-4" />
                <button type="submit" class="btn login-btn w-100">Login</button>
            </form>
        </div>
    </section>


    <!----------------------------------
            Footer start here...
    ---------------------------------->
    <footer></footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- Lottie Animation -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- Connect with app.js file -->
    <script src="js/app.js"></script>
</body>

</html>