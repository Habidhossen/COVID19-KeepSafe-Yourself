<?php
// count total users from database
function userCountFunction()
{
    include '../db_connection.php';
    $userCount = '';
    $sql = "SELECT COUNT(*) AS userCount FROM user_tbl";
    $query = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_assoc($query)) {
        $userCount = $row['userCount'];
    }
    return ($userCount);
}
