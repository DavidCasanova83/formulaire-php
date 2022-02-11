<!DOCTYPE html>
<html lang="fr-FR">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylephp.css">
        <title>formulaire php</title>
</head>
<body>
        <header>
                <h1>Mon formulaire</h1>
        </header>
        <main class="container">
        <div class="frame">
                <p>Votre nom est: </p>
                        <div class="php">
                        <?php
                        echo "<br>";
                        echo strtoupper($_POST["nom"]);?>
                        </div>
                <p>Votre prenom est: </p>
                        <div class="php">
                        <?php
                        echo "<br>";
                        echo strtoupper($_POST["prenom"]);?>
                        </div>
                <p>Votre age est: </p>
                        <div class="php">
                        <?php
                        echo "<br>";
                        echo strtoupper($_POST["age"]);?>
                        </div>
                <p>Vous parlez: </p>
                        <div class="php">
                        <?php
                        echo "<br>";
                        if( !empty($_POST['lang']) )
                        {
                                echo $_POST['lang'];
                        }?>
                        </div>
                <p>Vos compétense sont : </p>
                        <div class="php">
                        <?php
                        echo "<br>";
                        foreach($_POST['CHOIX'] as $item)
                        echo $item ." ";?>
                        </div>
                        </div>
                
        </div>
        </main>
</body>
</html>




<!-- <?php
        echo "nom tapé est: ".strtoupper($_POST["nom"]);
        echo "<br>";
        echo "prénom tapé est: ".strtoupper($_POST["prenom"]);
        echo "<br>";
        echo "age tapé est: ".$_POST["age"];
        echo "<br>";

        if( !empty($_POST['lang']) )
        {
                echo "Vous avez choisi : ".$_POST['lang'];
        }
        echo "<br>";

        foreach($_POST['CHOIX'] as $item)
        echo "vous avez choisi : ".$item ."<br>";
?> -->