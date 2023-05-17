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

        <div class="card w-25">
          <div class="card-body d-flex flex-column text-center">
            <h5 class="card-title mb-0">Password Length:</h5>
            <form action="index.php" method="GET">
              <input class="my-3 ps-2" type="number" value="0" name="pwd_length">
              <button type="submit" class="btn btn-warning fw-semibold">Generate Password</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </main>
</body>

</html>