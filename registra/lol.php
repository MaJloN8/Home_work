<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="assets/dist/">

    

    <link rel="stylesheet" href="assets/dist/css">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">


    
    <script>
function chpok(id){
    elem = document.getElementById(id); //находим блок div по его id, который передали в функцию
    state = elem.style.display; //смотрим, включен ли сейчас элемент
    if (state =='') elem.style.display='none'; //если включен, то выключаем
    else elem.style.display=''; //иначе - включаем
}
function chpok2(id){
    elem = document.getElementById(id); //находим блок div по его id, который передали в функцию
    state = elem.style.display; //смотрим, включен ли сейчас элемент
    if (state =='') elem.style.display='none'; //если включен, то выключаем
    else elem.style.display=''; //иначе - включаем
}
</script>
    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-primary" id="chpoktext" onclick="suka()">Таблица пользователей</button>
  <button class="btn btn-primary" onclick="chpok2('text2')">Таблица заявок</button>
    <tr><td><a href="vhod.php"  class="btn btn-primary">Выход</a></td></tr></a>
       	 </li>
      </ul>
    </div>



<?php
$conn=mysqli_connect("localhost","developer","developer","development");
$q=mysqli_query($conn,"SELECT * FROM registry3");
	?>
	<div id="text">
		<?php
echo "<table border=1 cellpadding=10>";
echo "<tr><td>Id</td><td>Имя</td><td>Почта</td><td>Пароль</td>";
while($result=mysqli_fetch_assoc($q)){

	echo "<tr>";
	echo "<td>".$result['id']."</td>";
	echo "<td>".$result['name']."</td>";
	echo "<td>".$result['email']."</td>";
    echo "<td>".$result['password']."</td>";
	echo "</tr>";
}
echo "</table>";
	?>

</div>
<?php


	if (!empty($_POST["edit_id"])){
	$eid=$_POST["edit_id"];
	$t=$_POST["name"];
	$s=$_POST["stat"];
	$sql="UPDATE requests SET text='$t',status='$s' WHERE id='$eid'";
	echo $sql;
	mysqli_query($conn, $sql);
	exit;
	//header("Location: /muslim/registra/lol.php");
}	

$q1=mysqli_query($conn,"SELECT * FROM status JOIN requests ON status.id=requests.status JOIN registry3 ON registry3.id=requests.autor_id ");
?>
<div id="text2">
<?php
echo "<table border=1 cellpadding=10>";
echo "<tr><td>Id</td><td>Заявка</td><td>Status</td><td>Name</td><td>Email</td><td>Update</td>";
while($result=mysqli_fetch_assoc($q1)){

	echo "<tr>";
echo "<td>".$result['id']."</td>";
	if(!empty($_GET["edit"])&& $_GET["edit"]==$result['id']){
		echo "<form action=\"\" method=\"post\">";
		echo "<input type=\"hidden\" name=\"edit_id\" value=\"" .$result['id']."\">";
		$content=str_replace("<br>","\n", $result['text']);
		echo "<td><textarea cols=\"50\" rows=\"5\" name=\"name\">".$content."</textarea></td>";
		echo "<td><select name=\"stat\">";
 echo "<option value=\"1\">Отправляется</option>";
 echo "<option value=\"2\">Отправлено</option>";
 echo "<option value=\"3\">Просмотренно</option>";
 echo "<option value=\"4\">В обработкке</option>";
 echo "<option value=\"5\">Успешно</option>";
 echo "<option value=\"6\">Отклонена</option>";
echo "</select></td>";
		//echo "<td><input type=\"text\" name=\"stat\" value=\"".$result['status']."\"></td>";
	}else{
	
	echo "<td>".$result['text']."</td>";
	echo "<td>".$result['name_status']."</td>";
  echo "<td>".$result['name']."</td>";
    echo "<td>".$result['email']."</td>";
	}
	if(!empty($_GET["edit"])&& $_GET["edit"]==$result['id']){
		echo "<td><input type=\"submit\" value=\"UPDATE\">";
		echo "</td></form>";
	
	}else{
	echo "<td><a href=\"?edit=".$result['id']."\"> Редактировать</a></td>";
	}
 
}
 echo "</table>";
?>
</div>
<script>
function suka(){
  let fuck = document.getElementById("text");
  if(fuck.style.display == "none"){
    console.log(fuck.style.display);
    fuck.style.display = "block";
  }else{
    console.log(fuck.style.display);
    fuck.style = "display:none";
  }
}
</script>

