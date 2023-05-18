<?php
require_once __DIR__ . "/partials/functions.php";

$password = "";
$old_pwd_length = 4;

if (isset($_GET['pwd_length'])) {
  $pwd_length = $_GET['pwd_length'];
  $old_pwd_length = $pwd_length;
  $password = generatePassword($pwd_length);

  session_start();
  $_SESSION['pwd'] = $password;
  header('Location: ./pwd.php');
}
?>

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
            <form action="index.php" method="GET" class="mb-0">
              <input class="my-2 ps-2" type="number" min="4" value="<?php echo $old_pwd_length ?>" placeholder="0" name="pwd_length">
              <button type="submit" class="btn btn-warning fw-semibold">Generate Password</button>
            </form>

          </div>
        </div>

      </div>
    </div>
  </main>

</body>

</html>