<?php include "admin_header.php"; ?>
<?php  require_once "db.php"; ?>





            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Projet list
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                
                        <th>Id</th>
                        <th>Title</th>                       
                        <th>Image</th>
                        <th>url</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                
                      <tbody>
                      <?php 
                            $query = "SELECT * FROM projet";
                            $load_projet_query = mysqli_query($conn,$query);

                            if (!$load_projet_query) {
                                die("QUERY FAILED". mysqli_error($conn));
                            }

                            while ($row = mysqli_fetch_array($load_projet_query)) {
                                $id_proj = $row['id_proj'];
                                $title_proj = $row['title_proj'];
                                $image_proj = $row['image_proj'];
                                $url_proj = $row['url_proj'];
                                echo "<tr>";
                                echo "<td>$id_proj</td>";
                                echo "<td>$title_proj</td>";
                                echo "<td><img class= 'img-responsive' src='img/$image_proj' alt=''></td>";
                                echo "<td>$url_proj</td>";
                                echo "<td> <a href='edit_projet.php?edit=$id_proj'>Edit</a></td>";
                                echo "<td><a href='view_projet.php?delete=$id_proj'>Delete</a></td>";
                                echo "</tr>";
                            }

                            if (isset($_GET['delete'])) {
                                $deleted_id_proj = $_GET['delete'];

                                $delete_query = "DELETE FROM proj WHERE id_proj = $deleted_id_proj";
                                $deleted_projet_query = mysqli_query($conn,$delete_query);

                                header('Location: view_projet.php');
                            }

                        ?>

                      </tbody>
            </table>
            
            </form>

            </div>
            <!-- /.container-fluid -->

        

    <?php include "admin_footer.php" ?>