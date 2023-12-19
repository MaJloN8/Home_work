<?php
$conn = mysqli_connect("localhost","developer","developer","development");
if(!empty($_POST["name"])&& !empty($_POST["nachalo"])&& !empty($_POST["dr"]) && !empty($_POST["specialnost"]) && !empty($_POST["rasr"])){
	$name=$_POST["name"];
	$specialnost=$_POST["specialnost"];
	$nachalo=$_POST["nachalo"];
	$dr=$_POST["dr"];
	$rasr=$_POST["rasr"];
	$sql="INSERT INTO metal(fullname,nachalo,dr,special,id_ras) VALUES('$name','$nachalo','$dr','$specialnost','$rasr')";
    mysqli_query($conn,$sql);
}


if(!empty($_POST["rasr1"]) && !empty($_POST["full"])){
	$full=$_POST["full"];
	$rasr1=$_POST["rasr1"];
	$sql="INSERT INTO metal(fullname,id_ras) VALUES('$full','$rasr1')";
	//echo $sql;
    mysqli_query($conn,$sql);
	//exit;
}
header("Location: /muslim/home_work4");
?>
