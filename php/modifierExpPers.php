<?php

include  "connexion.php";

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $date = $_POST["date"];

        

    $requete="UPDATE experience_pers SET  
        titre='$titre',description='$description',date='$date' WHERE id=".$id;
        $conn->query($requete) or die ($conn->error);
        header("Location: ../views/admin/listeExpPers.php");
    

    
}




?>