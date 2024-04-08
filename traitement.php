
<?php
    // $server = "localhost";
    // $dbname = "basededonnee";
    // $user = "root";
    // $pass ="";

    // $nom = $_POST['nom'];
    // $prenom = $_POST['prenom'];
    // $heure = $_POST['heure'];
    // $date = $_POST['date'];
    // $lieu = $_POST['lieu'];
    // $region = $_POST['region'];
    // $poids = $_POST['poids'];
    // $pere = $_POST['pere'];
    // $professionpere = $_POST['professionpere'];
    // $originairepere = $_POST['originairepere'];
    // $mere = $_POST['mere'];
    // $professionmere = $_POST['professionmere'];
    // $originairemere = $_POST['originairemere'];
    // $nombrefs = $_POST['nombrefs'];
    // $adresse = $_POST['adresse'];
    // $coms = $_POST['coms'];

    // try {
    //     $dbco = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    //     $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $sth = $dbco->prepare("
    //         INSERT INTO `sitedenaissance` (`nom`, `prenom`, `heure`, 
    //         `date`, `lieu`, `region`, `poids`, `pere`, `professionpere`, `originairepere`, `mere`, `professionmere`, 
    //         `originairemere`, `nombrefs`, `adresse`, `coms`) 
    //         VALUES (:nom, :prenom, :heure, :date, :lieu, :region, :poids,
    //        :pere, :professionpere, :originairepere, :mere, :professionmere, 
    //         :originairemere, :nombrefs, :adresse, :coms)
    //     ");

    //     $sth->bindParam(':nom', $nom);
    //     $sth->bindParam(':prenom', $prenom);
    //     $sth->bindParam(':heure', $heure);
    //     $sth->bindParam(':date', $date);
    //     $sth->bindParam(':lieu', $lieu);
    //     $sth->bindParam(':region', $region);
    //     $sth->bindParam(':poids', $poids);
    //     $sth->bindParam(':pere', $pere);
    //     $sth->bindParam(':professionpere', $professionpere);
    //     $sth->bindParam(':originairepere', $originairepere);
    //     $sth->bindParam(':mere', $mere);
    //     $sth->bindParam(':professionmere', $professionmere);
    //     $sth->bindParam(':originairemere', $originairemere);
    //     $sth->bindParam(':nombrefs', $nombrefs);
    //     $sth->bindParam(':adresse', $adresse);
    //     $sth->bindParam(':coms', $coms);

    //     $sth->execute();

    
    //     header("Location: merci.html");
    // }
    
    // catch(PDOException $e) {
    //     echo 'Erreur : ' . $e->getMessage();
    // }



    $server = "localhost";
    $dbname ="bebe";
    $user = "root";
    $pass ="";

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $heure = $_POST['heure'];
    $date = $_POST['date'];
    $lieu = $_POST['lieu'];
    $sexe = $_POST['sexe'];
    $poids = $_POST['poids'];
    $sante = $_POST['sante'];
    $photo = $_POST['photo'];
    $nfs = $_POST['nfs'];
    $pere = $_POST['pere'];
    $professionpere = $_POST['professionpere'];
    $originairepere = $_POST['originairepere'];
    $mere = $_POST['mere'];
    $professionmere = $_POST['professionmere'];
    $originairemere = $_POST['originairemere'];
    $adresse = $_POST['adresse'];
    $contact = $_POST['contact'];

    try {
        $dbco = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $dbco->prepare
        ("
            INSERT INTO `nampiasilala` (`nom`, `prenom`, `heure`, 
            `date`, `lieu`, `sexe`, `poids`, `sante`, `photo`, `nfs`, `pere`, `professionpere`, `originairepere`, `mere`, `professionmere`, 
            `originairemere`, `adresse`, `contact`)

            VALUES (:nom, :prenom, :heure, 
            :date, :lieu, :sexe, :poids, :sante, :photo, :nfs, :pere, :professionpere, :originairepere, :mere, :professionmere, 
            :originairemere, :adresse, :contact)
        ");

        $sth->bindParam(':nom', $nom);
        $sth->bindParam(':prenom', $prenom);
        $sth->bindParam(':heure', $heure);
        $sth->bindParam(':date', $date);
        $sth->bindParam(':lieu', $lieu);
        $sth->bindParam(':sexe', $sexe);
        $sth->bindParam(':poids', $poids);
        $sth->bindParam(':sante', $sante);
        $sth->bindParam(':photo', $photo);
        $sth->bindParam(':nfs', $nfs);
        $sth->bindParam(':pere', $pere);
        $sth->bindParam(':professionpere', $professionpere);
        $sth->bindParam(':originairepere', $originairepere);
        $sth->bindParam(':mere', $mere);
        $sth->bindParam(':professionmere', $professionmere);
        $sth->bindParam(':originairemere', $originairemere);
        $sth->bindParam(':adresse', $adresse);
        $sth->bindParam(':contact', $contact);

        $sth->execute();

    
        header("Location: merci.html");
    }
    
    catch(PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }













    






?>


