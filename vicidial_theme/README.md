# Vicidial Bootstrap Theme

Ce thème fournit des interfaces modernes pour Vicidial à l'aide de Bootstrap 5.

## Installation

1. Copier le dossier `vicidial_theme` dans `/var/www/html/vicidial/`.
2. Ouvrir `login.html` pour se connecter ou `index.html` pour accéder au tableau de bord admin.
3. Les fichiers `css/theme.css` (clair) et `css/theme-dark.css` (sombre) gèrent les styles. Le bouton "Mode sombre" active/désactive le thème sombre et mémorise le choix via `localStorage`.
4. Les pages principales :
   - `index.html` : tableau de bord admin
   - `campaigns.html` : gestion des campagnes
   - `users.html` : liste des utilisateurs
   - `reports.html` : rapports
   - `agent.html` : interface agent

Aucun backend n'est inclus. Les pages sont statiques et servent de base pour l'intégration dans Vicidial.
