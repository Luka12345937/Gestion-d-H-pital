<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - Hôpital Moderne</title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    
    <!-- Styles & Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .navbar {
            background-color: #007BFF;
        }

        .navbar-brand, .nav-link {
            color: white !important;
        }

        .main-content {
            margin: 80px auto 60px;
            max-width: 1200px;
            padding: 40px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        h1, h2, h3 {
            color: #007BFF;
            font-weight: 700;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
        }

        .about-section {
            margin-bottom: 40px;
        }

        .about-section h2 {
            border-bottom: 2px solid #007BFF;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .about-section p,
        .mission-vision p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #555;
        }

        .mission-vision {
            background-color: #eef3f9;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 40px;
        }

        .back-to-home {
            margin-top: 30px;
            display: inline-block;
            padding: 12px 25px;
            background-color: #007BFF;
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .back-to-home:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        footer {
            background-color: #007BFF;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top shadow">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-hospital me-2"></i>Hôpital Moderne</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon bg-light"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home me-1"></i>Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-info-circle me-1"></i>À Propos</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-phone-alt me-1"></i>Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="main-content container">
    <h1><i class="fas fa-hospital me-2"></i>À Propos de l'Hôpital Moderne</h1>

    <section class="about-section">
        <h2>Notre Histoire</h2>
        <p>Fondé en 1990, l'Hôpital Moderne est un établissement de santé de référence, engagé dans la fourniture de soins de qualité et innovants. Au fil des années, nous avons élargi nos services pour répondre aux besoins croissants de notre communauté, tout en maintenant notre engagement envers l'excellence médicale.</p>
    </section>

    <section class="mission-vision row text-center">
        <div class="col-md-6">
            <h3><i class="fas fa-bullseye me-2"></i>Notre Mission</h3>
            <p>Fournir des soins de santé accessibles, compassionnels et de haute qualité à tous nos patients, en mettant l'accent sur l'innovation et l'amélioration continue.</p>
        </div>
        <div class="col-md-6">
            <h3><i class="fas fa-eye me-2"></i>Notre Vision</h3>
            <p>Devenir un leader dans le domaine de la santé, reconnu pour notre excellence médicale, notre engagement envers les patients et notre contribution à la communauté.</p>
        </div>
    </section>

    <section class="about-section">
        <h2>Nos Valeurs</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <h3><i class="fas fa-heart me-2"></i>Compassion</h3>
                <p>Nous traitons chaque patient avec empathie et respect, en mettant leurs besoins au cœur de nos actions.</p>
            </div>
            <div class="col-md-4">
                <h3><i class="fas fa-hands-helping me-2"></i>Intégrité</h3>
                <p>Nous agissons avec honnêteté et transparence dans toutes nos interactions.</p>
            </div>
            <div class="col-md-4">
                <h3><i class="fas fa-lightbulb me-2"></i>Innovation</h3>
                <p>Nous cherchons constamment à améliorer nos pratiques et à adopter les dernières avancées médicales.</p>
            </div>
        </div>
    </section>

    <div class="text-center">
        <a href="index.php" class="back-to-home"><i class="fas fa-home me-2"></i>Retour à l'accueil</a>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <p>&copy; 2025 Hôpital Moderne. Tous droits réservés.</p>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
