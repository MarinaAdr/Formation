<?php
    $conn = mysqli_connect('localhost', 'root','', 'gestion') or die(mysqli_error());
    $NOM=$_POST['nom'];
    $PRENOM=$_POST['prenom'];
    $EMAIL=$_POST['email'];
    $CONVENTION=$_POST['convention'];

    $req="INSERT INTO etudiants (nom,prenom,email,convention) VALUES ('$NOM', '$PRENOM', '$EMAIL', '$CONVENTION')";
    $res=mysqli_query($conn,$req);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Attestation</title>
</head>
<body>
<div class="container">
        <div class="divider"></div>
            <div class="heading">
                <h2>Merci d'avoir suivi notre formation</h2>
            </div>
                <div class="row">
                    
                    <div class="col-lg-10  col-lg-offset-1">
                        <form id="contact-form" method="GET" action="confirmation.php" role="form">
                        <p>Bonjour <?php echo "$NOM " . "$PRENOM,";?><br></p>
                        <p>Vous avez suivi <?php echo $CONVENTION ?> heures de formation chez FormaPlus. <br>
                        Pouvez-vous nous retourner ce mail avec la piece jointe.<br></p>
                        Cordialement,<br>
                        ForamtionPlus
                    </div>
                        </form>      
                    </div>
                </div>
    </div>
   
</body>
</html>