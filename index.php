<?php  ?>
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
    <div class="alert alert-info ">Nessun parametro valido inserito</div>
    <div class="card p-3">
      <form action="#">
        <div class="d-flex justify-content-between ">
          <label for="pass-length" class="me-3">Inserisci la lunghezza della Password</label>
          <input type="number" id="pass-length" name="pass-length" min="1">
        </div>
        <button class="btn btn-primary mt-3">INVIA</button>
        <button type="reset" class="btn btn-secondary mt-3">ANNULLA</button>
      </form>
    </div>
  </main>
</body>

</html>