<?php
session_start();
include('include/connection.php');

if (isset($_POST['submit'])) {

    $username = $_POST['student_username'];
    $password = md5($_POST['student_password']);

    $sql0 = "SELECT * FROM tbl_student WHERE student_username ='$username' AND student_password ='$password'";
    $query0 = mysqli_query($conn, $sql0) or die;
    $row = mysqli_num_rows($query0);

    if ($row == 0) {
?>
        <script>
            alert("Student Invalid");
            window.location.replace('login.php');
        </script>
    <?php
    } else {
        $r = mysqli_fetch_assoc($query0);
        $_SESSION['student_username'] = $r['student_username'];
    ?>
        <script>
            alert("Login Success, Welcome <?php echo $_SESSION['student_username']; ?>");
            window.location.replace('student/index.php');
        </script>

<?php
    }
}

mysqli_close($conn);
?>