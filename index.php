<?php
$title = 'Random Password Generator';
$is_invalid = false;

//# Repeat Character
$is_repeat = $_GET['repeat-character'] ?? NULL;

//# Password
$pass_length = $_GET['pass-length'] ?? 0;

if ($pass_length > 76) {
  $is_invalid = true;
  $error_message = 'Numeri caratteri troppo elevati (Inserisci meno di 76 caratteri)';
}

$password = '';
$types = ['minus', 'capital', 'number', 'special'];

require __DIR__ . '/includes/scripts/get_password.php';

session_start();
$_SESSION['is_invalid'] = $is_invalid;
$_SESSION['error_message'] = $error_message ?? '';
if (!$is_invalid) $_SESSION['password'] = $password = get_password($pass_length, $types, $is_repeat);

if (!empty($password) || $is_invalid) header('Location: ./show_pass.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/includes/template/head.php' ?>

<body class="bg-dark text-white">
  <header class="text-center pt-5">
    <h1>FREE PASSWORD GENERATOR</h1>
  </header>
  <main class="container w-50">

    <div class="card p-3">
      <form action="#">
        <div class="d-flex justify-content-between ">
          <label for="pass-length" class="me-3">Inserisci la lunghezza della Password</label>
          <input type="number" id="pass-length" name="pass-length" min="1">
        </div>
        <div class="p-0 mt-3 form-check form-switch d-flex justify-content-between">
          <label for="check">Consenti di ripetere lo stesso carattere?</label>
          <input class="form-check-input" name="repeat-character" type="checkbox" role="switch" id="check">
        </div>
        <div class="d-flex flex-column align-items-end">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="minus" name="minus">
            <label class="form-check-label" for="minus">Minuscole</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="capital" name="capital">
            <label class="form-check-label" for="capital">Maiuscole</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="number" name="number">
            <label class="form-check-label" for="number">Numeri</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="special" name="special">
            <label class="form-check-label" for="special">Speciali</label>
          </div>
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