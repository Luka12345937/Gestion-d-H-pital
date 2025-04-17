<?php
// cookies.php - Gestion des cookies pour l'application de gestion d'hôpital

// Fonction pour définir un cookie sécurisé
function setSecureCookie($name, $value, $expiry) {
    $secure = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? true : false;
    setcookie($name, $value, $expiry, '/', '', $secure, true);
}

// Fonction pour obtenir la valeur d'un cookie
function getCookie($name) {
    return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
}

// Fonction pour supprimer un cookie
function deleteCookie($name) {
    if (isset($_COOKIE[$name])) {
        setcookie($name, '', time() - 3600, '/');
        unset($_COOKIE[$name]);
    }
}

// Exemple d'utilisation
if (isset($_POST['set_cookie'])) {
    $cookieName = $_POST['cookie_name'];
    $cookieValue = $_POST['cookie_value'];
    $expiry = time() + (86400 * 30); // 30 jours
    setSecureCookie($cookieName, $cookieValue, $expiry);
    $message = "Le cookie '$cookieName' a été défini avec succès.";
}

if (isset($_POST['delete_cookie'])) {
    $cookieName = $_POST['cookie_name'];
    deleteCookie($cookieName);
    $message = "Le cookie '$cookieName' a été supprimé avec succès.";
}

$cookies = $_COOKIE;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Cookies - Hôpital Moderne</title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .main-content {
            margin: 50px auto;
            max-width: 800px;
            padding: 20px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .cookie-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            transition: transform 0.3s;
        }

        .cookie-card:hover {
            transform: translateY(-5px);
        }

        .cookie-name {
            font-weight: 600;
            color: #007BFF;
        }

        .btn-manage {
            background-color: #007BFF;
            border: none;
            border-radius: 8px;
            padding: 8px 16px;
            color: white;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-manage:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .alert {
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="main-content">
    <h1 class="text-center mb-4">Gestion des Cookies</h1>

    <?php if (isset($message)): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <!-- Formulaire pour définir un cookie -->
    <div class="card cookie-card">
        <div class="card-body">
            <h5 class="card-title">Définir un Cookie</h5>
            <form method="POST">
                <div class="mb-3">
                    <label for="cookie_name" class="form-label">Nom du Cookie</label>
                    <input type="text" class="form-control" id="cookie_name" name="cookie_name" required>
                </div>
                <div class="mb-3">
                    <label for="cookie_value" class="form-label">Valeur du Cookie</label>
                    <input type="text" class="form-control" id="cookie_value" name="cookie_value" required>
                </div>
                <button type="submit" name="set_cookie" class="btn btn-manage">Définir Cookie</button>
            </form>
        </div>
    </div>

    <!-- Liste des cookies existants -->
    <div class="card cookie-card">
        <div class="card-body">
            <h5 class="card-title">Cookies Existants</h5>
            <?php if (!empty($cookies)): ?>
                <ul class="list-group">
                    <?php foreach ($cookies as $name => $value): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="cookie-name"><?php echo htmlspecialchars($name); ?></span>
                            <span><?php echo htmlspecialchars($value); ?></span>
                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="cookie_name" value="<?php echo htmlspecialchars($name); ?>">
                                <button type="submit" name="delete_cookie" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Aucun cookie trouvé.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
