<?php
require_once __DIR__.'/session.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link id="theme-dark" href="css/theme-dark.css" rel="stylesheet" disabled>
    <link href="css/theme.css" rel="stylesheet">
</head>
<body>
<div class="d-flex">
    <nav class="sidebar p-3 text-white" id="sidebar">
        <h4 class="text-center">Vicidial</h4>
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link text-white" href="index.php">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="campaigns.php">Campagnes</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="users.php">Utilisateurs</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="reports.php">Rapports</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="logout.php">Déconnexion</a></li>
        </ul>
    </nav>

    <div class="flex-grow-1">
        <nav class="topbar d-flex justify-content-between align-items-center p-2">
            <button class="btn btn-outline-secondary d-md-none" id="sidebarToggle">☰</button>
            <div class="d-flex align-items-center">
                <span class="me-3">Admin</span>
                <button id="themeToggle" class="btn btn-sm btn-secondary">Mode sombre</button>
            </div>
        </nav>

        <div class="container-fluid p-4">
            <h2>Utilisateurs</h2>
            <table class="table table-striped">
                <thead>
                    <tr><th>Nom</th><th>Email</th><th>Rôle</th></tr>
                </thead>
                <tbody>
                    <tr><td>Jean Dupont</td><td>jean@example.com</td><td>Agent</td></tr>
                    <tr><td>Marie Martin</td><td>marie@example.com</td><td>Admin</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
