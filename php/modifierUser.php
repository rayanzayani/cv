<?php

include  "connexion.php";

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $nom = $_POST["nom"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $req="SELECT * FROM contact WHERE id=".$id;
    $conn->query($requete) or die ($conn->error);
        

    $requete="UPDATE contact SET  
        nom='$nom',tel='$tel',email='$email',message='$message',login='$login',password='$password',role='$role'
        WHERE id=".$id;
        $conn->query($requete) or die ($conn->error);
        header("Location: ../views/listeUtilisateurs.php");
    

    
}




?>