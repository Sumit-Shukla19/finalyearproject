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
            <?php 
            if(isset($_GET['source'])){
                $source=$_GET['source'];
            }else{
                $source='';
            }
            switch($source) {
                case 'add course';
                 include"includes/add_course.php";
                break;

                case 'edit course';
               
                include"includes/edit_course.php";
                break;

               


                case '200';
                echo "nice 200";
                break;
                default:
                include"includes/view_a_course.php";
                break;
            }
            
            
            
            ?>
    
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include"includes/footer.php";?>