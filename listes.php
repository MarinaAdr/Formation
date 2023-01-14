<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des formations</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>
        
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Durée</th>
                <th>Action</th>
            </tr>
            <?php 
                
                include_once "connexion.php";
                
                $req = mysqli_query($con , "SELECT * FROM formations ORDER BY formations.id ");
                if(mysqli_num_rows($req) == 0){
                    echo "Il n'y a pas encore de formation ajoutee !" ;
                    
                }else {
                    
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['nom']?></td>
                            <td><?=$row['description']?></td>
                            <td><?=$row['prix']?></td>
                            <td><?=$row['convention']?></td>
                            
                            <td><a href="modifier.php?id=<?=$row['id']?>"><img src="images/pen.png"></a></td>
                            <td><a href="supprimer.php?id=<?=$row['id']?>"><img src="images/trash.png"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>
   
   
   
   
    </div>
</body>
</html>