<?php

include  "connexion.php";

$login = $_POST["login"];
$password = $_POST["password"];

$requete = "SELECT login,password FROM contact WHERE login='$login' AND password='$password'";

$resultat = $conn->query($requete) or die ($conn->error);

if($ligne = $resultat->fetch_assoc()){
    $login= $ligne['login'];
    header("Location: ../views/accueil.php?login=$login");
}
else{
    echo "no account found";
}

?>