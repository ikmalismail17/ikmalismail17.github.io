<!DOCTYPE html>
<?php
session_start();
include('../include/connection.php');
if (isset($_SESSION['student_username'])) {

?>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password Change</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="../css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../css/adminlte.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <style>
            .edit {
                background-color: white;
                color: green;
                border-color: green
            }

            .edit:hover {
                background-color: green;
                color: white;
            }

            .rcorners2 {
                border-radius: 25px;
                border: 2px solid green;
                width: 200px;
                text-align: center;
            }
        </style>


    </head>

    <body class="text-center hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-green navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="material-icons">&#xe5c3;</i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="index.php" class="nav-link" title="Home"><i class="material-icons">&#xe88a;</i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="stud_profile.php" title="My Profile" class="nav-link"><i class="material-icons">&#xe7fd;</i></a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="../login.php" class="nav-link" data-slide="true" title="Log Out" onclick="return confirmLogout()" role="button">
                            <i class="material-icons">&#xe879;</i>
                        </a>
                    </li>
                </ul>

            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-green elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Student Page</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="" class="img-circle elevation-2">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block"><?php echo $_SESSION['student_username']; ?></a>
                        </div>
                    </div>

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">
                                    <i class="material-icons">&#xe871;</i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="material-icons">&#xe8ef;</i>
                                    <p>Register</p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item menu-open">
                                        <a href="cc_register.php" class="nav-link active">
                                            <p>Courses/Class</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="material-icons">&#xe8ee;</i>
                                    <p>View</p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item menu-open">
                                        <a href="stud_profile.php" class="nav-link active">
                                            <p>Profile</p>
                                        </a>
                                    </li>
                                    <li class="nav-item menu-open">
                                        <a href="stud_cc.php" class="nav-link active">
                                            <p>Course/Class</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="../login.php" role="button" onclick="return confirmLogout()" class="nav-link">
                                    <i class="material-icons">&#xe879;</i>
                                    <p>Log Out</p>
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Password Change</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a role="button" onclick="location.href='index.php'">Home</a></li>
                                    <li class="breadcrumb-item active">Starter Page</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <?php
                $user = $_SESSION['student_username'];
                $sql = "SELECT * FROM tbl_student WHERE student_username='$user'";
                $query = mysqli_query($conn, $sql);
                $result = mysqli_num_rows($query);

                if ($result == 1) {
                    $row = mysqli_fetch_assoc($query);
                ?>
                    <!-- Main content -->
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="card">
                                        <div class="card-header" style="background-color: green;">
                                            <h1 style="color: white;">Change your Password</h1>
                                        </div>
                                        <div class="card-body">
                                            <form name="chngpwd" action="process.php" method="POST" onSubmit="return valid();">
                                                <table align="center">
                                                    <tr height="50">
                                                        <td>Old Password :</td>
                                                        <input type="hidden" name="id" value="<?php echo $row['studentID']; ?>">
                                                        <td><input class="rcorners2" type="password" name="opwd" id="opwd"></td>
                                                    </tr>
                                                    <tr height="50">
                                                        <td>New Password :</td>
                                                        <td><input class="rcorners2" type="password" name="npwd" id="npwd"></td>
                                                    </tr>
                                                    <tr height="50">
                                                        <td>Confirm Password :</td>
                                                        <td><input class="rcorners2" type="password" name="cpwd" id="cpwd"></td>
                                                    </tr>

                                                </table><br>

                                                <input class="edit" type="submit" name="Submit" value="Change Password" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                <?php
                }
                ?>


            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer" style="background-color: green;">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline" style="color: white;">
                    Credit : Ikmal Ismail
                </div>
                <!-- Default to the left -->
                <strong style="color: white;"> &copy; 2021/2022</strong>
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../js/bootstrap.bundle.min2.js"></script>
        <!-- AdminLTE App -->
        <script src="../js/adminlte.min.js"></script>
        <script>
            function confirmLogout() {
                var y = confirm("You want to logout");
                if (y == true) {
                    return true;
                } else {
                    return false;
                }
            }

            function confirmUpdate() {
                var x = confirm("Update?");
                if (x == true) {
                    return true;
                } else {
                    return false;
                }
            }

            function valid() {
                if (document.chngpwd.opwd.value == "") {
                    alert("Old Password Filed is Empty !!");
                    document.chngpwd.opwd.focus();
                    return false;
                } else if (document.chngpwd.npwd.value == "") {
                    alert("New Password Filed is Empty !!");
                    document.chngpwd.npwd.focus();
                    return false;
                } else if (document.chngpwd.cpwd.value == "") {
                    alert("Confirm Password Filed is Empty !!");
                    document.chngpwd.cpwd.focus();
                    return false;
                } else if (document.chngpwd.npwd.value != document.chngpwd.cpwd.value) {
                    alert("Password and Confirm Password Field do not match  !!");
                    document.chngpwd.cpwd.focus();
                    return false;
                }
                return true;
            }
        </script>


    </body>

    </html>

<?php
} else {
    header('Location: ../login.php');
}
?>