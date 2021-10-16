<?php

include('../../include/connection.php');


if (isset($_POST['edit'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "UPDATE tbl_teacher t, tbl_class c SET t.teacher_name='$name', c.teacher_name='$name', t.teacher_username='$username', t.teacher_email='$email', t.teacher_contact='$contact' WHERE c.teacherID= '$id' AND t.teacherID= '$id'  ";
    $query = mysqli_query($conn, $sql);

    if (!$query) {
?>
        <script>
            alert("Fail");
            window.location.replace('../teacher_update.php');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Update Success");
            window.location.replace('../view_teacher.php');
        </script>
    <?php
    }
}

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
            alert("Failed");
            window.location.replace('../student_update.php');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Update Success");
            window.location.replace('../view_student.php');
        </script>
    <?php
    }
}

if (isset($_POST['edit_course'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $code = $_POST['code'];
    $period = $_POST['period'];

    $sql = "UPDATE tbl_course SET course_name='$name', course_code='$code', course_period='$period' WHERE courseID= '$id' ";
    $query = mysqli_query($conn, $sql);

    if (!$query) {
    ?>
        <script>
            alert("Failed");
            window.location.replace('../course_update.php');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Update Success");
            window.location.replace('../view_course.php');
        </script>
        <?php
    }
}

if (isset($_POST['edit_class'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $tid = $_POST['teacherID'];

    if ($tid == '0') {
        $sql0 = "UPDATE tbl_class SET class_name='$name', teacherID='$tid' WHERE classID= '$id' ";
        $query0 = mysqli_query($conn, $sql0);
    } else {
        $sql = "UPDATE tbl_class SET class_name='$name', teacherID='$tid' WHERE classID= '$id' ";
        $query = mysqli_query($conn, $sql);

        if ($query) {

            $sql1 = "UPDATE tbl_class c JOIN tbl_teacher t ON c.teacherID=t.teacherID SET c.teacher_name=t.teacher_name";
            $query1 = mysqli_query($conn, $sql1);

            if ($query1) {
        ?>
                <script>
                    alert("Update Success");
                    window.location.replace('../view_class.php');
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("Failed to Update Name");
                    window.location.replace('../view_class.php');
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert("Failed to Update");
                window.location.replace('../view_class.php');
            </script>
<?php

        }
    }
}
