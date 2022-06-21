<!DOCTYPE html>
<html lang="en">
<?php 
include("function.php");
$id = $_GET['id'];
delete('category','id_cat',$id);
header("location:eliminar_cate.php");
?>