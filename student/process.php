<?php
include('../include/connection.php');
session_start();

if (isset($_POST['reg'])) {

    $id = $_POST['id'];
    $courseID = $_POST['courseID'];
    $classID = $_POST['classID'];

    if ($courseID == 0 && $classID == 0) {
        header('Location: cc_register.php');
    } else {
        $sql = "SELECT * FROM tbl_register WHERE studentID = '$id'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_num_rows($query);

        if ($result > 1) {
?>
            <script>
                alert("Maximum Registration");
                window.location.replace('cc_register.php');
            </script>
            <?php
        } else {
            $sql0 = "SELECT * FROM tbl_register WHERE courseID = '$courseID' AND studentID = '$id'";
            $query0 = mysqli_query($conn, $sql0);
            $result0 = mysqli_num_rows($query0);

            if ($result0 == 1) {
            ?>
                <script>
                    alert("You already register same course");
                    window.location.replace('cc_register.php');
                </script>
                <?php
            } else {
                $sql = "INSERT INTO tbl_register (studentID, classID, courseID) VALUES ('$id', '$classID', '$courseID')";
                $query = mysqli_query($conn, $sql);

                if ($query) {
                ?>
                    <script>
                        alert("Registration Success");
                        window.location.replace('cc_register.php');
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert("Registration Failed");
                        window.location.replace('cc_register.php');
                    </script>
            <?php
                }
            }
        }
    }
}

if (isset($_POST['Submit'])) {

    $oldpass = md5($_POST['opwd']);
    $id = $_POST['id'];
    $newpassword = md5($_POST['npwd']);

    $sql = "SELECT * FROM tbl_student WHERE student_password = '$oldpass' AND studentID = '$id'";
    $query =  mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);

    if ($result) {
        $sql1 = "UPDATE tbl_student SET student_password='$newpassword' WHERE studentID = '$id'";
        $query1 = mysqli_query($conn, $sql1);

        if ($query1) {
            ?>
            <script>
                alert("Password Change Successful");
                window.location.replace('stud_profile.php');
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Password Fail to Change");
                window.location.replace('stud_passchange.php');
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert("Old Password Incorrect");
            window.location.replace('stud_passchange.php');
        </script>
<?php
    }
}
