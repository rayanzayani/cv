<?php

include  "../php/connexion.php";

$sql="SELECT * FROM contact";
$res=$conn->query($sql);

$data=[];
while ($row = $res->fetch_assoc()) {
    array_push($data, $row);
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4' crossorigin='anonymous'></script>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
<nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <div class='container-fluid'>
          <a class='navbar-brand' href='../views/accueil.php'>Accueil</a>
          <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='collapse navbar-collapse' id='navbarNav'>
            <ul class='navbar-nav'>
            <li class='nav-item'>
                <a class='nav-link' aria-current='page' href='../views/ajouterUser.php'>Ajouter un nouvel utilisateur</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='../views/listeUtilisateurs.php'>Liste des utilisateurs</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <center>
        <h3>Liste des utilisateurs</h3>
        <table class='table'>
  <thead>
    <tr>
      <th scope='col'>Nom</th>
      <th scope='col'>Tel</th>
      <th scope='col'>Email</th>
      <th scope='col'>Message</th>
      <th scope='col'>Login</th>
      <th scope='col'>Password</th>
      <th scope='col'>Role</th>
      <th scope='col'>Modifier</th>
      <th scope='col'>Supprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($data as $key => $value) {
      echo "<tr>
        <td>".$data[$key]['nom']."</td>
        <td>".$data[$key]['tel']."</td>
        <td>".$data[$key]['email']."</td>
        <td>".$data[$key]['message']."</td>
        <td>".$data[$key]['login']."</td>
        <td>".$data[$key]['password']."</td>
        <td>".$data[$key]['role']."</td>
        <td>
        <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal".$data[$key]['id']."'>
          Modifier
        </button></td>
        <td><a href='../php/supprimerUser.php?id=".$data[$key]['id']."'>Supprimer</a></td>
        </tr>
        
<div class='modal fade' id='exampleModal".$data[$key]['id']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        <form action='../php/modifierUser.php?id=".$data[$key]['id']."' method='post'>
        <div class='mb-3'>
        <label for='exampleFormControlInput1' class='form-label'>Nom</label>
        <input type='text' class='form-control' id='nom' name='nom' placeholder='bob' required>
    </div>
    <div class='mb-3'>
        <label for='exampleFormControlInput1' class='form-label'>Tel</label>
        <input type='text' class='form-control' id='tel' name='tel' placeholder='(+216) 12345678' required>
    </div>
    <div class='mb-3'>
        <label for='exampleFormControlInput1' class='form-label'>Email</label>
        <input type='email' class='form-control' id='email' name='email' placeholder='example@gmail.com' required>
    </div>
    <div class='mb-3'>
        <label for='exampleFormControlInput1' class='form-label'>Message</label>
        <input type='text' class='form-control' id='message' name='message' placeholder='hello' required>
    </div>
    <div class='mb-3'>
        <label for='exampleFormControlInput1' class='form-label'>Login</label>
        <input type='text' class='form-control' id='login' name='login' placeholder='bob' required>
    </div>
    <div class='mb-3'>
        <label for='exampleFormControlInput1' class='form-label'>Mot de passe</label>
        <input type='password' class='form-control' id='password' name='password' required>
    </div>
    <div class='mb-3'>
      <label for='exampleFormControlInput1' class='form-label'>Role</label>
        <select class='form-select' aria-label='Default select example' id='role' name='role' required>
          <option value=1>Admin</option>
          <option value=0>Utilisateur simple</option>
        </select>
    </div>        
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
        <button type='submit' name='submit' class='btn btn-primary'>Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>";
      }?>
    
    
  </tbody>
</table>
    </center>
    
</body>
</html>

