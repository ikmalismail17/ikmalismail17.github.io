<!DOCTYPE html>
<?php
session_start();
include('../include/connection.php');
if (isset($_SESSION['teacher_username'])) {

?>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Register</title>

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
            <nav class="main-header navbar navbar-expand navbar-blue navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="material-icons">&#xe5c3;</i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="index.php" class="nav-link" title="Home"><i class="material-icons">&#xe88a;</i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="teacher_profile.php" title="My Profile" class="nav-link"><i class="material-icons">&#xe7fd;</i></a>
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
            <aside class="main-sidebar sidebar-dark-blue elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Teacher Page</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="" class="img-circle elevation-2">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block"><?php echo $_SESSION['teacher_username']; ?></a>
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
                                <a href="#" class="nav-link active">
                                    <i class="material-icons">&#xe8ef;</i>
                                    <p>Register</p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item menu-open">
                                        <a href="register_stud.php" class="nav-link active">
                                            <p>Student</p>
                                        </a>
                                    </li>


                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="material-icons">&#xe8ee;</i>
                                    <p>View</p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item menu-open">
                                        <a href="teacher_profile.php" class="nav-link active">
                                            <p>Profile</p>
                                        </a>
                                    </li>
                                    <li class="nav-item menu-open">
                                        <a href="teacher_class.php" class="nav-link active">
                                            <p>Course/Class</p>
                                        </a>
                                    </li>
                                    <li class="nav-item menu-open">
                                        <a href="view.php" class="nav-link active">
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
                                <h1 class="m-0">Student Register</h1>
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
                            <div class="col-lg-12">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header" style="background-color: blue;">
                                            <h3 class="card-title" style="color: white;">Student Registration</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="card">

                                                <form action="process.php" method="POST">

                                                    <img class="mb-4" src="../image/MC Banner 2.png" alt="" width="72" height="57" style="margin-top: 10px;">
                                                    <h1 class="h3 mb-3 fw-normal">Register Student</h1>

                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="floatingName" name="student_name" autocomplete="off" placeholder="Name" required>
                                                        <label for="floatingName">Name</label>
                                                    </div>

                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="floatingUsername" name="student_username" autocomplete="off" placeholder="Username" required>
                                                        <label for="floatingUsername">Username</label>
                                                    </div>

                                                    <div class="form-floating">
                                                        <input type="password" class="form-control" id="floatingPassword" name="student_password" autocomplete="off" placeholder="Password" required>
                                                        <label for="floatingPassword">Password</label>
                                                    </div>

                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="floatingEmail" name="student_email" autocomplete="off" placeholder="name@example.com" required>
                                                        <label for="floatingEmail">E-mail</label>
                                                    </div>

                                                    <div class="form-floating">
                                                        <input type="tel" class="form-control" id="floatingContact" name="student_contact" autocomplete="off" placeholder="011.." s required>
                                                        <label for="floatingContact">Contact</label>
                                                    </div><br>

                                                    <button class="btn btn-lg btn-primary" type="submit" name="submit_stud" style="margin:5px 0px 5px 0px;">Register</button>


                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
            <footer class="main-footer" style="background-color: blue;">
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