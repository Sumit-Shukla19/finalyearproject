
<?php include"includes/db.php";?>
<?php include"includes/header.php";?>
<?php include"includes/nav.php";?>

<!-- <div class="container">

<div class="row"> -->

<?php
if(isset($_POST['login'])){
   $username=$_POST['username'];
   $password=$_POST['password'];
// $query="SELECT * FROM categories WHERE $username='{$cat_title}' ";
// $select_a=mysqli_connect($connection,$query);
// if(!$select_a){
//     echo "oops";
// }
// while($row=mysqli_fetch_array($select_a)){
// $user=$row['cat_title'];
// $pass=$row['cat_id'];


// }
$query="SELECT * FROM courses WHERE course_id='{$password}'";
$s=mysqli_query($connection,$query);

// $user="sumit";
// $pass="123";
while($row=mysqli_fetch_array($s)){
    $db_id=$row['course_id'];
    $db_user=$row['path'];

}
if($username == $db_user && $password == $db_id){
    $_SESSION['course_id']=$db_id;
    header("Location: admin/index.php");
}
else{
    header("Location: index.php");
}
}
?>

    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap text-center">
                <h1>Login</h1>
                    
                    <form action="login.php" method="post">
                    <div class="col-xs-6 col-xs-offset-3">
                    <div class="form-group">
                        <input name="username" type="text" class="form-control text-center"  placeholder="Enter username">
                      
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control text-center" placeholder="Enter password">
                      
                    </div>
                    <span class="input-group-btn">
                        <button class="btn btn-custom btn-lg btn-block" name="login" type="submit"> 
                            Submit
                        </button>

                    </span>
                    </div>
</div>
</form>
</div>

        <?php include"includes/footer.php";?>