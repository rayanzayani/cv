<?php

include  "connexion.php";

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $nom = $_POST["nom"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $message = $_POST["message"];

        

    $requete="UPDATE contact SET  
        nom='$nom',tel='$tel',email='$email',message='$message' WHERE id=".$id;
        $conn->query($requete) or die ($conn->error);
        header("Location: ../views/admin/listeUtilisateurs.php?msg=modifié avec success!");
    

    
}




?>