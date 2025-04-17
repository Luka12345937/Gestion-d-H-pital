<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Politique de Confidentialité | Hôpital Moderne</title>
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>

  <style>
    :root {
      --primary: #0d6efd;
      --primary-dark: #084298;
      --success: #28a745;
      --bg-gradient: linear-gradient(to right, #e3f2fd, #f8f9fa);
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: var(--bg-gradient);
      color: #2c2c2c;
      margin: 0;
      padding: 0;
    }

    .container-policy {
      max-width: 1000px;
      margin: 80px auto;
      padding: 40px;
      background: #ffffff;
      border-radius: 18px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
      animation: fadeIn 1.2s ease;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h1 {
      font-size: 2.4rem;
      font-weight: 700;
      color: var(--primary);
    }

    h2 {
      font-size: 1.5rem;
      margin-top: 30px;
      margin-bottom: 15px;
      border-bottom: 2px solid var(--primary);
      padding-bottom: 5px;
      font-weight: 600;
      color: var(--primary-dark);
    }

    p {
      font-size: 1.05rem;
      line-height: 1.8;
    }

    ul {
      list-style: none;
      padding-left: 0;
    }

    ul li {
      position: relative;
      padding-left: 30px;
      margin-bottom: 10px;
    }

    ul li::before {
      content: "\f00c";
      font-family: "Font Awesome 6 Free";
      font-weight: 900;
      color: var(--success);
      position: absolute;
      left: 0;
      top: 1px;
    }

    .btn-home {
      margin-top: 40px;
      padding: 12px 25px;
      font-weight: 500;
      background-color: var(--primary);
      color: white;
      border: none;
      border-radius: 10px;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
    }

    .btn-home i {
      margin-right: 8px;
    }

    .btn-home:hover {
      background-color: var(--primary-dark);
      transform: translateY(-3px);
      text-decoration: none;
    }

    @media (max-width: 768px) {
      .container-policy {
        margin: 30px 15px;
        padding: 25px;
      }

      h1 {
        font-size: 2rem;
      }

      h2 {
        font-size: 1.3rem;
      }
    }
  </style>
</head>
<body>

  <div class="container-policy">
    <h1 class="text-center mb-5">Politique de Confidentialité</h1>

    <section>
      <h2>1. Collecte des Informations</h2>
      <p>Nous collectons les informations suivantes pour assurer le bon fonctionnement de nos services :</p>
      <ul>
        <li>Informations personnelles (nom, prénom, date de naissance, genre)</li>
        <li>Coordonnées (adresse email, numéro de téléphone)</li>
        <li>Informations médicales (antécédents, traitements en cours)</li>
        <li>Données techniques (adresse IP, type de navigateur, pages visitées)</li>
      </ul>
    </section>

    <section>
      <h2>2. Utilisation des Informations</h2>
      <p>Les informations collectées sont utilisées pour :</p>
      <ul>
        <li>Fournir et améliorer nos services médicaux</li>
        <li>Personnaliser l'expérience utilisateur</li>
        <li>Envoyer des notifications et des rappels importants</li>
        <li>Respecter les obligations légales et réglementaires</li>
      </ul>
    </section>

    <section>
      <h2>3. Partage des Informations</h2>
      <p>Nous ne partageons vos informations qu'avec les parties suivantes :</p>
      <ul>
        <li>Personnel médical autorisé</li>
        <li>Partenaires de confiance pour des services spécifiques</li>
        <li>Autorités compétentes en cas d'obligation légale</li>
      </ul>
    </section>

    <section>
      <h2>4. Sécurité des Données</h2>
      <p>Nous mettons en œuvre des mesures de sécurité robustes pour protéger vos données, notamment :</p>
      <ul>
        <li>Chiffrement des données sensibles</li>
        <li>Accès restreint aux informations personnelles</li>
        <li>Sauvegardes régulières et sécurisées</li>
      </ul>
    </section>

    <section>
      <h2>5. Droits des Utilisateurs</h2>
      <p>Conformément au RGPD, vous disposez des droits suivants :</p>
      <ul>
        <li>Accès à vos données personnelles</li>
        <li>Rectification des informations inexactes</li>
        <li>Suppression de vos données (droit à l'oubli)</li>
        <li>Opposition au traitement de vos données</li>
      </ul>
    </section>

    <section>
      <h2>6. Modifications de la Politique</h2>
      <p>Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. Les changements seront publiés sur cette page avec une date de mise à jour.</p>
    </section>

    <div class="text-center">
      <a href="index.php" class="btn-home">
        <i class="fas fa-home"></i> Retour à l'accueil
      </a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
