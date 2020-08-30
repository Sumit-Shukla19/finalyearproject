<?php session_start();?>
<?php
 $_SESSION['course_id']=null;
 $_SESSION['path']=null;

 header("Location: ../index.php");
?>