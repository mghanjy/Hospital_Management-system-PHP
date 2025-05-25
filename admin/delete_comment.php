<?php
 include("../connection.php");
if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];
$sql="DELETE FROM comment where id='$id'";
$result= $database->query($sql);
if($result){
    #echo "Dleted succesfully";
    header('location:commend.php');
}
else{
   echo "Eroorr";
}
}
?>