<?php
include('../include/connection.php');
session_start();

if (isset($_POST['submit'])) {

    $name = $_POST['teacher_name'];
    $username = $_POST['teacher_username'];
    $password = md5($_POST['teacher_password']);
    $email = $_POST['teacher_email'];
    $contact = $_POST['teacher_contact'];

    $sql0 = "SELECT teacher_username FROM tbl_teacher WHERE teacher_username = '$username'";
    $query0 = mysqli_query($conn, $sql0);
    $result = mysqli_num_rows($query0);

    if ($result != 0) {
?>
        <script>
            alert("Teacher Username Already Exist");
            window.location.replace('teacher_reg.php');
        </script>
        <?php
    } else {
        $sql1 = "INSERT INTO tbl_teacher (teacher_name,teacher_username, teacher_password, teacher_email, teacher_contact) 
         VALUES ('$name', '$username', '$password', '$email', '$contact')";
        $query1 = mysqli_query($conn, $sql1);

        if ($query1) {
        ?>
            <script>
                alert("Register Teacher Successful");
                window.location.replace('teacher_reg.php');
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Register Fail");
                window.location.replace('teacher_reg.php');
            </script>
        <?php
        }
    }
}

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
            alert("Student Already Exist");
            window.location.replace('student_reg.php');
        </script>
        <?php
    } else {
        $sql3 = "INSERT INTO tbl_student (student_fullname,student_username, student_password, student_email, student_contact) 
         VALUES ('$name', '$username', '$password', '$email', '$contact')";
        $query3 = mysqli_query($conn, $sql3);

        if ($query3) {
        ?>
            <script>
                alert("Registration Student  Successful");
                window.location.replace('student_reg.php');
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Registration Fail");
                window.location.replace('student_reg.php');
            </script>
        <?php
        }
    }
}

if (isset($_POST['course_reg'])) {

    $name = $_POST['course_name'];
    $code = $_POST['course_code'];
    $period = $_POST['course_period'];

    $sql = "SELECT * FROM tbl_course WHERE course_code = '$code'";
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($query);

    if ($rows != 0) {
        ?>
        <script>
            alert('Course Already Exist');
            window.location.replace('course_reg.php');
        </script>
    <?php
    } else {

        $sql0 = "INSERT INTO tbl_course  (course_name, course_code, course_period) VALUES ('$name', '$code', '$period')";
        $query0 = mysqli_query($conn, $sql0);

    ?>
        <script>
            alert('Course Register Success');
            window.location.replace('course_reg.php');
        </script>
    <?php
    }
}

if (isset($_POST['class_reg'])) {

    $name = $_POST['class_name'];
    $id = $_POST['teacherID'];

    $sql = "SELECT * FROM tbl_class WHERE class_name = '$name'";
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($query);

    if ($rows != 0) {
    ?>
        <script>
            alert('Class Already Exist');
            window.location.replace('class_reg.php');
        </script>
    <?php
    } else {

        $sql0 = "INSERT INTO tbl_class  (class_name, teacherID) VALUES ('$name', '$id')";
        $query0 = mysqli_query($conn, $sql0);

        $sql1 = "UPDATE tbl_class c JOIN tbl_teacher t ON c.teacherID=t.teacherID SET c.teacher_name=t.teacher_name";
        $query1 = mysqli_query($conn, $sql1);

    ?>
        <script>
            alert('Class Register Success');
            window.location.replace('class_reg.php');
        </script>
<?php
    }
}
mysqli_close($conn);
