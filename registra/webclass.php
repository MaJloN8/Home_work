<?php
session_start();
if(!empty($_POST["email"]) && !empty($_POST["password"])){
$e=$_POST["email"];
$p=md5($_POST["password"]);

$conn = mysqli_connect("localhost","developer","developer","development");
$sql="SELECT * FROM registry3 WHERE email='$e' AND password='$p' ";
//echo $sql;
//exit;
$result=mysqli_query($conn,$sql);
$c=mysqli_num_rows($result);
if ($result->num_rows > 0){
	$row=$result->fetch_assoc();
	$_SESSION['found_id']=$row["id"];
	//echo $_SESSION['found_id'];
	
}
echo $c;
exit;
if($c>0) {
    	
		$rows=mysqli_fetch_array($result);
		$_SESSION["email"]=$rows["email"];
		$_SESSION["password"]=$rows["password"];
		header("Location: zayavka.php"); // = перенаправление на список пользователей
}
else{
    $_SESSION["error"]="Нет такой пары email/пароль в базе данных";
    header("Location: vhod.php"); // = перенаправление на авторизацию
}
}


?>