<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Student</title>

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

    <link href="css/signin.css" rel="stylesheet">

</head>

<body class="text-center">

    <main class="form-signin">
        <form action="registration0.php" method="POST">

            <img class="mb-4" src="image/MC Banner 2.png" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Register</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingName" name="student_fullname" autocomplete="off" placeholder="Name" required>
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
                <input type="tel" class="form-control" id="floatingContact" name="student_contact" autocomplete="off" placeholder="011.." required>
                <label for="floatingContact">Contact</label>
            </div><br>

            <button class="btn btn-lg btn-primary" onclick="location.href='login.php'">Cancel</button>
            <button class="btn btn-lg btn-primary" type="submit" name="submit">Register</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021/2022</p>

        </form>
    </main>

</body>

</html>