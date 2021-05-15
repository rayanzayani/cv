<?php

include  "connexion.php";

if(isset($_POST['submit'])){
    $nom = $_POST["nom"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $requete1="SELECT * FROM contact WHERE email='$email'";
    if(mysqli_num_rows($conn->query($requete1))===0){   
        $requete = "INSERT IGNORE INTO contact (nom, tel, email, message, id, login, password, role) VALUES ('$nom', '$tel', '$email', '$message',NULL, '$login', '$password', '$role')";
        $conn->query($requete) or die ($conn->error);
        
            $sql= "SELECT * FROM contact";
            $res=$conn->query($sql);
            $data=[];
            while ($row = $res->fetch_assoc()) {
                array_push($data, $row);
            }
            header("Location: ../views/listeUtilisateurs.php");
    }
    else{
        header("Location: ../views/ajouterUser.php?msg=err");
    }

    
}




?>