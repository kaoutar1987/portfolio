<?php include "admin_header.php" ?>
<?require_once "db.php";?>
<?php 

if (isset($_GET['edit'])) {
    $id_proj = $_GET['edit']; 
}

$edit_query = "SELECT * FROM projet WHERE id_proj = $id_proj ";
$load_projet_query = mysqli_query($conn,$edit_query);

while($row = mysqli_fetch_array($load_projet_query)){
$id_proj = $row['id_proj'];
$title_proj = $row['title_proj'];
$image_proj = $row['image_proj'];
$url_proj = $row['url_proj'];
}

if (isset($_POST['edit_projet'])) {
    @$title_proj = $_POST['title_proj'];
    $image_proj = $_FILES['image']['name'];
    $image_proj_temp = $_FILES['image']['tmp_name'];
   @ $url_proj = $_POST['url_proj'];

    move_uploaded_file($image_proj_temp, "$image_proj");

    $projet_title = mysqli_real_escape_string($conn,$title_proj);
    $image_proj = mysqli_real_escape_string($conn,$image_proj);
    $url_proj = mysqli_real_escape_string($conn,$url_proj);

    $query = "UPDATE projet SET title_proj = '$title_proj' ,image_proj ='$image_proj',url_proj = '$url_proj'  WHERE id_proj = $id_proj ";
    $edit_projet_query = mysqli_query($conn,$query);

    if (!$edit_projet_query) {
        die("QUERY FAILED". mysqli_error($conn));
    }

    
}

?>


<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Edit projet
        </h1>
    </div>
</div>
<!-- /.row -->
<form action="edit_projet.php?edit=<?php echo $id_proj ?>" method="post" enctype="multipart/form-data">    


    <div class="form-group">
        <label for="title">projet Title</label>
        <input type="text" value = "<?php echo $title_proj ?>" class="form-control" name="title_proj">
    </div>

    <!-- <div class="form-group">
        <select name="post_status" id="">
            <option value="draft">Post Status</option>
            <option value="published">Published</option>
            <option value="draft">Draft</option>
        </select>
    </div> -->



    <div class="form-group">
        <label for="image_proj">projet Image</label>
        <input type="file"  name="image">
    </div>

    
    <div class="form-group">
        <label for="url_proj">Projet url</label>
        <textarea class="form-control" name="url_proj" id="" cols="30" rows="5"><?php echo $url_proj ?></textarea>
    </div>
    

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_projet" value="Edit projet">
    </div>


</form>


</div>
<!-- /.container-fluid -->



<?php include "admin_footer.php" ?>