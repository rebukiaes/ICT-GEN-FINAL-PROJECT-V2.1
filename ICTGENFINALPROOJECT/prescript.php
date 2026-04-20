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
  <title>Decide. Unlock. Transcend. Preordained. Absolute.</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="fade-in">
    <div class="screen d-flex align-items-center justify-content-center min-vh-100 p-4">
      <div class="container" style="max-width: 680px;">
        <div class="row g-2 mb-4">
          <div class="col-6">
            <div class="meta-field">
              <span class="meta-key">ORIGIN</span>
              <span class="meta-val">THE LOOM OF THE PRESCRIPTS</span>
            </div>
          </div>
          <div class="col-6">
            <div class="meta-field">
              <span class="meta-key">DATE STAMP</span>
              <span class="meta-val">YEAR 981 / CYCLE 04 / 04:00</span>
            </div>
          </div>
          <div class="col-6">
            <div class="meta-field">
              <span class="meta-key">HERMES</span>
              <span class="meta-val">LITTERATEUR OF THE PRESCRIPTS</span>
            </div>
          </div>
          <div class="col-6">
            <div class="meta-field">
              <span class="meta-key">SERIAL NO.</span>
              <span class="meta-val">PSC-0047-Ω-CHAIR</span>
            </div>
          </div>
        </div>
        <hr class="divider mb-4" />

        <div class="indexlogo">
          <img src="The_Index_Logo.webp" class="img-fluid mx-auto d-block" alt="THE INDEX" />
        </div>

        <div class="text-center mb-4">
          <blockquote class="prescript-quote">
            "Between the hours of 3:00 PM and 5:00 PM tomorrow, stand at the busiest intersection within your reach. Carry a glass of water filled exactly to the brim.
            <br /><br />
            For every person who makes eye contact with you, take one small sip. If someone asks you for the time, pour the remaining water onto the ground in the shape of a circle and leave without speaking.
            <br /><br />
            If no one asks for the time by 5:00 PM, you must consume the glass itself."
          </blockquote>
        </div>

        <hr class="divider mb-4" />

        <div class="d-flex justify-content-center gap-3">
          <a href="record.php?result=CLEAR" class="outcome-btn btn-cleared">CLEAR</a>
          <a href="record.php?result=FAILED" class="outcome-btn btn-failed">FAILED</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
