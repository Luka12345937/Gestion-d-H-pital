<?php
// db.php - Fichier de configuration de la base de données

// Paramètres de connexion à la base de données
$host = 'localhost'; // Adresse du serveur MySQL
$dbname = 'db_hopital'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur MySQL
$password = ''; // Mot de passe MySQL (vide par défaut en local)

// Tentative de connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Configuration des options PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activer le mode exception pour les erreurs
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Définir le mode de récupération par défaut sur FETCH_ASSOC

    // Connexion réussie
    // echo "Connexion à la base de données réussie!"; // Décommenter pour tester la connexion

} catch (PDOException $e) {
    // En cas d'erreur de connexion, afficher un message d'erreur
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}

// Fonction pour exécuter une requête SQL (SELECT)
function query($sql, $params = []) {
    global $pdo;
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête: " . $e->getMessage());
    }
}

// Fonction pour exécuter une requête SQL (INSERT, UPDATE, DELETE)
function execute($sql, $params = []) {
    global $pdo;
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->rowCount(); // Retourne le nombre de lignes affectées
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête: " . $e->getMessage());
    }
}

// Fonction pour récupérer une seule ligne (SELECT)
function fetch($sql, $params = []) {
    global $pdo;
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetch();
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête: " . $e->getMessage());
    }
}

// Exemple d'utilisation
// $users = query("SELECT * FROM utilisateurs");
// print_r($users);

// $affectedRows = execute("INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, role) VALUES (?, ?, ?, ?, ?)", [
//     'Doe', 'John', 'john@example.com', password_hash('password123', PASSWORD_DEFAULT), 'medecin'
// ]);
// echo "Nombre de lignes affectées: " . $affectedRows;
?>
