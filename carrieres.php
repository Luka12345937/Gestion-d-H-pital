<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrières - Hôpital Moderne</title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
    
    <!-- Bootstrap & Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .main-content {
            margin: 60px auto;
            max-width: 1200px;
            padding: 40px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #007BFF;
        }

        h1 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 40px;
        }

        .career-section {
            margin-bottom: 40px;
        }

        .career-section h2 {
            font-weight: 600;
            border-bottom: 2px solid #007BFF;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .job-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }

        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        }

        .job-card h3 {
            color: #007BFF;
            font-weight: 600;
        }

        .btn-apply {
            background-color: #007BFF;
            border: none;
            border-radius: 6px;
            padding: 10px 18px;
            color: #fff;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-apply:hover {
            background-color: #0056b3;
            transform: translateY(-1px);
        }

        .back-to-home {
            display: inline-block;
            margin-top: 40px;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 25px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .back-to-home:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .modal-title {
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="main-content">
    <h1><i class="fas fa-briefcase me-2"></i>Carrières à l'Hôpital Moderne</h1>

    <section class="career-section">
        <h2>Pourquoi nous rejoindre ?</h2>
        <p>L'Hôpital Moderne est un établissement de santé innovant, axé sur l'excellence des soins et le bien-être de ses patients. Rejoignez une équipe passionnée dans un environnement stimulant.</p>
    </section>

    <section class="career-section">
        <h2>Postes à pourvoir</h2>
        <div class="row">
            <!-- Job Cards -->
            <div class="col-md-6">
                <div class="job-card">
                    <h3>Médecin Généraliste</h3>
                    <p><strong>Type de contrat :</strong> CDI</p>
                    <p><strong>Lieu :</strong> Paris, France</p>
                    <p><strong>Description :</strong> Chargé(e) de la prise en charge globale des patients et de la coordination des soins médicaux.</p>
                    <button class="btn btn-apply" data-bs-toggle="modal" data-bs-target="#applyModal">Postuler</button>
                </div>
            </div>

            <div class="col-md-6">
                <div class="job-card">
                    <h3>Infirmier(ère) Diplômé(e) d'État</h3>
                    <p><strong>Type de contrat :</strong> CDD</p>
                    <p><strong>Lieu :</strong> Paris, France</p>
                    <p><strong>Description :</strong> Assurer les soins infirmiers et accompagner les patients dans leur parcours de soins.</p>
                    <button class="btn btn-apply" data-bs-toggle="modal" data-bs-target="#applyModal">Postuler</button>
                </div>
            </div>

            <div class="col-md-6">
                <div class="job-card">
                    <h3>Aide-Soignant(e)</h3>
                    <p><strong>Type de contrat :</strong> CDI</p>
                    <p><strong>Lieu :</strong> Paris, France</p>
                    <p><strong>Description :</strong> Soutien aux infirmiers(ères), soins d’hygiène et de confort aux patients.</p>
                    <button class="btn btn-apply" data-bs-toggle="modal" data-bs-target="#applyModal">Postuler</button>
                </div>
            </div>
        </div>
    </section>

    <section class="career-section">
        <h2>Candidature Spontanée</h2>
        <p>Vous pouvez nous envoyer votre candidature spontanée à 
            <a href="mailto:carrieres@hopitalmoderne.fr" class="text-decoration-none text-primary">carrieres@hopitalmoderne.fr</a>.
        </p>
    </section>

    <div class="text-center">
        <a href="index.php" class="back-to-home">
            <i class="fas fa-home me-2"></i>Retour à l'accueil
        </a>
    </div>
</div>

<!-- Modal de Candidature -->
<div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="applyForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="applyModalLabel">Postuler à cette offre</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom Complet</label>
                        <input type="text" class="form-control" id="name" name="name" required autocomplete="name" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse Email</label>
                        <input type="email" class="form-control" id="email" name="email" required autocomplete="email" />
                    </div>
                    <div class="mb-3">
                        <label for="cv" class="form-label">CV (PDF uniquement)</label>
                        <input type="file" class="form-control" id="cv" name="cv" accept=".pdf" required />
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Quelques mots pour nous convaincre..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-apply w-100">Envoyer ma candidature</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(function () {
        $('#applyForm').on('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(this);

            $.ajax({
                url: 'ajax/apply_job.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.trim() === 'success') {
                        alert('Votre candidature a bien été envoyée.');
                        $('#applyModal').modal('hide');
                        $('#applyForm')[0].reset();
                    } else {
                        alert('Erreur lors de l’envoi. Veuillez réessayer.');
                    }
                },
                error: function () {
                    alert('Erreur de connexion. Veuillez réessayer.');
                }
            });
        });
    });
</script>

</body>
</html>
