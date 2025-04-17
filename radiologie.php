<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Radiologie – Hôpital Moderne</title>
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  
  <style>
    /* ====== Base ====== */
    body {
      font-family: 'Poppins', sans-serif;
      background: #edf0f5;
      color: #333;
      margin: 0;
      padding: 0;
    }

    h1, h2, h3 {
      color: #0d6efd;
      font-weight: 600;
    }

    /* ====== Container principal ====== */
    .main-content {
      max-width: 1200px;
      margin: 60px auto;
      background: #fff;
      border-radius: 20px;
      padding: 50px 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
      animation: fadeIn 1.2s ease-in-out;
    }

    h1 {
      text-align: center;
      margin-bottom: 50px;
      font-size: 2.5rem;
    }

    /* ====== Sections ====== */
    .radiology-section h2 {
      border-bottom: 3px solid #0d6efd;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    .radiology-section p {
      font-size: 1.1rem;
      line-height: 1.8;
      color: #555;
    }

    /* ====== Cartes de service ====== */
    .service-card {
      background: #fefefe;
      border-radius: 15px;
      padding: 25px;
      margin-bottom: 30px;
      border: 1px solid #e1e4e8;
      box-shadow: 0 4px 12px rgba(13, 110, 253, 0.05);
      transition: all 0.3s ease;
    }

    .service-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 24px rgba(13, 110, 253, 0.1);
    }

    .service-card h3 {
      font-size: 1.2rem;
      margin-bottom: 12px;
    }

    .service-card p {
      font-size: 1.05rem;
      color: #666;
    }

    /* ====== Bouton de retour ====== */
    .back-to-home {
      display: inline-block;
      margin-top: 40px;
      padding: 12px 25px;
      background: #0d6efd;
      color: #fff;
      border-radius: 12px;
      font-weight: 500;
      text-decoration: none;
      box-shadow: 0 6px 12px rgba(13, 110, 253, 0.2);
      transition: background 0.3s, transform 0.3s;
    }

    .back-to-home:hover {
      background: #084298;
      transform: scale(1.05);
    }

    /* ====== Animation ====== */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <div class="main-content">
    <h1><i class="fas fa-x-ray me-2"></i>Radiologie</h1>

    <!-- À propos -->
    <section class="radiology-section">
      <h2>À Propos de Notre Service</h2>
      <p>
        Le service de radiologie de l'Hôpital Moderne est équipé des technologies les plus avancées pour fournir des diagnostics rapides et fiables. 
        Nos spécialistes s’engagent à garantir des soins de qualité tout en assurant le confort et la sécurité de chaque patient.
      </p>
    </section>

    <!-- Cartes de services -->
    <div class="row">
      <div class="col-md-4">
        <div class="service-card">
          <h3><i class="fas fa-lungs me-2"></i>Radiographie Thoracique</h3>
          <p>Analyse rapide du cœur, des poumons et de la cage thoracique.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card">
          <h3><i class="fas fa-bone me-2"></i>Radiographie Osseuse</h3>
          <p>Détection des fractures et des anomalies osseuses avec précision.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card">
          <h3><i class="fas fa-brain me-2"></i>IRM Cérébrale</h3>
          <p>Imagerie haute résolution du cerveau pour diagnostics neurologiques.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card">
          <h3><i class="fas fa-heart me-2"></i>Échocardiographie</h3>
          <p>Évaluation non invasive de la fonction cardiaque.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card">
          <h3><i class="fas fa-x-ray me-2"></i>Scanner Thoracique</h3>
          <p>Exploration détaillée des tissus thoraciques et pulmonaires.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card">
          <h3><i class="fas fa-microscope me-2"></i>Mammographie</h3>
          <p>Dépistage précoce et précis du cancer du sein.</p>
        </div>
      </div>
    </div>

    <!-- Bouton retour -->
    <div class="text-center">
      <a href="index.php" class="back-to-home">
        <i class="fas fa-home me-2"></i>Retour à l’accueil
      </a>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
