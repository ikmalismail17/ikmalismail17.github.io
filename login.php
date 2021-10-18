<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | Student</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
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
            var x = document.getElementById("floatingPassword");
            if (x.type == "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <link href="css/signin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body class="text-center">

    <main class="form-signin">

        <form action="login0.php" method="POST">
            <i class="material-icons" style="font-size: 150px; color:blue;">&#xe8a6;</i>
            <h1 class="h3 mb-3 fw-normal">Please Log In</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="student_username" autocomplete="off" placeholder="Name" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="student_password" autocomplete="off" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>

            <input type="checkbox" id="showpsw" onclick="myFunction()"> <label for="showpsw">Show Password</label>
            <br><br>
            <div class="checkbox mb-3">
                <a href="registration.php">Sign Up?</a>
                <a href="staff_login.php">Staff here?</a>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Log In</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        </form><br><br>
    </main>



</body>

</html>