<?php
$title = 'Password';

session_start();
$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/includes/template/head.php' ?>

<body class="bg-dark">
  <div class="d-flex justify-content-center  text-center mt-5 ">
    <div class="alert alert-info py-5 w-50">
      <?php if (!str_contains($password, 'devi') > 0 && !$_SESSION['is_invalid']) : ?>
        <p class="m-0">La tua password è: <strong><?= $password ?></strong></p>
      <?php else : ?>
        <div class="alert alert-danger p-5">
          <?php if (!empty($_SESSION['error_message'])) : ?>
            <?= $_SESSION['error_message'] ?>
          <?php else : ?>
            <?= $password ?>
          <?php endif ?>
        </div>
      <?php endif ?>
      <a href="index.php" class="mt-5 btn btn-warning">Genera una nuova password</a>
    </div>
  </div>
</body>

</html>