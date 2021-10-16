<!DOCTYPE html>

<?php
include('../include/connection.php');
session_start();
if (isset($_SESSION['admin_name'])) {
?>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin | Dashboard</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="../css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../css/adminlte.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    </head>

    <body class="text-center hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-teal navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="material-icons">&#xe5c3;</i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="index.php" class="nav-link" title="Home"><i class="material-icons">&#xe88a;</i></a>
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
            <aside class="main-sidebar sidebar-dark-teal elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Admin Page</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="" class="img-circle elevation-2">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block"><?php echo $_SESSION['admin_name']; ?></a>
                        </div>
                    </div>

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link active">
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
                                        <a href="course_reg.php" class="nav-link active">
                                            <p>Courses</p>
                                        </a>
                                    </li>
                                    <li class="nav-item menu-open">
                                        <a href="class_reg.php" class="nav-link active">
                                            <p>Class</p>
                                        </a>
                                    </li>
                                    <li class="nav-item menu-open">
                                        <a href="teacher_reg.php" class="nav-link active">
                                            <p>Teacher/Student</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="material-icons">&#xe8ee;</i>
                                    <p>View / Update</p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item menu-open">
                                        <a href="view_course.php" class="nav-link active">
                                            <p>Courses</p>
                                        </a>
                                    </li>
                                    <li class="nav-item menu-open">
                                        <a href="view_class.php" class="nav-link active">
                                            <p>Class</p>
                                        </a>
                                    </li>
                                    <li class="nav-item menu-open">
                                        <a href="view_teacher.php" class="nav-link active">
                                            <p>Teacher/Student</p>
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
                                <h1 class="m-0">Dashboard</h1>
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
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card card-teal">
                                    <div class="card-header">
                                        <h5 class="m-0">Teacher</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            Number of Teachers
                                        </p>
                                        <?php
                                        $sql = " SELECT COUNT(*) FROM tbl_teacher";
                                        $query = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_assoc($query);
                                        ?>
                                        <p class="card-text">
                                            <?php echo $row['COUNT(*)']; ?>
                                        </p>


                                        <a href="view_teacher.php" class="btn btn-primary" style="background-color: teal;">Teacher List</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-teal">
                                    <div class="card-header">
                                        <h5 class="m-0">Student</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            Number of Students
                                        </p>
                                        <?php
                                        $sql1 = " SELECT COUNT(*) FROM tbl_student";
                                        $query1 = mysqli_query($conn, $sql1);
                                        $row1 = mysqli_fetch_assoc($query1);
                                        ?>
                                        <p class="card-text">
                                            <?php echo $row1['COUNT(*)']; ?>
                                        </p>

                                        <a href="view_student.php" class="btn btn-primary" style="background-color: teal;">Student List</a>
                                    </div>
                                </div><!-- /.card -->
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-lg-3">
                                <div class="card card-teal">
                                    <div class="card-header">
                                        <h5 class="m-0">Course</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            Number of Courses
                                        </p>
                                        <?php
                                        $sql2 = " SELECT COUNT(*) FROM tbl_course";
                                        $query2 = mysqli_query($conn, $sql2);
                                        $row2 = mysqli_fetch_assoc($query2);
                                        ?>
                                        <p class="card-text">
                                            <?php echo $row2['COUNT(*)']; ?>
                                        </p>
                                        <a href="view_course.php" class="btn btn-primary" style="background-color: teal;">Course List</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-teal ">
                                    <div class="card-header">
                                        <h5 class="m-0">Class</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            Number of Classes
                                        </p>
                                        <?php
                                        $sql3 = " SELECT COUNT(*) FROM tbl_class";
                                        $query3 = mysqli_query($conn, $sql3);
                                        $row3 = mysqli_fetch_assoc($query3);
                                        ?>
                                        <p class="card-text">
                                            <?php echo $row3['COUNT(*)']; ?>
                                        </p>
                                        <a href="view_class.php" class="btn btn-primary" style="background-color: teal;">Class List</a>
                                    </div>
                                </div>
                            </div><br>
                            <div class="col-lg-12">
                                <div class="card" style="background-color:darkgrey; color:white">
                                    <h3>Christmas Banner Design</h3>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card card-teal">
                                    <div class="card-header">
                                        <h5 class="m-0">Design 1</h5>
                                    </div>
                                    <img src="../image/MC Banner 2.png" title="Christmas">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card card-teal">
                                    <div class="card-header">
                                        <h5 class="m-0">Design 2</h5>
                                    </div>
                                    <img src="../image/MC Banner 4.png" title="Christmas">
                                </div>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
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
            <footer class="main-footer" style="background-color: teal;">
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
        </script>


    </body>

    </html>

<?php
} else {
    header('Location: ../login.php');
}
?>