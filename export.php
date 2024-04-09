


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de naissance</title>
</head>
<body>

    <header>
        <h2>Tous les nouveaux nés</h2>
    </header>

    <body>
        

            <?php

                $dbco = new PDO("mysql:host=localhost;dbname=bebe", "root", "");
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $requete = "SELECT * FROM nampiasilala   ORDER BY id ASC";
                $result = $dbco->query($requete);

                if (!$result) {
                    echo "Récupération des données echoués !";


                    
                }



                else {
                    $nbre_clients = $result->rowCount();
                    
            ?>
                
                <h3>Il y a <?=$nbre_clients?></h3>

                <table border="1">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Heure</th>
                        <th>Date</th>
                        <th>Lieu</th>
                        <th>Sexe</th>
                        <th>Poids</th>
                        <th>Santé</th>
                        <th>Photo</th>
                        <th>Nombre frère soeur</th>
                        <th>Père</th>
                        <th>Profession</th>
                        <th>Originaire</th>
                        <th>Mère</th>
                        <th>Profession</th>
                        <th>Originaire</th>
                        <th>Adresse</th>
                        <th>Contact</th>
                    </tr>

                    <?php

                    while($ligne=$result->fetch(PDO::FETCH_NUM)) 
                    {
                        echo "<tr>";
                        foreach ($ligne as $valeur) 
                        {
                            echo "<td>$valeur</td>";
                        }
                        echo "</tr>";
                    }

                    ?>

                </table>
            

                <?php
                $result->closeCursor();
            
            }
            ?>
    </body>
        <footer>
            <p>
            <a href="index.html" title="Retour vers la page principale"><em>@site de naissance</em></a>
            </p>
        </footer>
</body>
</html>
