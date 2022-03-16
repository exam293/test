<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="webstyle.css">
    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-expand-sm grey">
    <div class="container-fluid">
        <a class="navbar-brand" href="Homepage.php">
            <img src="logo.png" alt="Company logo" style="width:99px; height:60px">
        </a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact Us</a>
                </li>
            </ul>
            <form class="d-flex" method="get" action="/Gibjohn/Tutor_student.php">
                <button class="btn btn-primary" type="submit">Login</button>
            </form>
       
        </div>
    </div>
</nav> 

<div style="padding: 50px; margin-top: 3em">
    <h1>Log In</h1>
    <form action="Student_login_action.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</lable>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</lable>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        <div>
            <a>New student?</a><a href="Student_sign-up.php" style="text-decoration: none;"> Start here.</a>
        </div>
        <div>
            <a>If you are a tutor?</a><a href="Tutor_login.php" style="text-decoration: none;"> Click here.</a>
        </div>

    </form>
</div>

</body>
</html>