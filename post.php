<?php include"includes/db.php";?>
<?php include"includes/header.php";?>
<?php include"includes/nav.php";?>

   

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
            <?php 
            if(isset($_GET['p_id'])){
                $the_course_id=$_GET['p_id'];
            }
            // if(isset($_POST['submit']))
            //  { $search= $_POST['search'];
                $query="SELECT * FROM courses WHERE course_id=$the_course_id ";
                $select_query=mysqli_query($connection,$query);
            //     if(!$search_query)
            // {     echo "query failed";
            // }
            //     $count=mysqli_num_rows($search_query);
            //     if($count == 0)
            //     {
            //         echo "oops!!!";
            //     }

            //     else{
                  if(!$select_query){
                      echo "oops";
                  }
            while($row = mysqli_fetch_assoc( $select_query))
            {
            $course_id=$row['course_id'];
            $course_cat=$row['category'];
            $post_image = $row['image'];
            $rating=$row['rating'];
            $about=$row['about'];
            $path=$row['path'];
            $cost=$row['cost'];
            $link=$row['link'];   
                ?>
        <?php } 
          ?>




<!-- !-- 
Blog Comments  -->
         

                <?php 


$query = "SELECT * FROM comments WHERE comment_post_id = {$the_course_id} ";
$query .= "AND comment_status = 'Approved' ";
$query .= "ORDER BY comment_id DESC  ";
$select_comment_query = mysqli_query($connection, $query);
if(!$select_comment_query) {

    die('Query Failed' . mysqli_error($connection));
}
while ($row = mysqli_fetch_array($select_comment_query)) {
$comment_date   = $row['comment_date']; 
$comment_content= $row['comment_content'];
$comment_author = $row['comment_author'];
    ?>

<div class="media">
                    <a class="pull-left" href="#">
                        <!-- <img class="media-object" src="http://placehold.it/64x64" alt=""> -->
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author ; ?>
                            <small><?php echo $comment_date ; ?></small>
                        </h4>
                        <?php echo $comment_content ; ?>
                    </div>
                </div>





    <?php }   ?>





            </div>
            

    
<!-- Blog Sidebar Widgets Column -->
            <?php include"includes/sidebar.php";?>
        </div>
        <!-- /.row -->

        <hr>
    </div>
        <?php include "includes/footer.php";?>

       
            