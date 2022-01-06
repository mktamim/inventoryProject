<?php

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation Form</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/register.css">

</head>

    <body>
        <form method="POST" action="login.php" enctype="multipart/form-data">
            <div class="container">
                <h1>Registration Form</h1>
                <hr>
                <div>
                    <label><span>*</span> Name</label>
                    <input name="name" id="name" type="text" placeholder="Enter Your Name" required>
                </div>
                <div>
                    <label><span>*</span>Your Username</label>
                    <input name="uname" id="uname" type="text" placeholder="Enter Your Username" required>
                </div>
                <div>
                    <label>Your Email</label>
                    <input name="email" id="email" type="email" placeholder="Enter Your Email">
                </div>
                <div>
                    <label><span>*</span>Password</label>
                    <input name="pass" id="pass" type="password" placeholder="Enter Your Password" required>
                </div>
                <div>
                    <label><span>*</span>Repeat Password</label>
                    <input name="r-pass" id="rpass" type="password" placeholder="Confirm Your Password" required>
                </div>
                <div>
                    <p><span>***</span> Creating an account You agree to Our trms & Privacy </p>
                </div>
                <div class="submit">
                    <input  type="submit" class="btn btn-success" value="Submit">
                </div>
                <div>
                    <p>Allready have an accont? <a href="login.php">Sing in</a></p>
                </div>
            </div>
        </form>
    </body>
</html>