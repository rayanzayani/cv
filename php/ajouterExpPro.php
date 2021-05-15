<?php

include  "connexion.php";

if(isset($_POST['submit'])){
    $date = $_POST["date"];
    $description = $_POST["description"];
    $titre = $_POST["titre"];

    $requete1="SELECT * FROM experience_pro WHERE titre='$titre'";
    if(mysqli_num_rows($conn->query($requete1))===0){   
        $requete = "INSERT IGNORE INTO experience_pro (date, description, titre, id) VALUES ('$date', '$description', '$titre',NULL)";
        $conn->query($requete) or die ($conn->error);
            header("Location: ../views/admin/listeExpPro.php");
    }
    else{
        header("Location: ../views/admin/listeExpPro.php?msg=err");
    }

    
}




?>