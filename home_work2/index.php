<html>
<head>
<title>HomeWork</title>
</head>
<?php
include("connect.php");
$q=mysqli_query($conn,"SELECT teachers.Name,teachers.surname,shedule.start_time,shedule.lesson_date,classes.class FROM teachers JOIN shedule ON teachers.id = shedule.teacher_id LEFT JOIN classes ON classes.id=shedule.class_id");

echo "<table border=1 cellpadding=10>";
echo "<tr><td colspan=\"5\"><center>Расписание для преподавателей: </center></td></tr>";
while($result=mysqli_fetch_assoc($q)){
	echo "<tr>";
	
	echo "<td>".$result['Name']."</td>";
	echo "<td>".$result['surname']."</td>";
	echo "<td>".$result['start_time']."</td>";
	echo "<td>".$result['lesson_date']."</td>";
	echo "<td>".$result['class']."</td>";
	echo "</tr>";
	}
	echo "<br>";
$q1=mysqli_query($conn,"SELECT classes.class, shedule.start_time,shedule.lesson_date,lessons.predmet FROM classes JOIN shedule ON classes.id = shedule.class_id LEFT JOIN lessons ON lessons.id=shedule.lesson_id");

echo "<table border=1 cellpadding=10>";
echo "<tr><td colspan=\"4\"><center>Расписание для Учеников:</center> </td></tr>";
while($result=mysqli_fetch_assoc($q1)){
	echo "<tr>";
	
	echo "<td>".$result['class']."</td>";
	echo "<td>".$result['start_time']."</td>";
	echo "<td>".$result['lesson_date']."</td>";
	echo "<td>".$result['predmet']."</td>";
	echo "</tr>";
	}
echo "<br>";
echo "</table>"
?>
<br>
<hr>
<table  border=1 cellpadding=10>
<tr><td colspan="3"><center>Добавить информацию </center></td></tr>
<form action="add.php", method="POST">
<tr><td><label>Имя</label></td>
<td><input type="text" name="name"></td><br>
<td rowspan="2"><input type="submit"><br></td>
<tr><td><label>Фамилия</label></td>
<td><input type="text" name="surname"></td></tr>

</form>
<br>
<form action="add.php", method="POST">
<tr><td><label>Предмет</label></td>
<td><input type="text" name="predmet"></td>
<td><input type="submit"></td></tr><br>
</form>
<br>
<form action="add.php", method="POST">
<tr><td><label>Класс</label></td>
<td><select name="class">
<option value="1A">1A</option>
<option value="1Б">1Б</option>
<option value="2A">2А</option>
<option value="2Б">2Б</option>
<option value="3A">3A</option>
<option value="4Б">4Б</option>
<option value="4A">4A</option>
<option value="5">5A</option>
<option value="5A">5Б</option>
<option value="6A">6A</option>
<option value="6Б">6Б</option>
<option value="7A">7A</option>
<option value="7Б">7Б</option>
<option value="8A">8A</option>
<option value="8Б">8Б</option>
<option value="9A">9A</option>
<option value="9Б">9Б</option>
<option value="10A">10A</option>
<option value="10Б">10Б</option>
<option value="11A">11A</option>
<option value="11Б">11Б</option></td>

</select>
<td><input type="submit"></td></tr><br>
</table>
</form>
<br><hr>
<form action="add.php", method="POST">
<table  border=1 cellpadding=10>
<tr><td colspan="2"><center>Составить расписание </center></td></tr>
<tr><td><label>по преподавателю</label></td>
<td><select name="prepod">
  <option value="fullname">Выберите сотрудника</option>
  <?php
  $sql='SELECT * FROM teachers';
  $result=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_assoc($result)){
    echo '<option value ="'.$row['id']. '">' .$row['surname'].'</option>';
  }
    ?>
	</select></td></tr>
	
	<tr><td><label>Время</label></td>
	<td><input type="time" name="appt" required ></td></tr>
	<tr><td><label>День</label></td>
	<td><input type="date" name="date" required ></td></tr>

	<tr><td><label>Классы</label></td>
<td><select name="clas">
  <option value="fullname">Выберите класс</option>
  <?php
  $sql='SELECT * FROM classes';
  $result=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_assoc($result)){
    echo '<option value ="'.$row['id']. '">' .$row['class'].'</option>';
  }
    ?>
	</select></td></tr>
	
	<tr><td><label>Предмет</label></td>
<td><select name="lessons">
  <option value="fullname">Выберите класс</option>
  <?php
  $sql='SELECT * FROM lessons';
  $result=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_assoc($result)){
    echo '<option value ="'.$row['id']. '">' .$row['predmet'].'</option>';
  }
    ?>
	</select></td></tr>
	
<td colspan="2"><center><input type="submit"></center></td></tr><br>
</form>
</html>