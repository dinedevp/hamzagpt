<?php
require_once __DIR__.'/config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vicidial - Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link id="theme-dark" href="css/theme-dark.css" rel="stylesheet" disabled>
    <link href="css/theme.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center" style="height:100vh;">
    <div class="card p-4" style="min-width:300px;">
        <h1 class="h4 mb-3 text-center">Connexion</h1>
        <?php if (!empty($_SESSION['error'])): ?>
            <div class="alert alert-danger" role="alert">
                <?= htmlspecialchars($_SESSION['error']) ?>
            </div>
        <?php unset($_SESSION['error']); endif; ?>
        <form action="login_process.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>
        <div class="text-center mt-3">
            <button id="themeToggle" class="btn btn-sm btn-secondary">Mode sombre</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
