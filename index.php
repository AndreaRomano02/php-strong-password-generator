<?php
$pass_length = $_GET['pass-length'] ?? 0;
$password = '';
$types = ['minus', 'capital', 'number', 'special'];

include __DIR__ . '/includes/scripts/get_password.php';

$password = get_password($pass_length, $types);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
  <title>Random Password Generator</title>
</head>

<body class="bg-dark text-white">
  <header class="text-center pt-5">
    <h1>FREE PASSWORD GENERATOR</h1>
  </header>
  <main class="container">
    <div class="alert alert-info ">
      <?php if (!mb_strlen($password)) : ?>
        <p class="m-0">Nessun parametro valido inserito</p>
      <?php else : ?>
        <p class="m-0">La tua password è: <strong><?= $password ?></strong></p>
      <?php endif ?>
    </div>
    <div class="card p-3">
      <form action="#">
        <div class="d-flex justify-content-between ">
          <label for="pass-length" class="me-3">Inserisci la lunghezza della Password</label>
          <input type="number" id="pass-length" name="pass-length" min="1">
        </div>
        <div class="button d-flex justify-content-between">
          <a href="index.php" class="btn btn-danger mt-3">Cancella</a>
          <div>
            <button class="btn btn-primary mt-3">INVIA</button>
            <button type="reset" class="btn btn-secondary mt-3">ANNULLA</button>
          </div>
        </div>
      </form>
    </div>
  </main>
</body>

</html>