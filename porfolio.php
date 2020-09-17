<?php  require_once "db.php"; ?>



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
                <li class="nav-item current">
                    <a href="porfolio.php" class="nav-link">portfolio
                    </a>
                </li>
                <li class="nav-item">
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
    <main id="portfolio">
        <h1 class="lg-heading">
            Mes <span class="text-secondary">Projets</span>     
        </h1>
        <h2 class="sm-heading">
            Découvrez quelques-uns de mes projets ...  
        </h2>
        <div class="projects">
            <?php
             $query = "SELECT * FROM projet";
             $load_projet_query = mysqli_query($conn,$query);
             if (!$load_projet_query) {
              die("QUERY FAILED". mysqli_error($conn));

             }
             while ($row = mysqli_fetch_array($load_projet_query)){
               $id_proj = $row ['id_proj'];
               $title_proj =$row ['title_proj'];
               $image_proj = $row ['image_proj'];
               $url_proj = $row ['url_proj'];

            
            ?>
             <div class="item">
              <h1><?php echo $title_proj?></h1>
              <a href="#">
                <img src="admin/<?php echo $image_proj ?>" alt="img">
              </a>
              <a href=<?php echo $url_proj?> class="btn-light">
                <i class="fas fa-eye"></i> Project
              </a>
              <a href="#" class="btn-dark">
                <i class="fab fa-github"></i> Github
              </a>
            </div> 
          

          <?php 
        }
        ?>
        </div>
    </main >
    <footer id="main-footer">
        copyright &copy;2020 

    </footer>
    <script src="dist/js/script.js"></script>
    

</body>
</html>

