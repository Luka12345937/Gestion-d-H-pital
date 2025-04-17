<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Analyses Médicales - Hôpital Moderne</title>
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #f4f7fc, #eef2f7);
      color: #333;
      margin: 0;
      padding: 0;
    }

    .main-content {
      max-width: 1200px;
      margin: 60px auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.07);
      animation: fadeInUp 1s ease-in-out;
    }

    h1 {
      color: #007BFF;
      font-weight: 700;
      text-align: center;
      margin-bottom: 50px;
    }

    h2 {
      color: #0056b3;
      font-weight: 600;
      border-bottom: 2px solid #007BFF;
      padding-bottom: 8px;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.05rem;
      line-height: 1.8;
      color: #555;
    }

    .service-card {
      background: #ffffff;
      border: none;
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease-in-out;
    }

    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 24px rgba(0, 0, 0, 0.1);
    }

    .service-card h3 {
      color: #007BFF;
      font-weight: 600;
      margin-bottom: 12px;
    }

    .service-card p {
      color: #666;
    }

    .back-to-home {
      display: inline-block;
      margin-top: 40px;
      padding: 12px 28px;
      background: #007BFF;
      color: #fff;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.3s ease-in-out;
    }

    .back-to-home:hover {
      background: #0056b3;
      transform: scale(1.05);
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>

  <div class="main-content">
    <h1><i class="fas fa-vial me-2"></i>Analyses Médicales</h1>

    <div class="analysis-section mb-5">
      <h2>À Propos de Notre Service d'Analyses</h2>
      <p>
        Le service d'analyses médicales de l'Hôpital Moderne est équipé des technologies les plus avancées pour fournir des résultats précis et rapides.
        Notre équipe de biologistes et techniciens est dédiée à offrir des diagnostics fiables pour soutenir les décisions médicales.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="service-card">
          <h3><i class="fas fa-blood me-2"></i>Analyse de Sang</h3>
          <p>Examens complets incluant hémogramme, glycémie, et profil lipidique pour évaluer votre santé générale.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="service-card">
          <h3><i class="fas fa-flask me-2"></i>Analyse d'Urine</h3>
          <p>Détection des infections urinaires, maladies rénales et déséquilibres métaboliques.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="service-card">
          <h3><i class="fas fa-microscope me-2"></i>Analyse Microbiologique</h3>
          <p>Identification des bactéries, virus et champignons pour un traitement ciblé.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="service-card">
          <h3><i class="fas fa-vial me-2"></i>Biopsie</h3>
          <p>Analyse tissulaire pour diagnostiquer les cancers et d'autres pathologies.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="service-card">
          <h3><i class="fas fa-dna me-2"></i>Analyse Génétique</h3>
          <p>Étude des prédispositions génétiques et des maladies héréditaires.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="service-card">
          <h3><i class="fas fa-pills me-2"></i>Toxicologie</h3>
          <p>Détection de substances toxiques ou médicamenteuses dans l'organisme.</p>
        </div>
      </div>
    </div>

    <div class="text-center">
      <a href="index.php" class="back-to-home"><i class="fas fa-home me-2"></i>Retour à l'accueil</a>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
