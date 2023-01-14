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
       
       if(isset($_POST['button'])){
           
           extract($_POST);
           
           if(isset($nom) && isset($description) && isset($prix) && $convention){
                
                include_once "connexion.php";
                
                $req = mysqli_query($con , "INSERT INTO formations VALUES(NULL, '$nom', '$description','$prix', '$convention')");
                if($req){
                    header("location: listes.php");
                }else {
                    $message = "Formation non ajouté";
                }

           }else {
               
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter une formation</h2>
        <p class="erreur_message">
            <?php 
            
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Description</label>
            <input type="text" name="description">
            <label>Prix</label>
            <input type="number" name="prix">
            <label>Convention</label>
            <input type="number" name="convention">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>