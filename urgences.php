<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Urgences – Hôpital Moderne</title>
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <style>
    :root {
      --primary: #007BFF;
      --secondary: #6c757d;
      --accent: #0056b3;
      --text-dark: #1a1a1a;
      --bg-light: #f8fbff;
      --glass-bg: rgba(255, 255, 255, 0.75);
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #e3f2fd, #ffffff);
      margin: 0;
      padding: 0;
      color: var(--text-dark);
    }

    header {
      background-color: var(--primary);
      color: white;
      padding: 1.2rem;
      text-align: center;
      font-size: 1.8rem;
      font-weight: 600;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .main-content {
      max-width: 1200px;
      margin: 40px auto;
      padding: 30px;
      background: var(--glass-bg);
      border-radius: 20px;
      backdrop-filter: blur(12px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: var(--primary);
      font-weight: 700;
      text-align: center;
      margin-bottom: 40px;
    }

    h2 {
      font-weight: 600;
      color: var(--accent);
      margin-top: 30px;
      border-bottom: 2px solid var(--primary);
      padding-bottom: 10px;
    }

    p {
      font-size: 1.1rem;
      line-height: 1.7;
      color: var(--secondary);
    }

    .emergency-contact {
      background-color: var(--primary);
      color: white;
      border-radius: 15px;
      padding: 30px;
      text-align: center;
      margin-bottom: 40px;
    }

    .btn-emergency {
      background-color: white;
      color: var(--primary);
      font-weight: bold;
      padding: 12px 24px;
      border-radius: 8px;
      margin-top: 15px;
      transition: all 0.3s ease;
      border: none;
    }

    .btn-emergency:hover {
      background-color: var(--accent);
      color: #fff;
    }

    .service-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
    }

    .service-card {
      background-color: var(--glass-bg);
      backdrop-filter: blur(10px);
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.08);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    .service-card h3 {
      color: var(--primary);
      margin-bottom: 12px;
      font-weight: 600;
    }

    .back-to-home {
      display: inline-block;
      margin-top: 40px;
      padding: 12px 24px;
      background-color: var(--primary);
      color: #fff;
      border-radius: 8px;
      text-decoration: none;
      transition: background-color 0.3s, transform 0.3s;
    }

    .back-to-home:hover {
      background-color: var(--accent);
      transform: scale(1.05);
    }

    footer {
      margin-top: 60px;
      background: var(--primary);
      color: white;
      padding: 1rem;
      text-align: center;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
  </style>
</head>
<body>

  <header>
    <i class="fas fa-hospital-symbol me-2"></i>Hôpital Moderne – Service des Urgences
  </header>

  <main class="main-content">

    <h1><i class="fas fa-ambulance me-2"></i>Urgences Médicales 24h/24</h1>

    <section class="emergency-section">
      <h2>À Propos</h2>
      <p>Le service des urgences de l’Hôpital Moderne est disponible 24h/24, 7j/7. Notre équipe médicale expérimentée est prête à intervenir avec rapidité, compassion et efficacité pour sauver des vies.</p>
    </section>

    <section class="emergency-contact">
      <h2><i class="fas fa-phone-alt me-2"></i>Appelez Immédiatement le 15</h2>
      <p>Composez <strong>le 15</strong> ou rendez-vous sans délai dans notre service d'urgence en cas de besoin vital.</p>
      <a href="tel:15" class="btn btn-emergency"><i class="fas fa-phone me-2"></i>Appeler le 15</a>
    </section>

    <section>
      <h2>Types d'Urgences Pris en Charge</h2>
      <div class="service-grid">
        <div class="service-card">
          <h3><i class="fas fa-heartbeat me-2"></i>Cardiaques</h3>
          <p>Crises cardiaques, arythmies, insuffisance cardiaque aiguë.</p>
        </div>
        <div class="service-card">
          <h3><i class="fas fa-lungs me-2"></i>Respiratoires</h3>
          <p>Asthme sévère, détresse respiratoire, embolie pulmonaire.</p>
        </div>
        <div class="service-card">
          <h3><i class="fas fa-brain me-2"></i>Neurologiques</h3>
          <p>AVC, convulsions, traumatisme crânien, paralysies.</p>
        </div>
        <div class="service-card">
          <h3><i class="fas fa-bone me-2"></i>Traumatologiques</h3>
          <p>Fractures, hémorragies, brûlures, accidents graves.</p>
        </div>
        <div class="service-card">
          <h3><i class="fas fa-child me-2"></i>Pédiatriques</h3>
          <p>Urgences infantiles : fièvres, déshydratation, crises convulsives.</p>
        </div>
        <div class="service-card">
          <h3><i class="fas fa-virus me-2"></i>Infectieuses</h3>
          <p>Sepsis, infections graves, maladies tropicales et contagieuses.</p>
        </div>
      </div>
    </section>

    <div class="text-center">
      <a href="index.php" class="back-to-home"><i class="fas fa-home me-2"></i>Retour à l'accueil</a>
    </div>
  </main>

  <footer>
    &copy; 2025 Hôpital Moderne – Tous droits réservés
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
