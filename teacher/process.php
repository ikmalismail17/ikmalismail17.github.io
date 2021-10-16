<?php

session_start();
include('../include/connection.php');

if (isset($_POST['submit_stud'])) {

    $name = $_POST['student_name'];
    $username = $_POST['student_username'];
    $password = md5($_POST['student_password']);
    $email = $_POST['student_email'];
    $contact = $_POST['student_contact'];

    $sql2 = "SELECT student_username FROM tbl_student WHERE student_username = '$username'";
    $query2 = mysqli_query($conn, $sql2);
    $result2 = mysqli_num_rows($query2);

    if ($result2 != 0) {
?>
        <script>
            alert("User already exist");
            window.location.replace('register_stud.php');
        </script>
        <?php
    } else {
        $sql3 = "INSERT INTO tbl_student (student_fullname,student_username, student_password, student_email, student_contact) 
     VALUES ('$name', '$username', '$password', '$email', '$contact')";
        $query3 = mysqli_query($conn, $sql3);

        if ($query3) {
        ?>
            <script>
                alert("Register Successful");
                window.location.replace('register_stud.php');
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Failed");
                window.location.replace('register_stud.php');
            </script>
        <?php
        }
    }
}


if (isset($_POST['Submit'])) {

    $oldpass = md5($_POST['opwd']);
    $id = $_POST['id'];
    $newpassword = md5($_POST['npwd']);

    $sql = "SELECT * FROM tbl_teacher WHERE teacher_password = '$oldpass' AND teacherID = '$id'";
    $query =  mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);

    if ($result) {
        $sql1 = "UPDATE tbl_teacher SET teacher_password='$newpassword' WHERE teacherID = '$id'";
        $query1 = mysqli_query($conn, $sql1);

        if ($query1) {
        ?>
            <script>
                alert("Password Change Successful");
                window.location.replace('teacher_profile.php');
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Password Fail to Change");
                window.location.replace('change_pass.php');
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert("Old Password Incorrect");
            window.location.replace('change_pass.php');
        </script>
<?php
    }
}
