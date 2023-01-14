<?php
  
  include_once "connexion.php";
  
  $id= $_GET['id'];
  
  $req = mysqli_query($con , "DELETE FROM formations WHERE id = $id");
  
  header("Location:listes.php")
?>