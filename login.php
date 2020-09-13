
<?php
session_start();
     require_once "db.php";
     $message = "";
 
     if(isset($_SESSION['id'])!="") {
        header("Location:admin.php");
    
}
 
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
 
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please Enter Valid Email ";
    }
    if(strlen($password) < 6) {
        $password_error = "Password must be minimum of 6 characters";
    }  
 
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE email = '" . $email. "' &&  password = '" . md5($password). "'");
    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        header("Location:login.php");
    } else {
        $error_message = "Incorrect Email or Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="dist/css/import.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
</head>
<body>
    
    <header>
        <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>
        <nav class="menu">
            <div class="menu-branding">
                <div class="portrait"></div>

            </div>
            <ul class="menu-nav">
                <li class="nav-item ">
                    <a href="index.php" class="nav-link">accueil     
                    </a>
                </li>
               
                <li class="nav-item ">
                    <a href="about.php" class="nav-link">à propos
                    </a>
                </li>
                <li class="nav-item">
                    <a href="porfolio.php" class="nav-link">portfolio
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="contact.php" class="nav-link">contact
                    </a>
                </li>
                <li class="nav-item current">
                    <a href="login.php" class="nav-link">login
                    </a>
                </li>
            </ul>
        </nav>

    </header>
    <main id="cantact">
        <h1 class="lg-heading">
            Login <span class="text-secondary">Form</span>     
        </h1>
        <h2 class="sm-heading">
            Endroit Administrateur   
        </h2>
        <form class="form" action="" method="POST">
            <div class="form_item">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>  
                </label>
            </div>
            <div class="form_item">
                <label for="password">Mot de passe:</label>
                <input type="password" name="password" id="password" required>
                </label> 
            </div>
            <input class="button form-button" type="submit" value="SEND"></div>

        
              </form>
    </main >
    <footer id="main-footer">
        copyright &copy;2020 

    </footer>
    <script src="dist/js/script.js"></script>
    

</body>
</html>