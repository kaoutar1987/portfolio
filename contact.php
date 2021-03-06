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
                <li class="nav-item current">
                    <a href="contact.php" class="nav-link">contact
                    </a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">login
                    </a>
                </li>
            </ul>
        </nav>

    </header>
    <main id="cantact">
        <h1 class="lg-heading">
            contact <span class="text-secondary"> moi</span>     
        </h1>
        <h2 class="sm-heading">
            C'est ainsi que vous pouvez me joindre ...    
        </h2>
        <div class="boxes">
            <div>
                <span class="text-secondary">Email: </span>kaoutarhabach@gmail.com
            </div>
            <div>
                <span class="text-secondary">Phone: </span>0648184112
            </div>
            <div>
                <span class="text-secondary">Address: </span>40 Main st youssefya
            </div>    
        </div>
        <h1 class="lg-heading">
            contact <span class="text-secondary"> form</span>     
        </h1>
        <form action="">
            <label class="name" class="name">Name:
                <input type="text" id="name">
            </label>
            
            <label class="email" class="email">Email:
              <input type="email" id="email">
            </label>
    
            <label message="message" class="message">Message:
              <textarea name="" id="message"></textarea>
            </label>
    
            <input class="button form-button" type="submit" value="Envoyer">
    
          </form>
       
        
    </main >
    <footer id="main-footer">
        copyright &copy;2020 

    </footer>
    <script src="dist/js/script.js"></script>
    

</body>
</html>