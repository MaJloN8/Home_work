<?php
include ("webclass.php");
$conn=mysqli_connect("localhost","developer","developer","development");
if(!empty($_POST["comment"])){
$comment=$_POST["comment"];
$found_id=$_SESSION['found_id'];
$sql="INSERT INTO requests(text,autor_id,status) VALUES ('$comment','$found_id','1')";
//echo $sql;
mysqli_query($conn,$sql);
    //exit;

}header("Location: /muslim/registra/zayavka.php");
?>