<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | Staff</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dropdowns/">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <script>
        function myFunction() {
            var x = document.getElementById('floatingPassword');
            if (x.type == "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <link href="css/signin.css" rel="stylesheet">
    <link href="css/dropdown.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body class="text-center">

    <main class="form-signin">

        <form action="staff_login0.php" method="POST">

            <i class="material-icons" style="font-size:150px; color:blue">&#xe8d3;</i>
            <h1 class="h3 mb-3 fw-normal">Staff Log In</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="staff_username" autocomplete="off" placeholder="Name" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="staff_password" autocomplete="off" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <input type="checkbox" id="showpsw" onclick="myFunction()"> <label for="showpsw">Show Password</label>
            <br><br>
            <div class="gap-1 justify-content-center" id="dropdownMacos">
                <h6>Select Your Role</h6>
                <select class="dropdown-menu dropdown-menu-macos mx-0 shadow" name="level" id="level" style="width: 300px;">
                    <option class="dropdown-item active" value="0">Select Here..</option>
                    <option class="dropdown-item" value="1">Admin</option>
                    <option class="dropdown-item" value="2">Teacher</option>
                </select>
            </div>

            <button class="btn btn-lg btn-primary" onclick="location.href='login.php'">Cancel</button>
            <button class="btn btn-lg btn-primary" type="submit" name="submit">Log In</button>

            <p class="mt-5 mb-3 text-muted">&copy; 2021/2022</p>

        </form>

    </main>

</body>

</html>