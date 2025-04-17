<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nos Services - Hôpital Moderne</title>
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <style>
    :root {
      --primary-color: #2185d0;
      --secondary-color: #5a6268;
      --bg-color: #f4f6f8;
      --white: #ffffff;
      --text-dark: #212529;
      --hover-color: #1a6fb3;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--bg-color);
      color: var(--text-dark);
      margin: 0;
    }

    .main-content {
      max-width: 1200px;
      margin: 60px auto;
      background: var(--white);
      padding: 50px;
      border-radius: 20px;
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
      animation: fadeIn 1.2s ease-in-out;
    }

    h1 {
      text-align: center;
      font-weight: 700;
      margin-bottom: 40px;
      color: var(--primary-color);
    }

    h2 {
      font-weight: 600;
      color: var(--primary-color);
      margin-bottom: 30px;
      border-bottom: 3px solid var(--primary-color);
      padding-bottom: 10px;
    }

    .service-card {
      background: var(--white);
      border: none;
      border-radius: 16px;
      padding: 30px 20px;
      margin-bottom: 30px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
    }

    .service-card i {
      font-size: 2.5rem;
      color: var(--primary-color);
      margin-bottom: 15px;
    }

    .service-card h3 {
      font-size: 1.4rem;
      font-weight: 600;
      margin-bottom: 15px;
    }

    .service-card p {
      color: var(--secondary-color);
      font-size: 1rem;
      line-height: 1.6;
    }

    .back-to-home {
      display: inline-block;
      margin-top: 40px;
      padding: 12px 25px;
      background-color: var(--primary-color);
      color: white;
      font-weight: 500;
      border-radius: 10px;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .back-to-home:hover {
      background-color: var(--hover-color);
      transform: translateY(-3px);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    footer {
      margin-top: 60px;
      background-color: var(--primary-color);
      color: white;
      text-align: center;
      padding: 20px 0;
      border-radius: 0 0 20px 20px;
      font-size: 0.95rem;
      animation: fadeIn 1.5s ease-in-out;
    }
  </style>
</head>

<body>
  <main class="main-content">
    <h1><i class="fas fa-hospital-user me-2"></i>Nos Services</h1>

    <section class="services-section">
      <h2>Services Médicaux</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="service-card">
            <i class="fas fa-stethoscope"></i>
            <h3>Consultations Généralistes</h3>
            <p>Consultations pour tous les âges, assurées par nos médecins généralistes expérimentés.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <i class="fas fa-heart"></i>
            <h3>Cardiologie</h3>
            <p>Traitement des maladies cardiaques avec une technologie de pointe.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <i class="fas fa-lungs"></i>
            <h3>Pneumologie</h3>
            <p>Prise en charge des troubles respiratoires par des spécialistes expérimentés.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <i class="fas fa-brain"></i>
            <h3>Neurologie</h3>
            <p>Soins spécialisés pour les troubles du système nerveux central et périphérique.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <i class="fas fa-child"></i>
            <h3>Pédiatrie</h3>
            <p>Soins médicaux complets pour les enfants, de la naissance à l’adolescence.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <i class="fas fa-female"></i>
            <h3>Gynécologie</h3>
            <p>Suivi gynécologique, maternité et santé reproductive.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="services-section">
      <h2>Services Chirurgicaux</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="service-card">
            <i class="fas fa-scalpel"></i>
            <h3>Chirurgie Générale</h3>
            <p>Interventions variées avec des normes de sécurité élevées.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <i class="fas fa-bone"></i>
            <h3>Orthopédie</h3>
            <p>Traitement des affections de l’appareil locomoteur et des blessures osseuses.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <i class="fas fa-microscope"></i>
            <h3>Chirurgie Minimale Invasive</h3>
            <p>Techniques modernes pour une récupération plus rapide et moins douloureuse.</p>
          </div>
        </div>
      </div>
    </section>

    <div class="text-center">
      <a href="index.php" class="back-to-home" aria-label="Retour à l'accueil"><i class="fas fa-home me-2"></i>Retour à l'accueil</a>
    </div>
  </main>

  <footer>
    © 2025 Hôpital Moderne | Tous droits réservés
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
