<?php
  session_start();

  if (isset($_SESSION['pwd'])) {
    $password = $_SESSION['pwd'];
  } 
  else {
    header('Location: ./index.php');
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

            <h5 class="card-title mb-2">Generated Password:</h5>
            <span><?php echo $password ?></span>

          </div>
        </div>

      </div>
    </div>
  </main>

</body>

</html>