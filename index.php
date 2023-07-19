<?php
$title = 'Random Password Generator';

$pass_length = $_GET['pass-length'] ?? 0;
$password = '';
$types = ['minus', 'capital', 'number', 'special'];

include __DIR__ . '/includes/scripts/get_password.php';


session_start();
$_SESSION['password'] = $password = get_password($pass_length, $types);

if (!empty($password)) header('Location: ./show_pass.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/includes/template/head.php' ?>

<body class="bg-dark text-white">
  <header class="text-center pt-5">
    <h1>FREE PASSWORD GENERATOR</h1>
  </header>
  <main class="container">

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