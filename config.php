<?php
// config.php - Fichier de configuration de l'application

// Paramètres de la base de données
define('DB_HOST', 'localhost'); // Adresse du serveur MySQL
define('DB_NAME', 'db_hopital'); // Nom de la base de données
define('DB_USER', 'root'); // Nom d'utilisateur MySQL
define('DB_PASS', ''); // Mot de passe MySQL (vide par défaut en local)

// Paramètres de l'application
define('APP_NAME', 'Hôpital Moderne'); // Nom de l'application
define('APP_URL', 'http://localhost/hopital-moderne'); // URL de base de l'application
define('APP_ENV', 'development'); // Environnement (development, production)

// Paramètres de sécurité
define('SECRET_KEY', 'votre_cle_secrete_tres_secure'); // Clé secrète pour les sessions et les tokens
define('PASSWORD_SALT', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'); // Sel pour le hashage des mots de passe

// Paramètres de messagerie (pour l'envoi d'emails)
define('MAIL_HOST', 'smtp.example.com'); // Serveur SMTP
define('MAIL_PORT', 587); // Port SMTP
define('MAIL_USERNAME', 'no-reply@example.com'); // Nom d'utilisateur SMTP
define('MAIL_PASSWORD', 'votre_mot_de_passe_smtp'); // Mot de passe SMTP
define('MAIL_FROM', 'no-reply@example.com'); // Adresse email d'envoi

// Paramètres de débogage
define('DEBUG', true); // Activer ou désactiver le mode débogage

// Fonction pour afficher les erreurs en mode débogage
function debug($data) {
    if (DEBUG) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}

// Exemple d'utilisation
// debug($_SERVER);

// Inclusion du fichier de connexion à la base de données
require_once 'db.php';
?>
