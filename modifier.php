<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php

         
          include_once "connexion.php";
        
          $id = $_GET['id'];
          
          $req = mysqli_query($con , "SELECT * FROM formations WHERE id = $id");
          $row = mysqli_fetch_assoc($req);


       
       if(isset($_POST['button'])){
           
           extract($_POST);
           
           if(isset($nom) && isset($description) && isset($prix) && $convention){
               
               $req = mysqli_query($con, "UPDATE formations SET nom = '$nom' , description = '$description' , prix = '$prix' , convention = '$convention' WHERE id = $id");
                if($req){
                    header("location: listes.php");
                }else {
                    $message = "Formation non modifié";
                }

           }else {
               
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>

    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Modifier la formation : <?=$row['nom']?> </h2>
        <p class="erreur_message">
           <?php 
              if(isset($message)){
                  echo $message ;
              }
           ?>
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom" value="<?=$row['nom']?>">
            <label>Description</label>
            <input type="text" name="description" value="<?=$row['description']?>">
            <label>Prix</label>
            <input type="number" name="prix" value="<?=$row['prix']?>">
            <label>Convention</label>
            <input type="number" name="convention" value="<?=$row['convention']?>">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>
</html>