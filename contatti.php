<?php
//   Versione dinamica 
session_start();

$successo = isset($_SESSION['successo']) ? $_SESSION['successo'] : false;
$errore   = isset($_SESSION['errore'])   ? $_SESSION['errore']   : '';
unset($_SESSION['successo'], $_SESSION['errore']);//elimina il messaggio dalla memoria//
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contatti – Tringale Office Center</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--Bootstrap icone-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <!-- Google Font-->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.html">
        <img src="img/logom.png" alt="Logo Tringale Office Center" height="40" class="d-inline-block align-top me-2">
        <span>Tringale Office Center </span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="telefonia.html">Telefonia</a></li>
          <li class="nav-item"><a class="nav-link" href="contratti.html">Contratti</a></li>
          <li class="nav-item"><a class="nav-link" href="stampanti.html">Stampanti</a></li>
          <li class="nav-item"><a class="nav-link" href="accessori.html">Accessori</a></li>
          <li class="nav-item"><a class="nav-link" href="contatti.php">Contatti</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <header class="hero py-5 text-center">
    <div class="container">
      <p class="text-uppercase small mb-2">Siamo qui per te</p>
      <h1 class="display-6 mb-3">Contatti</h1>
      <p class="lead mb-0">Passa in negozio o scrivici: ti rispondiamo il prima possibile.</p>
    </div>
  </header>

  <!--Info contatti + form-->
  <section class="py-5">
    <div class="container">
      <div class="row g-5">
        <!-- Info -->
        <div class="d-flex mb-3">
          <h3 class="mb-4">Dove trovarci</h3>

          <div class="d-flex mb-3">
            <i class="bi bi-geo-alt-fill fs-4 text-primary me-3"></i>
            <div>
              <strong>Indirizzo</strong><br>
              <span class="text-muted">Via Firenze 104, Catania (CT)</span>
            </div>
          </div>

          <div class="d-flex mb-3">
            <i class="bi bi-telephone-fill fs-4 text-primary me-3"></i>
            <div>
              <strong>Telefono</strong><br>
              <span class="text-muted">0959892260</span>
            </div>
          </div>

          <div class="d-flex mb-3">
            <i class="bi bi-envelope-fill fs-4 text-primary me-3"></i>
            <div>
              <strong>Email</strong><br>
              <span class="text-muted">info@tringalecenter.it</span>
            </div>
          </div>

          <div class="d-flex mb-4">
            <i class="bi bi-clock-fill fs-4 text-primary me-3"></i>
            <div>
              <strong>Orari di apertura</strong><br>
              <span class="text-muted">Lun–Sab: 9:00–13:00 / 16:00–20:00<br>Domenica: chiuso</span>
            </div>
          </div>
        </div>

        <!--Form per contatti -->
        <div class="col-lg-7">
          <h3 class="mb-4">Scrivici</h3>

          <?php if ($successo): ?>
            <div class="alert alert-success py-2">
              <i class="bi bi-check-circle-fill me-1"></i>
              Messaggio inviato con successo! Ti risponderemo il prima possibile.
            </div>
          <?php endif; ?>

          <?php if ($errore !== ''): ?>
            <div class="alert alert-danger py-2">
              <i class="bi bi-exclamation-triangle-fill me-1"></i>
              <?php echo htmlspecialchars($errore) ?>
            </div>
          <?php endif; ?>

          <!-- Il form invia i dati in POST a invia.php-->
          <form method="post" action="invia.php">
            <div class="mb-3">
              <label for="nome" class="form-label">Nome e cognome</label>
              <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono">
              </div>
            </div>
            <div class="mb-3">
              <label for="argomento" class="form-label">Argomento</label>
              <select class="form-select" id="argomento" name="argomento">
                <option>Telefonia</option>
                <option>Contratti Vodafone</option>
                <option>Stampanti e registratori</option>
                <option>Accessori</option>
                <option>Altro</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="messaggio" class="form-label">Messaggio</label>
              <textarea class="form-control" id="messaggio" name="messaggio" rows="4" required></textarea>
            </div>
            <button type="submit" class="bottone">Invia messaggio</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-3 mb-md-0">
          <!--logo-->
          <img src="img/logom.png" alt="Logo" height="50" class="mb-3 d-block transparent-logo">
          <h6 class="text-white">Tringale Office Center</h6>
        </div>
        <div class="col-md-6 text-md-end">
          <small>
            <a href="index.html">Home</a> ·
            <a href="telefonia.html">Telefonia</a> · 
            <a href="contratti.html">Contratti</a> ·
            <a href="stampanti.html">Stampanti</a> ·
            <a href="accessori.html">Accessori</a> ·
            <a href="contatti.php">Contatti</a> ·  
          </small>
        </div>
      </div>
      <hr class="border-secondary my-3">
      <div class="text-center">
        <small>© 2026 Tringale Office Center - Tutti i diritti riservati</small>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
