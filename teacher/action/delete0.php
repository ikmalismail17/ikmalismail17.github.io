<?php
session_start();
include('../../include/connection.php');


if (isset($_GET['delete_stud'])) {

    $id0 = $_GET['delete_stud'];
    $sql0 = "DELETE FROM tbl_student WHERE studentID = '$id0'";
    $query0 = mysqli_query($conn, $sql0);

    if ($query0) {
        header('location: ../view.php');
    } else {
        echo "Failed";
    }
}
