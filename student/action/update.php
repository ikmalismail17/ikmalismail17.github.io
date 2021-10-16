<?php
include('../../include/connection.php');
session_start();

if (isset($_POST['studpro_update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "UPDATE tbl_student SET student_fullname='$name', student_email='$email', student_contact='$contact' WHERE studentID= '$id' ";
    $query = mysqli_query($conn, $sql);

    if (!$query) {
?>
        <script>
            alert("Failed");
            window.location.replace('../studpro_update.php');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Update Success");
            window.location.replace('../stud_profile.php');
        </script>
<?php
    }
}
