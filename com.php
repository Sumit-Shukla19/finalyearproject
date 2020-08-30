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
          
<?php 
                    if(isset($_POST['create_comment'])){
                        $the_post_id=$_GET['p_id'];
                        $the_comment_author=$_POST['comment_author'];
                        $the_comment_email=$_POST['comment_email'];
                        $the_comment_content=$_POST['comment_content'];


                        if(!empty($the_comment_author) && !empty($the_comment_email) && !empty($the_comment_content)){
                        
                      $query ="INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) ";
                      $query.= " VALUES ($the_course_id, '{$the_comment_author}', '{$the_comment_email}', '{$the_comment_content}', 'unapproved', now())";
                        $create_c_q=mysqli_query($connection,$query);
//                         $query="UPDATE post SET post_comment_count=post_comment_count + 1"; 
// $query .=" WHERE post_id= $the_post_id"; 
// $update_c_c=mysqli_query($connection,$query);
                        if(!$create_c_q){
                                echo "oops";
                        }}
                  else{
                        echo "<script>alert('Fields cannot be empty')</script>";
                  }
                  
                  
                    }
                    
                    
                    ?>
                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form action="" method="post" role="form">
                        <div class="form-group">
                            <label for="Author">Author</label>
                            <input type="text" class="form-control" name="comment_author">
                        </div>
                        <div class="form-group">
                        <label for="email">email</label>
                            <input type="text" class="form-control" name="comment_email">
                        </div>
                        <div class="form-group">
                            <label for="comment">Your comment</label>
                            <textarea class="form-control" name="comment_content" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" name="create_comment" class="btn btn-primary">Submit</button>
                  
                   
                        </form>
                </div>

                <hr>

            </div>
            

    
<!-- Blog Sidebar Widgets Column -->
            <?php include"includes/sidebar.php";?>
        </div>
        <!-- /.row -->

        <hr>
    </div>
        <?php include "includes/footer.php";?>