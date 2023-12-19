<?php
$conn = mysqli_connect("localhost","developer","developer","development");

if(!empty($_POST["name"]) && !empty($_POST["surname"])){ //учителя
    
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $sql="INSERT INTO teachers(name,surname) VALUES('$name','$surname')";
  //echo $sql;
    mysqli_query($conn,$sql);
//exit;
}
if(!empty($_POST["predmet"])){ // название предмета
    $predmet=$_POST["predmet"];
    $surname=$_POST["surname"];
    $sql="INSERT INTO lessons(predmet) VALUES('$predmet')";
  //echo $sql;
    mysqli_query($conn,$sql);
//exit;
}
if(!empty($_POST["class"] )){ //класс
    $class=$_POST["class"];
    $sql="INSERT INTO classes(class) VALUES('$class')";
  //echo $sql;
    mysqli_query($conn,$sql);
//exit;
}
if(!empty($_POST["class"] )){ //класс
    $class=$_POST["class"];
    $sql="INSERT INTO classes(class) VALUES('$class')";
  //echo $sql;
    mysqli_query($conn,$sql);
//exit;
}
if(!empty($_POST["prepod"]) && !empty($_POST["lessons"]) && !empty($_POST["appt"]) && !empty($_POST["date"])&& !empty($_POST["clas"])){ 
   $prepod=$_POST["prepod"];
	 $lessons=$_POST["lessons"];
    $appt=$_POST["appt"];
	 $date=$_POST["date"];
	  $clas=$_POST["clas"];
    $sql="INSERT INTO shedule(teacher_id,lesson_id,start_time,lesson_date,class_id) VALUES('$prepod','$lessons','$appt','$date','$clas')";
 //echo $sql;
    mysqli_query($conn,$sql);
//exit;
}
header("Location: /muslim/home_work2/");
?>
