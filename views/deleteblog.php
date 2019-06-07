<?php 
$db=new Database();
$blogid=$_GET['id'];
$delte=$db->deleteBlog($blogid);
redirect("/viewblogs");
?>