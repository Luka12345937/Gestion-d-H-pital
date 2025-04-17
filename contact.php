<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Hôpital Moderne</title>
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
            max-width: 800px;
            padding: 40px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007BFF;
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
        }

        .contact-info {
            margin-bottom: 30px;
        }

        .contact-info h2 {
            color: #007BFF;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .contact-info p {
            font-size: 1.05rem;
            line-height: 1.6;
        }

        .contact-info a {
            color: #007BFF;
            text-decoration: none;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .contact-form {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }

        .contact-form .form-label {
            font-weight: 500;
        }

        .contact-form .form-control {
            border-radius: 8px;
            padding: 12px;
        }

        .contact-form .btn-submit {
            background-color: #007BFF;
            border: none;
            border-radius: 8px;
            padding: 12px 24px;
            color: white;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }

        .contact-form .btn-submit:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
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

        .map-responsive {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="main-content">
    <h1><i class="fas fa-envelope me-2"></i>Contactez-nous</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="contact-info">
                <h2><i class="fas fa-info-circle me-2"></i>Informations de Contact</h2>
                <p><strong>Adresse :</strong> 123 Rue de la Santé, 75000 Paris, France</p>
                <p><strong>Téléphone :</strong> <a href="tel:+33123456789">+33 1 23 45 67 89</a></p>
                <p><strong>Email :</strong> <a href="mailto:contact@hopitalmoderne.fr">contact@hopitalmoderne.fr</a></p>
                <p><strong>Heures d'ouverture :</strong> Lundi - Vendredi : 8h - 20h, Samedi : 9h - 17h</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.880462581372!2d2.335844315666501!3d48.86083077928753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1633068843135!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <div class="contact-form mt-5">
        <h2 class="text-center mb-4"><i class="fas fa-paper-plane me-2"></i>Envoyez-nous un message</h2>
        <form id="contactForm">
            <div class="mb-3">
                <label for="name" class="form-label">Nom Complet</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Sujet</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-submit">Envoyer</button>
        </form>
    </div>

    <div class="text-center mt-4">
        <a href="index.php" class="back-to-home"><i class="fas fa-home me-2"></i>Retour à l'accueil</a>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(e) {
            e.preventDefault();
            const formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: 'ajax/send_message.php',
                data: formData,
                success: function(response) {
                    if (response === 'success') {
                        alert('Votre message a été envoyé avec succès !');
                        $('#contactForm')[0].reset();
                    } else {
                        alert('Une erreur s\'est produite. Veuillez réessayer.');
                    }
                },
                error: function() {
                    alert('Une erreur s\'est produite. Veuillez réessayer.');
                }
            });
        });
    });
</script>
</body>
</html>
