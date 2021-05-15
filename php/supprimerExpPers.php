<?php

include  "connexion.php";

    $id = $_GET["id"];
if(isset($id)){
    $requete1="DELETE FROM experience_pers WHERE id=".$id; 
    $conn->query($requete1) or die ($conn->error);
    header("Location: ../views/admin/listeExpPers.php");
}
    
?>