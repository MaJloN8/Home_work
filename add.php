<?php
if(!empty($_POST["username"])&& !empty($_POST["message"])&& !empty($_POST["god"])&& !empty($_POST["filename"])){
	$username=$_POST["username"];
	$message=$_POST["message"];
	$god=$_POST["god"];
	$datetime=date("Y-m-d H:i:s");
	$data="Имя: ".$username."</td>"."<br>Фамилия: ".$message."<br> Год рождения: ".$god."<br><message>\n";
	$file=$_POST["filename"];
	if (file_exists($file)){
		$f=fopen($file,"a+");
		fwrite($f,$data);
		fclose($f);
	}
	header("Location: /muslim/dz/");
}else{
	header("Location: /muslim/dz/");
}
?>