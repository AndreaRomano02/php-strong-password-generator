<?php
$pass_length = $_GET['pass-length'] ?? 0;
$password = '';
function genera_password($pass_length, $types)
{
  $full_characters_strings = '';
  $pass = '';


  //# Creiamo un array di simboli
  $characters["minus"] = 'abcdefghijklmnopqrstuvwxyz';
  $characters["capital"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $characters["number"] = '1234567890';
  $characters["special"] = '!?~@#-_+<>[]{}';

  foreach ($types as $type) {
    $full_characters_strings .= $characters[$type]; //* costruiamo una stringa con tutti i caratteri
  }
  $full_characters_strings_length = strlen($full_characters_strings) - 1; //* prendo la lunghezza della stringa di tutti i caratteri 

  for ($i = 0; $i < $pass_length; $i++) { //* Lo faccio per quante volte mi viene indicato
    $n = rand(0, $full_characters_strings_length); //* ottieni un carattere casuale dalla stringa con tutti i caratteri
    $pass .= $full_characters_strings[$n]; //* aggiunge il carattere alla stringa della password
  }

  return $pass; //* restituisce la password generata
}

$password = genera_password($pass_length, ['minus', 'capital', 'number', 'special']);

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
          <div>
            <button class="btn btn-primary mt-3">INVIA</button>
            <button type="reset" class="btn btn-secondary mt-3">ANNULLA</button>
          </div>
          <a href="index.php" class="btn btn-danger mt-3">Cancella</a>
        </div>
      </form>
    </div>
  </main>
</body>

</html>