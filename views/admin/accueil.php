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
                <a class='nav-link' href='../admin/listeUtilisateurs.php'>Liste des contacts</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='../admin/index.php'>Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <center>
      <h3>Welcome back <?php
      if(!empty($_GET['login'])){
        echo $_GET['login'];
      }
      else{
        echo "";
      }
      
      
      ?></h3>
      </center>
      
</body>
</html>