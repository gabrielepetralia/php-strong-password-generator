<?php

  $lowercase_letters = "abcdefghijklmnopqrstuvwxyz";
  $uppercase_letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $special_characters = "!?()[]{}$&_-+*:=/|%@#^<>.,;";

  $password = "";
  $error_msg = "";
  $old_pwd_length = 0;

  if (isset($_GET['pwd_length'])) {
    $pwd_length = $_GET['pwd_length'];
    if ($_GET['pwd_length'] >= 4) {
      do {
        $password .= $lowercase_letters[rand(0, strlen($lowercase_letters) - 1)];
        if (strlen($password) < $pwd_length) $password .= $uppercase_letters[rand(0, strlen($uppercase_letters) - 1)];
        if (strlen($password) < $pwd_length) $password .= $special_characters[rand(0, strlen($special_characters) - 1)];
        if (strlen($password) < $pwd_length) $password .= rand(0, 9);
      } while (strlen($password) < $pwd_length);
      $password = str_shuffle($password);
      $old_pwd_length = $pwd_length;
      $error_msg = "";
    } else {
      $old_pwd_length = $pwd_length;
      $error_msg = "Lunghezza minima: 4 caratteri!";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<?php
require_once __DIR__ . "/partials/head.html"
?>

<body class="bg-dark">
  <?php
  require_once __DIR__ . "/partials/header.html"
  ?>

  <main>
    <div class="container">
      <div class="row justify-content-center">

        <div class="card w-25 p-2">
          <div class="card-body d-flex flex-column text-center">

            <h5 class="card-title mb-0">Password Length:</h5>
            <form action="index.php" method="GET">
              <input class="my-3 ps-2" type="number" value="<?php echo $old_pwd_length ?>" placeholder="0" name="pwd_length">
              <button type="submit" class="btn btn-warning fw-semibold mb-3">Generate Password</button>
            </form>
            <h5 class="card-title mb-2">Generated Password:</h5>
            <span class="text-danger d-block mb-2"><?php echo $error_msg ?></span>
            <span><?php echo $password ?></span>

          </div>
        </div>

      </div>
    </div>
  </main>
</body>

</html>