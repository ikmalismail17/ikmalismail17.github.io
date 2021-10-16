<?php
include('include/connection.php');
session_start();

if (isset($_POST['submit'])) {

    $name = $_POST['student_fullname'];
    $username = $_POST['student_username'];
    $password = md5($_POST['student_password']);
    $email = $_POST['student_email'];
    $contact = $_POST['student_contact'];

    $sql0 = "SELECT student_username FROM tbl_student WHERE student_username = '$username'";
    $query0 = mysqli_query($conn, $sql0);
    $result = mysqli_num_rows($query0);

    if ($result != 0) {
?>
        <script>
            alert("Username already exist, Please use different username ");
            window.location.replace('registration.php');
        </script>
        <?php
    } else {
        $sql1 = "INSERT INTO tbl_student (student_fullname, student_username, student_password, student_email, student_contact) 
         VALUES ('$name', '$username', '$password', '$email', '$contact')";
        $query1 = mysqli_query($conn, $sql1);

        if ($query1) {
        ?>
            <script>
                alert("Thank you for registration");
                window.location.replace('registration.php');
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Failed to register");
                window.location.replace('registration.php');
            </script>
<?php
        }
    }
}
mysqli_close($conn);
