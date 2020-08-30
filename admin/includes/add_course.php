<?php
if(isset($_POST['add_course'])){
            $course_cat=$_POST['category'];
            $course_image        = $_FILES['images']['name'];
            $course_image_temp   = $_FILES['images']['tmp_name'];
            $rating=$_POST['rating'];
            $about=$_POST['about'];
            $path=$_POST['path'];
            $cost=$_POST['cost'];
            $link=$_POST['link'];
            move_uploaded_file($course_image_temp, "../images/$course_image" );
            $query="INSERT INTO courses(category, image, rating, about, path, cost ) ";
            $query .="VALUES('{$course_cat}', '{$course_image}' ,'{$rating}', '{$about}', '{$path}','{$cost}' )";
            $in_course=mysqli_query($connection,$query);
            if(!$in_course){
                echo "oops";
            }
            confirmquery($in_course);
            $the_p_i=mysqli_insert_id($connection);
}
?>
<form action="" method="post" enctype="multipart/form-data">    
     
     
<div class="form-group">
    <div>
<label for="category">CATEGORY</label>
    </div>
     <select name="category" id="">
       <?php
        $query= "SELECT * FROM categories " ; 
        $select_categories = mysqli_query($connection,$query);
        confirmquery($select_categories);
       
        while($row = mysqli_fetch_assoc($select_categories))
        {
            $cat_title = $row['cat_title'];
            $cat_id = $row['cat_id'];
           
            if($cat_id == $course_cat) {

            
              echo "<option selected value='{$cat_id}'>{$cat_title}</option>";
      
      
              } else {
               
                echo "<option value='{$cat_id}'>{$cat_title}</option>";
      
      
              }
        }
       
       ?>
     </select>
      
      </div>


        

<!-- 
       <div class="form-group">
       <label for="users">Users</label>
       <select name="post_user" id="">
       </select>
      
      </div> -->





     
      
      
      

       <div class="form-group">
            <label for="rating">Rating</label>
            <input type="text" class="form-control" name="rating">
      </div>
      
      <div class="form-group">
         <label for="image">Image</label>
          <input type="file" name="images">
      </div> 
      
    <div class="form-group">
         <label for="about">about</label>
          <input type="text" class="form-control"  name="about">
      </div>

      <div class="form-group">
         <label for="path">Path</label>
          <input type="text" class="form-control" name="path">
      </div>

      <div class="form-group">
         <label for="cost">Cost</label>
          <input type="text" class="form-control" name="cost">
      </div>

      <div class="form-group">
         <label for="link">Link</label>
          <input type="text" class="form-control" name="link">
      </div>
      
     

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="add_course" value="Publish Post">
      </div>


</form>