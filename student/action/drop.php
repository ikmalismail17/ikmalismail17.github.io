<?php
include('../../include/connection.php');

if (isset($_GET['drop'])) {

    $id = $_GET['drop'];
    $sql = "DELETE FROM tbl_register WHERE registerID = '$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('location: ../stud_cc.php');
    } else {
        echo "Failed";
    }
}
