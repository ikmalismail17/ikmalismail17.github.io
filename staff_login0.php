<?php

session_start();
include('include/connection.php');

if (isset($_POST['submit'])) {

    $username = $_POST['staff_username'];
    $password = md5($_POST['staff_password']);
    $level = $_POST['level'];

    if ($level == '0') {
?>
        <script>
            alert("Select Your Role");
            window.location.replace('staff_login.php');
        </script>
        <?php
    } else if ($level == '1') {

        $sql = "SELECT * FROM tbl_admin WHERE admin_name ='$username' AND admin_password ='$password'";
        $query = mysqli_query($conn, $sql) or die;
        $rows = mysqli_num_rows($query);

        if ($rows == 0) {
        ?>
            <script>
                alert("Staff Invalid");
                window.location.replace('staff_login.php');
            </script>
        <?php

        } else {
            $r = mysqli_fetch_assoc($query);
            $_SESSION['admin_name'] = $r['admin_name'];
        ?>
            <script>
                alert("Welcome Admin");
                window.location.replace('admin/index.php');
            </script>
        <?php
        }
    } else if ($level == '2') {

        $sql0 = "SELECT * FROM tbl_teacher WHERE teacher_username ='$username' AND teacher_password ='$password'";
        $query0 = mysqli_query($conn, $sql0) or die;
        $rows0 = mysqli_num_rows($query0);

        if ($rows0 == 0) {
        ?>
            <script>
                alert("Staff Invalid");
                window.location.replace('staff_login.php');
            </script>
        <?php
        } else {
            $r = mysqli_fetch_assoc($query0);
            $_SESSION['teacher_username'] = $r['teacher_username'];
        ?>
            <script>
                alert("Login Success, Welcome <?php echo $_SESSION['teacher_username']; ?>");
                window.location.replace('teacher/index.php');
            </script>
<?php
        }
    }
}
