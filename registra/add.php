<?php
$conn=mysqli_connect("localhost","developer","developer","development");
if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["pass"]) && !empty($_POST["gorod"]) && !empty($_POST["date"])){
$name=$_POST["name"];
$email=$_POST["email"];
$pass=md5($_POST["pass"]);
$gorod=$_POST["gorod"];
$date=$_POST["date"];
$sql="INSERT INTO registry3(name,email,password,gorod,date) VALUES ('$name','$email','$pass','$gorod','$date')";

mysqli_query($conn,$sql);

header("Location: /muslim/registra/vhod.php");
}

?>