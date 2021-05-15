<!DOCTYPE html>
<html lang='en'>
<head>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4' crossorigin='anonymous'></script>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>index</title>
</head>
<body>
    <center>
    <?php
        if(!empty($_GET['msg'])){
          echo "
          
          <div class='alert alert-danger  d-flex align-items-center' role='alert' style='position: absolute;
          left: 41%;
          top: 15%;width:250px'>
  <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-exclamation-triangle-fill flex-shrink-0 me-2' viewBox='0 0 16 16' role='img' aria-label='Warning:'>
    <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
  </svg>
  <div>".
     $_GET['msg']
  ."</div>
</div>
          
          ";
        }
      ?>
        <div class='card' style='width: 18rem;margin-top: 15%;'>
            <div class='card-body'>
                <form action='../../php/login.php' method='post'>
                    <div class='mb-3'>
                        <label for='exampleFormControlInput1' class='form-label'>Login</label>
                        <input type='text' class='form-control' id='login' name='login' placeholder='bob' required>
                    </div>
                    <div class='mb-3'>
                        <label for='exampleFormControlInput1' class='form-label'>Mot de passe</label>
                        <input type='password' class='form-control' id='password' name='password' required>
                    </div>
                    <div class='mb-3'>
                        <input type='submit' class='btn btn-success' id='submit' name='submit' value='se connecter'>
                    </div>
                </form>
            </div>
        </div>
    </center>
</body>
</html>