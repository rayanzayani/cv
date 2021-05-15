<?php

include  "connexion.php";

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $description = $_POST["desc$description"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $dateNaiss = $_POST["dateNaiss"];
    $nationnalite = $_POST["nationnalite"];

        

    $requete="UPDATE info SET  
        nom='$nom',prenom='$prenom',adresse='$adresse',description='$description',email='$email',tel='$tel',dateNaiss='$dateNaiss',nationnalite='nationnalite' WHERE id=".$id;
        $conn->query($requete) or die ($conn->error);
        header("Location: ../views/admin/info.php");
    

    
}




?>