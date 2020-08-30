<?php
if(isset($_GET['c_id'])){
    $the_c_i=$_GET['c_id'];
}
$query="SELECT * FROM courses WHERE course_id=$the_c_i ";
$select_course_id=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($select_course_id))
{
$course_id=$row['course_id'];
$course_cat=$row['category'];
$course_image=$row['image'];
$course_rating=$row['rating'];
$course_about=$row['about'];
$course_path=$row['path'];
$course_cost=$row['cost'];
$course_link=$row['link'];
}
if(isset($_POST['update_course'])){
    $course_cat=$_POST['cat'];
    $course_rating=$_POST['rating'];
    $course_about=$_POST['about'];
    $course_path=$_POST['path'];
    $course_cost=$_POST['cost'];
    $course_link=$_POST['link'];
    $course_image=$_FILES['image']['name'];
    $course_image_temp=$_FILES['image']['tmp_name'];
    move_uploaded_file($course_image_temp, "../images/$course_image"); 
    if(empty($course_image)) {
          
      $query = "SELECT * FROM courses WHERE course_id = $the_c_i ";
      $select_image = mysqli_query($connection,$query);
          if(!$select_image){
            echo "oops";
          }
      while($row = mysqli_fetch_array($select_image)) {
          
         $course_image = $row['image'];
      
      }
}
$query="UPDATE courses SET ";
$query .="category= '$course_cat', ";
$query .="rating= '$course_rating', ";
$query .="about= '$course_about', ";
$query .="path= '$course_path', ";
$query .="image= '$course_image', ";
$query .="cost= '$course_cost', ";
$query .="link= '$course_link' ";
$query .="WHERE course_id=$the_c_i";
$update_course=mysqli_query($connection,$query);
confirmquery($update_course);
}
?>
<form action="" method="post" enctype="multipart/form-data">    
     
     
<div class="form-group">
    <div>
<label for="category">CATEGORY</label>
    </div>
     <select name="cat" id="">
       <?php
        $query= "SELECT * FROM categories" ; 
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

    <div class="form-group">
        <img width="50" src="../images/<?php echo $course_image;?>" alt="">
        <input type='file' name='image'>
      </div>

      <div class="form-group">
         <label for="rating">RATING</label>
          <input value="<?php echo $course_rating; ?>" type="text" class="form-control" name="rating">
      </div> 

     <div class="form-group">
         <label for="about">ABOUT</label>
          <input value="<?php echo $course_about; ?>" type="text" class="form-control" name="about">
      </div>
      
      <div class="form-group">
         <label for="path">PATH</label>
         <input value="<?php echo $course_path; ?>" type="text" class="form-control" name="path">
      </div>

      <div class="form-group">
         <label for="cost">COST</label>
         <input value="<?php echo $course_cost; ?>" type="text" class="form-control" name="cost">
      </div>
      <div class="form-group">
         <label for="link">LINK</label>
         <input value="<?php echo $course_link; ?>" type="text" class="form-control" name="link">
      </div>
      
      

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="update_course" value="Update ">
      </div>


</form>