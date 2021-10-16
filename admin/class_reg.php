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
        <title>Register | Class</title>

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
                                <h1 class="m-0">Class Register</h1>
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
                                <div class="card">

                                    <div class="card-header" style="background-color: teal;">
                                        <h5 class="m-0" style="color: white;">Class Register</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="process_reg0.php" method="POST">
                                            <label for="class_name">Class Name</label>
                                            <input type="text" name="class_name" id="class_name" autocomplete="off" required><br>
                                            <?php
                                            $sql = "SELECT teacherID, teacher_name FROM tbl_teacher";
                                            $query = mysqli_query($conn, $sql);
                                            $result = mysqli_num_rows($query);
                                            ?>

                                            <label for="teacher_name">Teacher Assign</label>
                                            <?php
                                            if ($result > 0) {
                                            ?>
                                                <select id="teacher_name" name="teacherID" style="width: 100px; text-align:center;">

                                                    <?php
                                                    while ($rows = mysqli_fetch_assoc($query)) {
                                                    ?>
                                                        <option value="<?php echo $rows['teacherID']; ?>"><?php echo $rows['teacher_name']; ?></option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select>
                                            <?php
                                            }
                                            ?>
                                            <button type="submit" name="class_reg">Register</button>
                                        </form>



                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" style="background-color: teal;">
                                        <h3 class="card-title" style="color: white;">Class Information List</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <script>
                                            function myFunction() {
                                                var input, filter, table, tr, td, i, txtValue;
                                                input = document.getElementById("myInput");
                                                filter = input.value.toUpperCase();
                                                table = document.getElementById("example2");
                                                tr = table.getElementsByTagName("tr");
                                                for (i = 0; i < tr.length; i++) {
                                                    td = tr[i].getElementsByTagName("td")[1];
                                                    if (td) {
                                                        txtValue = td.textContent || td.innerText;
                                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                            tr[i].style.display = "";
                                                        } else {
                                                            tr[i].style.display = "none";
                                                        }
                                                    }
                                                }
                                                d
                                            }
                                        </script>
                                        <input type="text" id="myInput" onkeyup="myFunction()" style="float: right;" placeholder="Search for names.." title="Type in a name">
                                        <br><br>
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Class Name</th>
                                                    <th>Teacher ID</th>
                                                    <th>Teacher Name</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $sql = "SELECT * FROM tbl_class";
                                                $query = mysqli_query($conn, $sql);
                                                $result = mysqli_num_rows($query);

                                                if ($result > 0) {
                                                    while ($row = mysqli_fetch_assoc($query)) {
                                                ?>
                                                        <tr>
                                                            <td><?php echo $row['classID']; ?></td>
                                                            <td><?php echo $row['class_name']; ?></td>
                                                            <td><?php echo $row['teacherID']; ?></td>
                                                            <td><?php echo $row['teacher_name']; ?></td>

                                                        </tr>

                                                <?php
                                                    }
                                                } else {
                                                    echo "No Data";
                                                }

                                                ?>

                                            </tbody>

                                        </table><br>

                                    </div>
                                    <!-- /.card-body -->
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