<?php
include('../../include/connection.php');
session_start();


if (isset($_GET['delete_stud'])) {

    $id0 = $_GET['delete_stud'];

    $sql0 = "DELETE FROM tbl_register WHERE studentID = '$id0'";
    $query0 = mysqli_query($conn, $sql0);

    $sql0 = "DELETE FROM tbl_student WHERE studentID = '$id0'";
    $query0 = mysqli_query($conn, $sql0);

    if ($query0) {
?>
        <script>
            alert("Delete Success");
            window.location.replace('../view_student.php');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Delete Failed");
            window.location.replace('../view_student.php');
        </script>
    <?php
    }
}

if (isset($_GET['delete_course'])) {

    $id1 = $_GET['delete_course'];
    $sql1 = "DELETE FROM tbl_register WHERE courseID = '$id1'";
    $query1 = mysqli_query($conn, $sql1);

    $sql2 = "DELETE FROM tbl_course WHERE courseID = '$id1'";
    $query2 = mysqli_query($conn, $sql2);

    if ($query2) {
    ?>
        <script>
            alert("Delete Success");
            window.location.replace('../view_course.php');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Delete Failed");
            window.location.replace('../view_course.php');
        </script>
    <?php
    }
}

if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $sql1 = "DELETE FROM tbl_class WHERE teacherID = '$id'";
    $query1 = mysqli_query($conn, $sql1);

    $sql = "DELETE FROM tbl_teacher WHERE teacherID = '$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
    ?>
        <script>
            alert("Delete Success");
            window.location.replace('../view_teacher.php');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Change class teacher first");
            window.location.replace('../view_teacher.php');
        </script>
    <?php
    }
}

if (isset($_GET['delete_class'])) {

    $id2 = $_GET['delete_class'];
    $sql2 = "DELETE FROM tbl_register WHERE classID = '$id2'";
    $query2 = mysqli_query($conn, $sql2);

    $sql3 = "DELETE FROM tbl_class WHERE classID = '$id2'";
    $query3 = mysqli_query($conn, $sql3);

    if ($query2) {
    ?>
        <script>
            alert("Delete Success");
            window.location.replace('../view_class.php');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Delete Failed");
            window.location.replace('../view_class.php');
        </script>
<?php
    }
}

mysqli_close($conn);
