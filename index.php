<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Hôpital Moderne - Votre santé, notre priorité. Services médicaux de qualité avec des spécialistes expérimentés." />
  <meta name="theme-color" content="#007BFF" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://www.hopitalmoderne.fr/" />
  
  <title>Hôpital Moderne - Accueil | Soins médicaux de qualité</title>

  <!-- Preloads critiques -->
  <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style" />
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" as="style" />
  <link rel="preload" href="assets/css/main.css" as="style" />
  
  <!-- Favicon optimisé avec versions modernes -->
  <link rel="icon" href="assets/img/favicon.ico" sizes="any" />
  <link rel="icon" href="assets/img/favicon.svg" type="image/svg+xml" />
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
  <link rel="manifest" href="assets/img/site.webmanifest" />

  <!-- CSS critique inlined -->
  <style>
    :root {
      --primary-color: #007BFF;
      --secondary-color: #0056b3;
      --text-dark: #212529;
      --text-light: #f8f9fa;
      --bg-light: #f8f9fa;
    }
    
    body {
      font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
      margin: 0;
      line-height: 1.6;
      color: var(--text-dark);
      background-color: var(--bg-light);
    }
    
    .navbar {
      background-color: var(--primary-color);
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .hero {
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      color: white;
      padding: 5rem 0;
      background-size: cover;
      background-position: center;
    }
    
    .btn-lg {
      border-radius: 0.5rem;
      padding: 0.75rem 1.5rem;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    
    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    footer {
      background-color: var(--text-dark);
      padding: 3rem 0;
    }
    
    /* Fallback fonts jusqu'à ce que Poppins soit chargé */
    @font-face {
      font-family: 'Poppins-fallback';
      src: local('Arial');
      size-adjust: 105%;
      ascent-override: 95%;
      descent-override: 25%;
      line-gap-override: 0%;
    }
    
    .font-loaded body {
      font-family: 'Poppins', 'Poppins-fallback', sans-serif;
    }
  </style>

  <!-- Chargement asynchrone des CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" media="print" onload="this.media='all'" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" media="print" onload="this.media='all'" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" media="print" onload="this.media='all'" />
  
  <!-- Fallback styles si JS désactivé -->
  <noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  </noscript>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top" aria-label="Navigation principale">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="/" aria-label="Retour à l'accueil - Hôpital Moderne">
        <img src="assets/img/logo.webp" alt="" width="40" height="40" class="me-2" loading="eager" decoding="async" />
        <span>Hôpital Moderne</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Basculer la navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="" aria-current="index.php">Accueil</a></li>
          <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="login.php">Connexion</a></li>
          <li class="nav-item"><a class="nav-link" href="register.php">Inscription</a></li>
          <li class="nav-item"><a class="nav-link" href="tel:+33123456789" aria-label="Appelez-nous au 01 23 45 67 89"><i class="fas fa-phone me-1"></i> Urgences</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Section Hero -->
  <section class="hero text-center" aria-labelledby="hero-heading">
    <div class="container">
      <h1 id="hero-heading" class="display-4 mb-4">Bienvenue à l'Hôpital Moderne</h1>
      <p class="lead mb-5">Votre santé, notre priorité. Des soins médicaux de qualité avec des professionnels expérimentés.</p>
      <div class="d-flex justify-content-center flex-wrap gap-3">
        <a href="login.php" class="btn btn-light btn-lg px-4 py-3" aria-label="Accéder à votre compte">Se connecter</a>
        <a href="register.php" class="btn btn-outline-light btn-lg px-4 py-3" aria-label="Créer un compte">S'inscrire</a>
        <a href="services.php" class="btn btn-outline-light btn-lg px-4 py-3" aria-label="Découvrir nos services">Nos services</a>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="py-5 bg-white" aria-labelledby="services-heading">
    <div class="container">
      <h2 id="services-heading" class="text-center mb-5">Nos Services Médicaux</h2>
      <div class="row g-4">
        <article class="col-md-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body text-center p-4">
              <i class="fas fa-stethoscope text-primary mb-3" style="font-size: 2.5rem;" aria-hidden="true"></i>
              <h3 class="h5">Consultations spécialisées</h3>
              <p>Consultations médicales avec des spécialistes expérimentés dans divers domaines de la médecine.</p>
              <a href="consultations.php" class="stretched-link" aria-label="En savoir plus sur les consultations"></a>
            </div>
          </div>
        </article>
        <article class="col-md-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body text-center p-4">
              <i class="fas fa-calendar-alt text-primary mb-3" style="font-size: 2.5rem;" aria-hidden="true"></i>
              <h3 class="h5">Prise de rendez-vous</h3>
              <p>Prise de rendez-vous en ligne rapide, facile et sécurisée avec nos professionnels de santé.</p>
              <a href="rdv.php" class="stretched-link" aria-label="Prendre un rendez-vous"></a>
            </div>
          </div>
        </article>
        <article class="col-md-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body text-center p-4">
              <i class="fas fa-hospital text-primary mb-3" style="font-size: 2.5rem;" aria-hidden="true"></i>
              <h3 class="h5">Urgences 24/7</h3>
              <p>Service d'urgences médicales disponible 24 heures sur 24, 7 jours sur 7 pour vos besoins immédiats.</p>
              <a href="urgences.php" class="stretched-link" aria-label="Informations urgences"></a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Témoignages -->
  <section class="py-5 bg-light" aria-labelledby="testimonials-heading">
    <div class="container">
      <h2 id="testimonials-heading" class="text-center mb-5">Ce que disent nos patients</h2>
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
          <blockquote class="bg-white p-4 rounded shadow-sm">
            <div class="mb-3 text-warning">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>"Un personnel attentionné et des médecins compétents. Mon expérience a été excellente."</p>
            <footer class="text-muted">— Marie D., Paris</footer>
          </blockquote>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <blockquote class="bg-white p-4 rounded shadow-sm">
            <div class="mb-3 text-warning">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>"La prise de rendez-vous en ligne est très pratique et le service d'urgence efficace."</p>
            <footer class="text-muted">— Jean P., Lyon</footer>
          </blockquote>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <blockquote class="bg-white p-4 rounded shadow-sm">
            <div class="mb-3 text-warning">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <p>"Équipements modernes et résultats d'analyses disponibles rapidement en ligne."</p>
            <footer class="text-muted">— Sophie L., Marseille</footer>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-5 bg-primary text-white" aria-labelledby="cta-heading">
    <div class="container text-center">
      <h2 id="cta-heading" class="mb-4">Besoin d'un avis médical ?</h2>
      <p class="lead mb-5">Prenez rendez-vous avec l'un de nos spécialistes dès aujourd'hui.</p>
      <a href="tel:+33123456789" class="btn btn-light btn-lg px-4 py-3 me-3" aria-label="Appelez-nous au 01 23 45 67 89">
        <i class="fas fa-phone me-2"></i> 01 23 45 67 89
      </a>
      <a href="register.php" class="btn btn-outline-light btn-lg px-4 py-3" aria-label="Créer un compte">
        <i class="fas fa-user-plus me-2"></i> S'inscrire
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4">
          <h3 class="h5 mb-3">Hôpital Moderne</h3>
          <address>
            123 Avenue de la Santé<br>
            75000 Paris, France<br><br>
            <strong>Téléphone :</strong> <a href="tel:+33123456789" class="text-white">01 23 45 67 89</a><br>
            <strong>Email :</strong> <a href="mailto:contact@hopitalmoderne.fr" class="text-white">contact@hopitalmoderne.fr</a>
          </address>
        </div>
        <div class="col-lg-2 col-md-6 mb-4">
          <h3 class="h5 mb-3">Services</h3>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="services.php" class="text-white">Consultations</a></li>
            <li class="mb-2"><a href="urgences.php" class="text-white">Urgences</a></li>
            <li class="mb-2"><a href="analyses.php" class="text-white">Analyses</a></li>
            <li class="mb-2"><a href="radiologie.php" class="text-white">Radiologie</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4">
          <h3 class="h5 mb-3">Informations</h3>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="apropos.php" class="text-white">À propos</a></li>
            <li class="mb-2"><a href="equipe.php" class="text-white">Notre équipe</a></li>
            <li class="mb-2"><a href="carrieres.php" class="text-white">Carrières</a></li>
            <li class="mb-2"><a href="contact.php" class="text-white">Contact</a></li>
          </ul>
        </div>
        <div class="col-lg-4 mb-4">
          <h3 class="h5 mb-3">Réseaux sociaux</h3>
          <div class="mb-4">
            <a href="#" class="text-white me-3" aria-label="Facebook"><i class="fab fa-facebook-f fa-lg"></i></a>
            <a href="#" class="text-white me-3" aria-label="Twitter"><i class="fab fa-twitter fa-lg"></i></a>
            <a href="#" class="text-white me-3" aria-label="LinkedIn"><i class="fab fa-linkedin-in fa-lg"></i></a>
            <a href="#" class="text-white me-3" aria-label="Instagram"><i class="fab fa-instagram fa-lg"></i></a>
            <a href="#" class="text-white" aria-label="YouTube"><i class="fab fa-youtube fa-lg"></i></a>
          </div>
          <div class="mb-3">
            <a href="cgv.php" class="text-white me-3">CGV</a>
            <a href="confidentialite.php" class="text-white me-3">Confidentialité</a>
            <a href="cookies.php" class="text-white">Cookies</a>
          </div>
        </div>
      </div>
      <hr class="my-4 bg-light opacity-25">
      <div class="text-center">
        <p class="mb-0">&copy; <span id="current-year"></span> Hôpital Moderne. Tous droits réservés.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts optimisés -->
  <script>
    // Détection JS pour améliorer le rendu initial
    document.documentElement.classList.remove('no-js');
    
    // Ajout dynamique de l'année
    document.getElementById('current-year').textContent = new Date().getFullYear();
    
    // Détection du chargement de la police
    document.fonts.ready.then(function() {
      document.documentElement.classList.add('font-loaded');
    });
    
    // Chargement différé des scripts non critiques
    function loadScript(src, callback) {
      const script = document.createElement('script');
      script.src = src;
      script.async = true;
      script.defer = true;
      if (callback) script.onload = callback;
      document.body.appendChild(script);
    }
    
    window.addEventListener('load', function() {
      // Chargement de Bootstrap
      loadScript('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js');
      
      // Chargement des scripts supplémentaires si besoin
      if (window.matchMedia('(min-width: 768px)').matches) {
        loadScript('assets/js/animations.js');
      }
    });
    
    // Service Worker pour le mode hors ligne
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function() {
        navigator.serviceWorker.register('/sw.js').then(function(registration) {
          console.log('ServiceWorker registration successful');
        }, function(err) {
          console.log('ServiceWorker registration failed: ', err);
        });
      });
    }
  </script>
  
  <!-- Schema.org markup for Google -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Hospital",
      "name": "Hôpital Moderne",
      "description": "Hôpital moderne offrant des soins médicaux de qualité avec des spécialistes expérimentés.",
      "url": "https://www.hopitalmoderne.fr",
      "logo": "https://www.hopitalmoderne.fr/assets/img/logo.webp",
      "telephone": "+33123456789",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "123 Avenue de la Santé",
        "addressLocality": "Paris",
        "postalCode": "75000",
        "addressCountry": "FR"
      },
      "openingHours": "Mo,Tu,We,Th,Fr 08:00-20:00 Sa 09:00-18:00",
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday"
        ],
        "opens": "08:00",
        "closes": "20:00"
      }
    }
  </script>
</body>
</html>