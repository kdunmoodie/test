<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
    header("Location: main_page.php");
}

include_once 'db.php';

//check if form is submitted
if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_name'] = $row['name'];
        header("Location: page1.php");
    } else {
        $errormsg = "Correo o Password incorrecto";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Semestral de PHP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /> -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css-styles/bootstrap.min.css">

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- add header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Semestral de PHP</a>
        </div>
        <!-- menu items -->
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="page1.php">Login</a></li>
                <li><a href="register.php">Registro</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                <fieldset>
                    <legend>Iniciar Sesion</legend>

                    <div class="form-group">
                        <label for="name">Correo Electronico</label>
                        <input type="text" name="email" placeholder="Su Correo" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="name">Contrasena</label>
                        <input type="password" name="password" placeholder="Su Contrase&ntilde;a" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="login" value="Iniciar Sesion" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
        Usuario nuevo? <a href="register.php">Registrese aqui</a>
        </div>
    </div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
