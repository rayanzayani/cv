<?php
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4' crossorigin='anonymous'></script>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Accueil</title>
</head>
<body>
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <div class='container-fluid'>
          <a class='navbar-brand' href='../admin/accueil.php'>Accueil</a>
          <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='collapse navbar-collapse' id='navbarNav'>
            <ul class='navbar-nav'>
          <li class='nav-item'>
            <a class='nav-link' href='../admin/listeUtilisateurs.php'>Liste des utilisateurs</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='../admin/ajouterExpPers.php'>Ajouter Experience personnelle</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='../admin/ajouterExpPro.php'>Ajouter Experience professionnelle</a>
          </li>
              <li class='nav-item'>
                <a class='nav-link' href='../admin/index.php'>Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <center>
      <div class='card' style='width: 550px;margin-top: 3%;'>
            <div class='card-body'>
      <form action='../../php/ajouterExpPro.php' method='post'>
      <div class='mb-3'>
          <label for='exampleFormControlInput1' class='form-label'>Titre</label>
          <input type='text' class='form-control' id='titre' name='titre' placeholder='title' required>
      </div>
      <div class='mb-3'>
          <label for='exampleFormControlInput1' class='form-label'>Description</label>
          <input type='text' class='form-control' id='description' name='description' placeholder='description' required>
      </div>
      <div class='mb-3'>
          <label for='exampleFormControlInput1' class='form-label'>Date</label>
          <input type='date' class='form-control' id='date' name='date' required>
      </div>
      
      <div class='mb-3'>
          <input type='submit' class='btn btn-success' id='submit' name='submit' value='Ajouter Experience professionnelle'>
      </div>
  </form>
  </div>
        </div>
      </center>
      
</body>
</html>"
?>