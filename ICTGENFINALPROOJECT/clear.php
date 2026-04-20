<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CLEAR</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="fade-in">
    <div class="screen d-flex align-items-center justify-content-center min-vh-100 p-4">
      <div class="container text-center" style="max-width: 680px;">

        <hr class="divider mb-4" />

        <p class="result-label mb-3" style="color: #89bad9;">— PRESCRIPT STATUS —</p>

        <p class="result-status mb-2" style="color: #89bad9;">
          CLEARED
        </p>

        <p class="result-message mb-4" style="color: #89bad9;">
          The City acknowledges your compliance.<br />
          The Prescript has been fulfilled.
        </p>

        <hr class="divider mb-4" />

        <a href="prescript.php" class="outcome-btn btn-cleared">← RETURN TO PRESCRIPT</a>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
