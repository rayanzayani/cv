<?php

include  "../../php/connexion.php";

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
      <?php
        if(!empty($_GET['msg'])){
          echo "
          
          <div class='alert alert-primary d-flex align-items-center' role='alert' style='width:250px'>
  <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-exclamation-triangle-fill flex-shrink-0 me-2' viewBox='0 0 16 16' role='img' aria-label='Warning:'>
    <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
  </svg>
  <div>".
     $_GET['msg']
  ."</div>
</div>
          
          ";
        }
        if(!empty($_GET['supp'])){
          echo "
          
          <div class='alert alert-danger  d-flex align-items-center' role='alert' style='width:250px'>
  <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-exclamation-triangle-fill flex-shrink-0 me-2' viewBox='0 0 16 16' role='img' aria-label='Warning:'>
    <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
  </svg>
  <div>".
     $_GET['supp']
  ."</div>
</div>
          
          ";
        }
      ?>
        <h3>Liste des utilisateurs</h3>
        <table class='table'>
  <thead>
    <tr>
      <th scope='col'>Nom</th>
      <th scope='col'>Tel</th>
      <th scope='col'>Email</th>
      <th scope='col'>Message</th>
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
        <td>
        <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal".$data[$key]['id']."'>
          Modifier
        </button></td>
        <td>
        <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#deleteModal".$data[$key]['id']."'>
          Supprimer
        </button></td>
        </tr>
        
<div class='modal fade' id='exampleModal".$data[$key]['id']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        <form action='../../php/modifierUser.php?id=".$data[$key]['id']."' method='post'>
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
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
        <button type='submit' name='submit' class='btn btn-primary'>Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class='modal fade' id='deleteModal".$data[$key]['id']."' tabindex='-1' aria-labelledby='deleteModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Supprimer</h5>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
      <a class='btn btn-danger' href='../../php/supprimerUser.php?id=".$data[$key]['id']."'>Supprimer</a>
      </div>
    </div>
  </div>
</div>

";
      }?>
    
    
  </tbody>
</table>
    </center>
    
</body>
</html>

