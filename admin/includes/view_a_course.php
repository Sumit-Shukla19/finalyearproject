<form action="" method='post'>
<table class="table table-bordered table-hover">
         <thead>
             <tr>
                 <th>COURSE_ID</th>
                 <th>CATEGORY</th>
                 <th>IMAGE</th>
                 <th>RATING</th>
                 <th>ABOUT</th>
                 <th>PATH</th>
                 <th>COST</th>
                 <th>LINK</th>
                 <th>EDIT</th>
                 <th>DELETE</th>
             </tr>
         </thead>
         <tbody>
             
          <?php 
           $query= "SELECT * FROM courses" ;
           $select_course = mysqli_query($connection,$query);
           if(!$select_course){
               echo "oops";
           }
          while($row = mysqli_fetch_assoc($select_course))
         {
        $the_course_id=$row['course_id'];
        $course_cat = $row['category'];
        $course_image = $row['image'];
        $course_rating = $row['rating'];
        $course_about = $row['about'];
        $course_path = $row['path'];
        $course_cost=$row['cost'];
        $course_link=$row['link'];
        echo "<tr>";
        echo "<td>$the_course_id</td>";
        $query = "SELECT * FROM categories WHERE cat_id=$course_cat ";
        $select_categories_id = mysqli_query($connection,$query);  

        while($row = mysqli_fetch_assoc($select_categories_id)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        
        
        echo "<td>$cat_title</td>";
    }         
        echo "<td><img width='100' src='../images/$course_image' alt='image'></td>";
        echo "<td> $course_rating</td>";
        echo "<td> $course_about</td>";
        echo "<td> $course_path</td>";
        echo "<td> $course_cost</td>";
        echo "<td> $course_link</td>";
        echo "<td><a href ='post.php?source=edit course&c_id={$the_course_id}'>Edit</a></td>";
        echo "<td><a href ='post.php?delete={$the_course_id}'>Delete</a></td>";
        echo "</tr>";
         }
        ?>
         </tbody>
     </table>
</form>
     <?php 
     if(isset($_GET['delete'])){
            $thee_course_id=$_GET['delete'];
     $query="DELETE FROM courses WHERE course_id={$thee_course_id} ";
     $del_query=mysqli_query($connection,$query);
     header("location: post.php");
        }
     ?>
     
