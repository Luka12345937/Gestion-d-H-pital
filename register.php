<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Inscription - Hôpital Moderne</title>
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    :root {
      --primary: #0d6efd;
      --secondary: #6c757d;
      --background: #f4f6f9;
      --white: #fff;
      --error: #dc3545;
      --success: #198754;
      --border: #dee2e6;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--background);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .container-card {
      background: var(--white);
      padding: 40px 30px;
      border-radius: 16px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
      width: 100%;
      max-width: 450px;
      animation: fadeIn 1s ease;
    }

    h1 {
      font-size: 28px;
      font-weight: 700;
      color: var(--primary);
      text-align: center;
      margin-bottom: 25px;
    }

    label {
      font-weight: 600;
      color: var(--secondary);
    }

    .form-control {
      border-radius: 10px;
      padding: 12px;
      border: 1px solid var(--border);
      transition: 0.3s;
    }

    .form-control:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

    .btn-register {
      background-color: var(--primary);
      color: var(--white);
      font-weight: 600;
      padding: 12px;
      border-radius: 10px;
      width: 100%;
      transition: all 0.3s ease;
      margin-top: 10px;
    }

    .btn-register:hover {
      background-color: #0056b3;
      transform: translateY(-1px);
    }

    .error-message {
      color: var(--error);
      font-size: 0.9rem;
      margin-top: 5px;
      animation: fadeIn 0.5s ease;
    }

    .login-link {
      text-align: center;
      margin-top: 20px;
      font-size: 0.95rem;
    }

    .login-link a {
      color: var(--primary);
      text-decoration: none;
    }

    .login-link a:hover {
      text-decoration: underline;
    }

    .back-btn {
      position: absolute;
      top: 20px;
      left: 20px;
      background-color: var(--primary);
      padding: 10px 16px;
      border-radius: 8px;
      color: white;
      text-decoration: none;
      font-weight: 600;
      box-shadow: 0 3px 6px rgba(0,0,0,0.1);
      transition: background-color 0.3s;
    }

    .back-btn:hover {
      background-color: #004ca3;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

<a href="index.php" class="back-btn" aria-label="Retour à l'accueil"><i class="fas fa-arrow-left me-2"></i>Accueil</a>

<div class="container-card">
  <h1><i class="fas fa-user-plus me-2"></i>Inscription</h1>
  <form id="registerForm" autocomplete="off">
    <div class="mb-3">
      <label for="name">Nom Complet</label>
      <input type="text" class="form-control" id="name" name="name" required aria-label="Nom complet">
    </div>
    <div class="mb-3">
      <label for="email">Adresse Email</label>
      <input type="email" class="form-control" id="email" name="email" required aria-label="Email">
    </div>
    <div class="mb-3">
      <label for="password">Mot de Passe</label>
      <input type="password" class="form-control" id="password" name="password" required aria-label="Mot de passe">
    </div>
    <div class="mb-3">
      <label for="confirmPassword">Confirmer le mot de passe</label>
      <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required aria-label="Confirmation mot de passe">
      <div id="passwordError" class="error-message"></div>
    </div>
    <button type="submit" class="btn btn-register">S'inscrire</button>
  </form>
  <div class="login-link">
    Déjà inscrit ? <a href="login.php">Connexion</a>
  </div>
</div>

<!-- JS -->
<script>
  document.getElementById('registerForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const password = document.getElementById('password').value.trim();
    const confirmPassword = document.getElementById('confirmPassword').value.trim();
    const passwordError = document.getElementById('passwordError');

    if (password !== confirmPassword) {
      passwordError.textContent = "Les mots de passe ne correspondent pas.";
      return;
    } else {
      passwordError.textContent = "";
    }

    fetch('ajax/register.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        password: password
      })
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        window.location.href = 'login.php';
      } else {
        alert(data.message || "Erreur d'inscription, veuillez réessayer.");
      }
    })
    .catch(error => {
      console.error('Erreur réseau :', error);
      alert("Erreur serveur. Veuillez réessayer plus tard.");
    });
  });
</script>

</body>
</html>
