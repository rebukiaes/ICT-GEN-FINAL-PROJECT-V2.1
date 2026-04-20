<?php
session_start();
require_once 'db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmed = isset($_POST['confirmed']);

    if (!$confirmed) {
        $error = 'YOU MUST CONFIRM BEFORE PROCEEDING.';
    } elseif (empty($email) || empty($password)) {
        $error = 'EMAIL AND PASSWORD ARE REQUIRED.';
    } else {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($password, $user['password_hash'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                header('Location: prescript.php');
                exit;
            } else {
                $error = 'INVALID CREDENTIALS. THE CITY DOES NOT RECOGNIZE YOU.';
            }
        } else {
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $pdo->prepare("INSERT INTO users (email, password_hash) VALUES (?, ?)");
            $stmt->execute([$email, $hash]);
            $_SESSION['user_id'] = $pdo->lastInsertId();
            $_SESSION['email'] = $email;
            header('Location: prescript.php');
            exit;
        }
    }
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

        <?php if ($error): ?>
          <p style="color: #d98989; font-size: 0.75rem; letter-spacing: 0.12em; text-align: center; margin-bottom: 1rem;">
            <?= htmlspecialchars($error) ?>
          </p>
        <?php endif; ?>

        <form method="POST" action="index.php">
          <div class="mb-3">
            <label for="email" class="form-label">EMAIL</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">PASSWORD</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="confirmed" name="confirmed">
            <label class="form-check-label" for="confirmed">ARE YOU SURE?</label>
          </div>
          <button type="submit" class="outcome-btn btn-cleared">SUBMIT</button>
        </form>

        <div class="indexlogo mt-4">
          <img src="The_Index_Logo.webp" class="img-fluid mx-auto d-block" alt="THE INDEX" />
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
