<html>
<head>
<title>HomeWork</title>
</head>
<?php
include("connect.php");
if (!empty($_POST["edit_id"])){
	$eid=$_POST["edit_id"];
	$t=$_POST["name"];
	$c=$_POST["specialnost"];
	$d=$_POST["nachalo"];
	$d1=$_POST["dr"];
	$sql="UPDATE metal SET fullname='$t',special='$c',nachalo='$d',dr='$d1' WHERE id='$eid'";
	mysqli_query($conn, $sql);
	
	header("Location: /muslim/home_work4");
}
if(!empty($_POST["delete_id"])){
	$del_id=$_POST["delete_id"];
	$sql="DELETE FROM metal WHERE id='$del_id'";
	mysqli_query($conn,$sql);
	header("Location: /muslim/home_work4/");
}
$q=mysqli_query($conn,"SELECT * FROM metal");
echo "<table border=1 cellpadding=10>";
echo "<tr><td>ID</td><td>Имя</td><td>Специальность</td><td>Дата начала работы в огранизации</td><td>День рождения</td>";
while($result=mysqli_fetch_assoc($q)){
	echo "<tr>";
	echo "<td>".$result['id']."</td>";
	if(!empty($_GET["edit"])&& $_GET["edit"]==$result['id']){
		echo "<form action=\"\" method=\"post\">";
		echo "<input type=\"hidden\" name=\"edit_id\" value=\"" .$result['id']."\">";
		echo "<td><input type=\"text\" name=\"name\" value=\"".$result['fullname']."\"></td>";
		echo "<td><input type=\"text\" name=\"specialnost\" value=\"".$result['special']."\"></td>";
	echo "<td><input type=\"text\" name=\"nachalo\" value=\"".$result['nachalo']."\"></td>";
	echo "<td><input type=\"text\" name=\"dr\" value=\"".$result['dr']."\"></td>";
	}else{
	echo "<td>".$result['fullname']."</td>";
	echo "<td>".$result['special']."</td>";
	echo "<td>".$result['nachalo']."</td>";
	echo "<td>".$result['dr']."</td>";
	}

	if(!empty($_GET["edit"])&& $_GET["edit"]==$result['id']){
		echo "<td><input type=\"submit\" value=\"UPDATE\">";
		echo "</td></form>";
	}else{
	echo "<td><a href=\"?edit=".$result['id']."\"> Редактировать</a></td>";
	}
	if(!empty($_GET["delete"])&& $_GET["delete"]==$result['id']){
		echo "<form action=\"\" method=\"post\">";
		echo "<input type=\"hidden\" name=\"delete_id\" value=\"".$result['id']."\">";
		echo "<td><input type=\"submit\" value=\"DELETE\">";
		echo "</td></form>";
	}else{
		echo "<td><a href=\"?delete=".$result['id']."\">Удалить</a></td>";
	}
	echo "</tr>";
}
echo "<table>";

?>
<br>
<form action="add.php", method="POST">
<label>Имя сотрудника</label>
<input type="text" name="name"><br>
<label>Дата начала работы</label>
<input type="date" name="nachalo"><br>
<label>День рождения</label>
<input type="date" name="dr"><br>
<label>Специальность</label>

<select name="specialnost">
  <option value="special">Категория</option>
	<option value="Инженер">Инженер</option>
	<option value="Монтажник">Монтажник</option>
	<option value="Сварщик">Сварщик</option>
	<option value="Программист">Программист</option>
	</select>
	<br>
<label>Разряд</label>
<select name="rasr"><br>
<?php
for ($i=1;$i<5;$i++){
		$i="0".$i;
	echo "<option value=".$i.">".$i."</option>";
}
?>
</select><br>
<input type="submit">
</form>
<br><br><br>
<?php
if (!empty($_POST["edit_id"])){
	$eid1=$_POST["edit_id"];
	$t1=$_POST["full"];
	$c1=$_POST["rasr1"];
	$d2=$_POST["date"];
	
	$sql="UPDATE metal SET fullname='$t1',special='$c1',date='$d2' WHERE id='$eid1'";
	mysqli_query($conn, $sql);
	
	header("Location: /muslim/home_work4");
}
if(!empty($_POST["delete_id"])){
	$del_id=$_POST["delete_id"];
	$sql="DELETE FROM metal WHERE id='$del_id'";
	mysqli_query($conn,$sql);
	header("Location: /muslim/home_work4/");
}
$q1=mysqli_query($conn,"SELECT * FROM metal ORDER BY `metal`.`fullname` ASC");

echo "<table border=1 cellpadding=10>";
echo "<tr><td>Имя</td><td>Разряд</td><td>Время</td>";
while($result=mysqli_fetch_assoc($q1)){

	echo "<tr>";
	
	echo "<td>".$result['fullname']."</td>";
	echo "<td>".$result['id_ras']."</td>";
	echo "<td>".$result['date']."</td>";
	}

	?>
	<form action="add.php", method="POST">
<label>Изменить разряд</label><br>
<label>Выберите имя сотрудника: </label>
<select name="full">
  <option value="fullname">Выберите сотрудника</option>
  <?php
  $sql='SELECT * FROM metal';
  $result=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_assoc($result)){
    echo '<option value ="'.$row['fullname']. '">' .$row['fullname'].'</option>';
  }
    ?>
	</select>
	<br>
	<label>Разряд</label>
<select name="rasr1"><br>
<?php
for ($i=1;$i<5;$i++){
		$i="0".$i;
	echo "<option value=".$i.">".$i."</option>";
}
?>
</select><br>
<input type="submit">
</form>
</html>