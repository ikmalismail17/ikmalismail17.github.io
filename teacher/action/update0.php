<?php
session_start();
include('../../include/connection.php');

if (isset($_POST['edit_stud'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "UPDATE tbl_student SET student_fullname='$name', student_username='$username', student_email='$email', student_contact='$contact' WHERE studentID= '$id' ";
    $query = mysqli_query($conn, $sql);

    if (!$query) {
?>
        <script>
            alert("Failed to Update");
            window.location.replace('../update_stud.php')
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Update Success");
            window.location.replace('../view_stud.php')
        </script>
    <?php
    }
}

if (isset($_POST['teacherpro_update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "UPDATE tbl_teacher t, tbl_class c SET t.teacher_name='$name', c.teacher_name='$name', t.teacher_email='$email', t.teacher_contact='$contact' WHERE c.teacherID= '$id' AND t.teacherID= '$id'  ";
    $query = mysqli_query($conn, $sql);

    if (!$query) {
    ?>
        <script>
            alert("Failed to Update");
            window.location.replace('pro_update.php');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Update Success");
            window.location.replace('../teacher_profile.php');
        </script>
<?php
    }
}
