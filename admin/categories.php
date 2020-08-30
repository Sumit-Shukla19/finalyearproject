<?php include"includes/header.php";?>
    <div id="wrapper">

        <!-- Navigation -->
      <?php include"includes/nav.php";?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            WELCOME TO ADMIN
                            <small>Author</small>
                        </h1>
                        <div class="col-xs-6">
                        <?php 
                       
                        insert_categories();
                        ?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat_title">Add category</label>
                                    <input type="text" class="form-control" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add category">
                                </div>
                            </form>
                           
                            <?php
                             if(isset($_GET['edit'])){
                                     $cat_id=$_GET['edit'];
                                     include"includes/update.php";


                             }
                          ?>
                        </div>
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                findallcategories();
                                ?>
                                <?php 
                               
                                deletecategories();
                                
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include"includes/footer.php";?>