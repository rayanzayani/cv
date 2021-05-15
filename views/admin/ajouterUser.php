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
            <a class='nav-link' aria-current='page' href='../admin/ajouterUser.php'>Ajouter un nouvel utilisateur</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='../admin/listeUtilisateurs.php'>Liste des utilisateurs</a>
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
      <form action='../../php/ajoutUser.php' method='post'>
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
          <input type='submit' class='btn btn-success' id='submit' name='submit' value='Envoyer message'>
      </div>
  </form>
  </div>
        </div>
      </center>
      
</body>
</html>"
?>