<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Inscription</title>
</head>
<body>

    <div class="container">
        <div class="divider"></div>
            <div class="heading">
                <h2>Veuillez remplir le formulaire pour acceder cette formation</h2>
            </div>
                <div class="row">
                    
                    <div class="col-lg-10  col-lg-offset-1">
                        <form id="contact-form" method="POST" action="message.php" role="form">
                            <div class="row">
                            <p>
                                <div class="col-md-6">
                                <label for="nom">Nom</label><br>
                                <input type="text" id="name" name="nom" required class="form-control" placeholder="Votre nom">
                                </div>
                            </p>
                            <p>
                                <div class="col-md-6">
                                <label for="prenom">Prénom </label><br>
                                <input type="text" id="firstname" name="prenom" required class="form-control" placeholder="Votre prenom">
                                </div>
                            </p>
                            <p>
                                <div class="col-md-6">
                                <label for="email">Email</label><br>
                                <input type="email" name="email" required class="form-control" placeholder="Votre email">
                                </div>
                            </p>
                            <p>
                                <div class="col-md-6">
                                <label for="convention">Convention</label><br>
                                <input type="number" name="convention" required class="form-control" placeholder="La durée de la formation">
                                </div>
                            </p>
                
                            <div class="col-md-12">
                                
                            <p><button type="submit" class="button1" name ="button" >S'inscrire</button></p>
                            </div>
                            </div>
                            
                        </form>      
                    </div>
            </div>
    </div>
</body>
</html>