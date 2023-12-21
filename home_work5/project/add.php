<?php
if(!empty($_POST["title"])&& !empty($_POST["text_comment"])){
    include("connect.php"); //==connect to DB
    $title=$_POST["title"];
    $text_comment=$_POST["text_comment"];
    $text_comment=str_replace("\n","<br>", $text_comment);
    $sql="INSERT INTO kalian(name,comment) VALUES ('$title','$text_comment')";
    mysqli_query($conn,$sql);
}
header("Location: /muslim/project");
?>
