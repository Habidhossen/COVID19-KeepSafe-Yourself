<?php

include '../db_connection.php';
session_start();

// when User press backbutton after logout then he/she cannot access again this page without Login and this condition also use for security purpose.
if (!isset($_SESSION['adminEmail'])) {
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COVID19 - KeepSafe Yourself</title>
    <!-- Box-icons -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/admin.css" />
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="dashboard.php" class="brand">
            <i class="bx bxs-virus"></i>
            <span class="text">COVID-19</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="dashboard.php">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="reg_patients.php">
                    <i class="bx bxs-user-detail"></i>
                    <span class="text">Registered Patient</span>
                </a>
            </li>
            <li>
                <a href="covid_test.php">
                    <i class="bx bx-test-tube"></i>
                    <span class="text">Covid Test</span>
                </a>
            </li>
            <li>
                <a href="report.php">
                    <i class="bx bxs-file-blank"></i>
                    <span class="text">Report</span>
                </a>
            </li>
            <li class="active">
                <a href="doctors_video.php">
                    <i class='bx bxs-videos'></i>
                    <span class="text">Doctor's Video</span>
                </a>
            </li>
            <li>
                <a href="view_feedback.php">
                    <i class='bx bxs-chat'></i>
                    <span class="text">Message and Feedback</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu top">
            <li>
                <a href="view_profile.php">
                    <i class="bx bxs-group"></i>
                    <span class="text">Admin</span>
                </a>
            </li>
            <li>
                <a href="edit_profile.php">
                    <i class="bx bxs-edit"></i>
                    <span class="text">Edit Profile</span>
                </a>
            </li>
            <li>
                <a href="change_password.php">
                    <i class="bx bx-lock-alt"></i>
                    <span class="text">Change Password</span>
                </a>
            </li>
            <li>
                <a href="logout.php" class="logout">
                    <i class="bx bxs-log-out-circle"></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class="bx bx-menu"></i>
            <!-- <a href="#" class="nav-link">Search</a> -->
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search..." />
                    <button type="submit" class="search-btn">
                        <i class="bx bx-search"></i>
                    </button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden />
            <label for="switch-mode" class="switch-mode"></label>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div>
                <div class="d-flex justify-content-between">
                    <div>
                        <h3 class="dashboard-item-title">Doctor's Video</h3>
                    </div>
                    <div>
                        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVideo">
                            <i class='bx bxs-plus-circle'></i>
                            <span class="text">Add Video</span>
                        </a>
                    </div>
                </div>
                <div>
                    <!-- ======= DataTable and all action starts here======= -->
                    <div class="container custom-datatable-card mb-4">
                        <table id="manageUserTable" class="table table-hover table-bordered small">
                            <thead>
                                <tr>
                                    <th scope="col">Video Title</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Upload Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Showing users all information from database(video_tbl) -->
                                <?php
                                // declare empty variable for storing users data
                                $videoTitle = "";
                                $videoLink = "";
                                $uploadDate = "";

                                $sql = "SELECT * FROM `video_tbl`";
                                $query = mysqli_query($connection, $sql);
                                while ($row = mysqli_fetch_assoc($query)) {
                                    $videoTitle = $row['Video_Title'];
                                    $videoLink = $row['Video_Link'];
                                    $uploadDate = $row['Upload_Date'];

                                ?>
                                    <tr>
                                        <td><?php echo $videoTitle; ?></td>
                                        <td><?php echo $videoLink; ?></td>
                                        <td><?php echo $uploadDate; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                        </table>
                    </div>
                    <!-- ======= DataTable and all action ends here======= -->
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- Connect with app.js file -->
    <script src="../js/app.js"></script>


    <!-- ======= **DATATABLE CDN START** ======= -->

    <!-- Datatable Javascript CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <!-- Datatable Javascript -->
    <script>
        $(document).ready(function() {
            $('#manageUserTable').DataTable();
        });
    </script>
    <!-- ======= **DATATABLE CDN END*  ======= -->
</body>

</html>