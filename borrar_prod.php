<!DOCTYPE html>
<html lang="en">

<?php 
include("function.php");
$id = $_GET['id'];
delete('product','id',$id);
header("location:eliminar_prod.php");
?>