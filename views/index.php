<?php
echo "
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
        <div class='card' style='width: 18rem;margin-top: 15%;'>
            <div class='card-body'>
                <form action='../php/login.php' method='post'>
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
</html>"
?>