<?php
$count=3;
$filename="file.csv";
if(file_exists($filename)){
	$f=fopen($filename,"r");
	$r="";
	while(!feof($f)){
		$r.=fread($f,1024);
	}
	$arrays=explode("<message>",$r);
	$c=count($arrays);
	$c--;
	for($i=$c;$i>=0;$i--){
		echo $arrays[$i]."<hr>";
	}
	

	}



?>
<form action="add.php" method="post">
<input type="hidden" name="filename" value="<?php echo $filename;?>">
Имя пользователя: <input type="text" name="username">
<br>
Фамилия <input type="text" name="message">
<br>
Год рождения: <select name="god">
<?php
for($i=1950; $i<=2023; $i++)
{
    echo "<option value=".$i.">".$i."</option>";
}
?>
<br><br>
<input type="submit" value="Добавить">
</form>
</body>
</html>
