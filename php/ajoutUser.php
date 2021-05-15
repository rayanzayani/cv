<?php

include  "connexion.php";

if(isset($_POST['submit'])){
    $nom = $_POST["nom"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $requete1="SELECT * FROM contact WHERE email='$email'";
    if(mysqli_num_rows($conn->query($requete1))===0){   
        $requete = "INSERT IGNORE INTO contact (nom, tel, email, message, id) VALUES ('$nom', '$tel', '$email', '$message',NULL)";
        $conn->query($requete) or die ($conn->error);
        
            $sql= "SELECT * FROM contact";
            $res=$conn->query($sql);
            $data=[];
            while ($row = $res->fetch_assoc()) {
                array_push($data, $row);
            }
            header("Location: ../views/cv/contact.php");
    }
    else{
        header("Location: ../views/cv/contact.php?msg=err");
    }

    
}




?>