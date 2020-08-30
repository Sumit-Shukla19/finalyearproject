<?php include"includes/db.php";?>
<?php include"includes/header.php";?>
<?php include"includes/nav.php";?>

   

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
            <h1 class="page-header">
                    Best courses !
                    <small>Comparative studies based courses!</small>
                </h1>

            <?php 
            $per_page=5;
             $i=0 ;
                if(isset($_GET['page'])){
                    $page=$_GET['page'];
                }
                else{
                    $page="";
                }
                if($page == "" || $page == 1){
                    $page_1=0;
                    $i=0;
                }
                else{
                    $page_1=($page*$per_page)-$per_page;
                    $i=($page*5)-$per_page;
                }




            $select_query_count="SELECT * FROM courses";
            $find_count=mysqli_query($connection,$select_query_count);
            $count=mysqli_num_rows($find_count);
             
            // if(isset($_POST['submit']))
            //  { $search= $_POST['search'];
                $query="SELECT * FROM courses LIMIT $page_1, $per_page ";
                $search_query=mysqli_query($connection,$query);
            //     if(!$search_query)
            // {     echo "query failed";
            // }
            //     $count=mysqli_num_rows($search_query);
            //     if($count == 0)
            //     {
            //         echo "oops!!!";
            //     }

            //     else{
                  
            while($row = mysqli_fetch_assoc( $search_query))
            {  
            $course_id=$row['course_id'];
            $course_cat=$row['category'];
            $post_image = $row['image'];
            $rating=$row['rating'];
            $about=substr($row["about"],0,50);
            $path=$row['path'];
            $cost=$row['cost'];
            $link=$row['link'];   
                                        


                ?>
                   
                  <?php  $i=$i+1 ?>
                <!-- First Blog Post -->
            <div>
           <?php echo "<b class='fa-bitbucket-square'>$i</b>"; ?>
                <h2>
                   <?php echo $path?>
                </h2>
           
            <div class="col-lg-3 col-md-6">
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                    </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Rating</h3>
                
                <?php echo $rating; ?>
            </div>
            <div class="col-lg-3 col-md-6">
                    <h3>Cost</h3>
                
                <?php echo $cost; ?>
            </div>
            <div class="col-lg-3 col-md-6">
                    <h3>About</h3>
                
                <?php echo $about . "...";?>
            </div>
            <a class="btn btn-primary" href="details.php?p_id=<?php echo $course_id;?>">VIEW FULL DETAILS</a>
           <hr>
            </div>
            <?php }?>
            
            </div> 
            
           
            
<!-- Blog Sidebar Widgets Column -->
            <?php include"includes/sidebar.php";?>
        </div>
        <!-- /.row -->

        <hr>
    </div>
    <ul class="pager">
        <?php
        for($i=1;$i<=ceil($count/$per_page);$i++){
            if($i == $page){
                echo "<li><a class='active_link' href='index.php?page={$i}'>$i</a></li>";
            }
            else{
            echo "<li><a href='index.php?page={$i}'>$i</a></li>";
        }
    }
        ?>
    </ul>

  
        <?php include "includes/footer.php";?>

      
            