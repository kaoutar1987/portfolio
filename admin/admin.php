<?php include "admin_header.php" ?>





            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            admin List
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                
                        <th>Id</th>
                        <th>First Name</th>                       
                        <th>Last Name</th>                       
                        <th>Email</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                
                      <tbody>
                      <?php 
                            $query = "SELECT * FROM admin";
                            $load_admin_query = mysqli_query($conn,$query);

                            if (!$load_admin_query) {
                                die("QUERY FAILED". mysqli_error($conn));
                            }

                            while ($row = mysqli_fetch_array($load_admin_query)) {
                                $adm_id = $row['id'];
                                $adm_name = $row['name'];
                                $adm_email = $row['email'];
                                
                                echo "<tr>";
                                echo "<td>$adm_id</td>";
                                echo "<td>$adm_name</td>";
                                echo "<td>$adm_email</td>";                               
                                echo "<td><a href='admin.php?delete=$adm_id'>Delete</a></td>";
                                echo "</tr>";
                            }
                            
                            if (isset($_GET['delete'])) {
                                $deleted_adm_id = $_GET['delete'];

                                $delete_query = "DELETE FROM admin WHERE id = $deleted_admin_id";
                                $deleted_admin_query = mysqli_query($connection,$delete_query);

                                header('Location: admin.php');
                            }
                            

                        ?>

                      </tbody>
            </table>
            
            </form>

            </div>
            <!-- /.container-fluid -->

    <?php include "admin_footer.php" ?>