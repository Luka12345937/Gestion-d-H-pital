<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Équipe - Hôpital Moderne</title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .main-content {
            margin: 50px auto;
            max-width: 1200px;
            padding: 40px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #007BFF;
            font-weight: 700;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
        }

        .team-section {
            margin-bottom: 40px;
        }

        .team-section h2 {
            margin-bottom: 30px;
            padding-bottom: 10px;
            border-bottom: 2px solid #007BFF;
        }

        .team-member {
            text-align: center;
            margin-bottom: 30px;
            transition: transform 0.3s;
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 4px solid #007BFF;
        }

        .team-member h3 {
            color: #007BFF;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .team-member p {
            font-size: 1.05rem;
            color: #666;
        }

        .social-links a {
            color: #007BFF;
            margin: 0 10px;
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #0056b3;
        }

        .back-to-home {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .back-to-home:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<div class="main-content">
    <h1><i class="fas fa-users me-2"></i>Notre Équipe</h1>

    <div class="team-section">
        <h2>Direction</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="team-member">
                    <img src="assets/img/team/director.jpg" alt="Directeur">
                    <h3>Jean Dupont</h3>
                    <p>Directeur Général</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="assets/img/team/manager.jpg" alt="Directrice Adjointe">
                    <h3>Marie Durand</h3>
                    <p>Directrice Adjointe</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-section">
        <h2>Équipe Médicale</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="team-member">
                    <img src="assets/img/team/doctor1.jpg" alt="Dr. Smith">
                    <h3>Dr. John Smith</h3>
                    <p>Médecin Généraliste</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member">
                    <img src="assets/img/team/doctor2.jpg" alt="Dr. Brown">
                    <h3>Dr. Emily Brown</h3>
                    <p>Pédiatre</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member">
                    <img src="assets/img/team/nurse1.jpg" alt="Infirmière Martin">
                    <h3>Claire Martin</h3>
                    <p>
