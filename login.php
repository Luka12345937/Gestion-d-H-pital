<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Connexion | Hôpital Moderne</title>
  <link rel="icon" href="assets/img/favicon.svg" type="image/svg+xml"/>
  
  <!-- Google Fonts & Font Awesome -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    :root {
      --primary: #1e88e5;
      --hover: #1565c0;
      --bg-light: #f4f7fa;
      --text-dark: #222;
      --radius: 1rem;
      --transition: 0.3s ease;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(120deg, var(--primary), var(--hover));
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .login-card {
      background: white;
      padding: 2.5rem;
      border-radius: var(--radius);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 420px;
      animation: fadeIn 1s ease-out;
    }

    .login-card:hover {
      transform: translateY(-5px);
      transition: transform var(--transition);
    }

    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: var(--primary);
      font-weight: 700;
    }

    .form-control {
      border-radius: 0.75rem;
      padding: 0.9rem;
      background-color: var(--bg-light);
      border: 1px solid #ccc;
    }

    .form-control:focus {
      box-shadow: 0 0 0 3px rgba(30, 136, 229, 0.2);
      border-color: var(--primary);
    }

    .btn-login {
      background-color: var(--primary);
      color: white;
      padding: 0.8rem;
      border-radius: 0.75rem;
      font-weight: 600;
      border: none;
      width: 100%;
      transition: background-color var(--transition);
    }

    .btn-login:hover {
      background-color: var(--hover);
    }

    .forgot-password {
      display: block;
      text-align: center;
      margin-top: 1rem;
      color: var(--primary);
      text-decoration: none;
      transition: color var(--transition);
    }

    .forgot-password:hover {
      color: var(--hover);
    }

    .social-login {
      margin-top: 2rem;
      text-align: center;
    }

    .social-login a {
      margin: 0 10px;
      color: var(--primary);
      font-size: 1.5rem;
      transition: transform var(--transition), color var(--transition);
    }

    .social-login a:hover {
      color: var(--hover);
      transform: scale(1.15);
    }

    .back-to-home {
      position: absolute;
      top: 20px;
      left: 20px;
      color: white;
      background-color: rgba(255, 255, 255, 0.15);
      padding: 10px 16px;
      border-radius: var(--radius);
      text-decoration: none;
      backdrop-filter: blur(5px);
      transition: background-color var(--transition);
    }

    .back-to-home:hover {
      background-color: rgba(255, 255, 255, 0.3);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

<!-- Bouton retour -->
<a href="index.php" class="back-to-home"><i class="fas fa-home me-2"></i>Accueil</a>

<!-- Formulaire de connexion -->
<div class="login-card">
  <h2><i class="fas fa-hospital me-2"></i>Hôpital Moderne</h2>
  <form id="loginForm">
    <div class="mb-3">
      <label for="username" class="form-label">Nom d'utilisateur</label>
      <input type="text" id="username" name="username" class="form-control" required />
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Mot de passe</label>
      <input type="password" id="password" name="password" class="form-control" required />
    </div>
    <div class="form-check mb-3">
      <input type="checkbox" class="form-check-input" id="rememberMe" />
      <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
    </div>
    <button type="submit" class="btn btn-login">Se connecter</button>
    <a href="passe.php" class="forgot-password">Mot de passe oublié ?</a>
  </form>

  <!-- Réseaux sociaux -->
  <div class="social-login">
    <p>Se connecter avec :</p>
    <a href="#"><i class="fab fa-google"></i></a>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
  </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(function () {
    $('#loginForm').on('submit', function (e) {
      e.preventDefault();
      const username = $('#username').val();
      const password = $('#password').val();

      $.ajax({
        type: 'POST',
        url: 'ajax/login.php',
        data: { username, password },
        success(response) {
          if (response.trim() === 'success') {
            window.location.href = 'dashboard.php';
          } else {
            alert("Nom d'utilisateur ou mot de passe incorrect.");
          }
        },
        error() {
          alert("Erreur réseau. Veuillez réessayer.");
        }
      });
    });
  });
</script>

</body>
</html>
