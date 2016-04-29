<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap CSS Code -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/mycss.css" rel="stylesheet">

</head>
<body>
    <?php
        include 'navigation.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form" method="POST" action="loginProcess.php">
                    <h2>Login</h2>
                    <label>Email/Username:</label>
                    <br/>
                    <input type="text" name="email" id="email">
                    <br/>
                    <label>Password:</label>
                    <br/>
                    <input type="password" name="password" id="password">
                    <br/>
                    <input type="button" name="login" id="login" value="Login">
                    <input type="button" name="register" id="register" value="Register">
                </form>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="https://scontent-iad3-1.xx.fbcdn.net/hphotos-xaf1/v/t1.0-9/576058_10150939678438483_1412937661_n.jpg?oh=10767842770255559f573d492fe8a4b9&oe=5768D6DD" alt="">
            </div>
        </div>
    </div>

    <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type = "text/javascript" src = "js/loginSubmit.js"></script>
</body>
</html>