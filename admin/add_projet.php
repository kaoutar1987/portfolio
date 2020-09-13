<?php include "admin_header.php"; ?>
<?php  require_once "db.php"; ?>
<?php 

if (isset($_POST['add_projet'])) {
    $title_proj = $_POST['title_proj'];
    $image_proj = $_FILES['image']['name'];
    $image_proj_temp = $_FILES['image']['tmp_name'];
    $url_proj = $_POST['url_proj'];
   

    move_uploaded_file($image_proj_temp, "$image_proj");

    $title_proj = mysqli_real_escape_string($conn,$title_proj);
    $image_proj = mysqli_real_escape_string($conn,$image_proj);
    $url_proj = mysqli_real_escape_string($conn,$url_proj);
   

    $query = "INSERT INTO projet(title_proj,image_proj,url_proj) VALUES ('$title_proj','$image_proj','$url_proj')";
    $add_projet_query = mysqli_query($conn,$query);

    if (!$add_projet_query) {
        die("QUERY FAILED". mysqli_error($conn));
    }
}

?>

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add a projet
                            
                           
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
             <form action="add_projet.php" method="post" enctype="multipart/form-data">    
     
     
                    <div class="form-group">
                        <label for="title">Projet Title</label>
                        <input type="text" class="form-control" name="title_proj">
                    </div>

                    <!-- <div class="form-group">
                        <select name="post_status" id="">
                            <option value="draft">Post Status</option>
                            <option value="published">Published</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div> -->
      
      
      
                    <div class="form-group">
                        <label for="projet_image"> Image Projet</label>
                        <input type="file"  name="image">
                    </div>

                    
                    <div class="form-group">
                        <label for="url_proj">url_projet</label>
                        <textarea class="form-control "name="url_proj" id="" cols="30" rows="5">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="add_projet" value="Add projet">
                    </div>


            </form>


            </div>
            <!-- /.container-fluid -->

        

    <?php include "admin_footer.php" ?>