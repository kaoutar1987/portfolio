
<?php
      session_start();
     require_once "db.php";
    
     $message = "";
     if(isset($_POST['login'])){
        // $email = $_POST['email'];
        // $password = $_POST['password'];
        $email = htmlspecialchars(trim(strtolower($_POST['email'])));
        $password = $_POST['password'];
    
        $sql  = "SELECT * FROM admin WHERE  email_admin = '$email'  AND password_admin = '$password'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $id = $row["id_admin"];
                $email =$row["email_admin"];
                session_start();
                $_SESSION['id_admin'] = $id;
                $_SESSION['email_admin'] = $email;
            }

            header("Location:admin/admin.php");
           
        }
        else
        {
            echo "Invalid email or password";
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
                <div style=" background:url(dist/img/portait.jpg);" class="portrait"></div>

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
    <main id="login">
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
                <input type="password" name="password" id="password" required minlenght ="6">
                </label> 
            </div>
            <input class="button form-button" type="submit" name="login" value="SEND"></div>

        
              </form>
    </main >
    <footer id="main-footer">
        copyright &copy;2020 

    </footer>
    <script src="dist/js/script.js"></script>
    

</body>
</html>