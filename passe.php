<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mot de Passe Oublié - Hôpital Moderne</title>
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    :root {
      --primary: #007BFF;
      --dark-primary: #0056b3;
      --light-bg: #f8f9fa;
      --card-radius: 18px;
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(-45deg, #007BFF, #00C6FF, #007BFF);
      background-size: 400% 400%;
      animation: gradientShift 10s ease infinite;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .back-home {
      position: absolute;
      top: 25px;
      left: 25px;
      background: rgba(255, 255, 255, 0.2);
      padding: 10px 20px;
      border-radius: 12px;
      color: white;
      text-decoration: none;
      font-weight: 500;
      backdrop-filter: blur(5px);
      transition: all 0.3s ease;
    }

    .back-home:hover {
      background: rgba(255, 255, 255, 0.3);
      transform: translateY(-2px);
    }

    .card-reset {
      background: white;
      padding: 40px 35px;
      border-radius: var(--card-radius);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 420px;
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h2 {
      text-align: center;
      font-weight: 700;
      color: var(--primary);
      margin-bottom: 25px;
    }

    label {
      font-weight: 500;
    }

    .form-control {
      border-radius: 12px;
      padding: 15px;
      background-color: #f0f2f5;
      border: 1px solid #ddd;
      transition: all 0.3s;
    }

    .form-control:focus {
      border-color: var(--primary);
      box-shadow: 0 0 12px rgba(0, 123, 255, 0.2);
    }

    .btn-reset {
      width: 100%;
      padding: 15px;
      font-weight: 600;
      border-radius: 12px;
      background-color: var(--primary);
      color: white;
      border: none;
      transition: 0.3s;
    }

    .btn-reset:hover {
      background-color: var(--dark-primary);
      transform: translateY(-2px);
    }

    .success-message {
      display: none;
      text-align: center;
      margin-top: 20px;
      color: #28a745;
      font-weight: 500;
    }
  </style>
</head>
<body>

  <a href="index.php" class="back-home"><i class="fas fa-arrow-left me-2"></i>Retour à l'accueil</a>

  <div class="card-reset">
    <h2><i class="fas fa-lock me-2"></i>Réinitialiser le mot de passe</h2>
    <form id="resetForm">
      <div class="mb-3">
        <label for="email" class="form-label">Adresse Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="exemple@domaine.com" required />
      </div>
      <button type="submit" class="btn btn-reset">Envoyer le lien</button>
    </form>
    <div class="success-message" id="successMsg">
      ✅ Un email de réinitialisation vous a été envoyé !
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#resetForm').on('submit', function (e) {
        e.preventDefault();
        const email = $('#email').val();

        $.ajax({
          type: 'POST',
          url: 'ajax/reset_password.php',
          data: { email },
          success: function (res) {
            if (res.trim() === 'success') {
              $('#resetForm').fadeOut();
              $('#successMsg').fadeIn();
            } else {
              alert("❌ Aucun compte trouvé avec cette adresse email.");
            }
          },
          error: function () {
            alert("⚠️ Une erreur est survenue. Veuillez réessayer plus tard.");
          }
        });
      });
    });
  </script>
</body>
</html>
