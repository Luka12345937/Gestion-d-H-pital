<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factures - Hôpital Moderne</title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <style>
        :root {
            --primary-color: #007BFF;
            --secondary-color: #6c757d;
            --background-color: #f8f9fa;
            --text-color: #333;
            --hover-color: #0056b3;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
        }

        .main-content {
            margin: 50px auto;
            max-width: 1200px;
            padding: 40px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .main-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        h1, h2 {
            color: var(--primary-color);
            font-weight: 700;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .back-to-home {
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .back-to-home:hover {
            background-color: var(--hover-color);
            transform: translateY(-2px);
        }

        .btn-add {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-add:hover {
            background-color: var(--hover-color);
            transform: translateY(-2px);
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .table th {
            background-color: var(--primary-color);
            color: white;
            font-weight: 600;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .action-btn {
            margin: 0 5px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .action-btn.view {
            background-color: #17a2b8;
            color: white;
        }

        .action-btn.view:hover {
            background-color: #138496;
        }

        .action-btn.delete {
            background-color: #dc3545;
            color: white;
        }

        .action-btn.delete:hover {
            background-color: #c82333;
        }

        /* Animation de fond subtile */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .main-content {
            animation: fadeIn 1s ease-in-out;
        }
    </style>
</head>
<body>

<div class="main-content">
    <div class="header">
        <h1><i class="fas fa-file-invoice-dollar me-2"></i>Gestion des Factures</h1>
        <a href="index.php" class="back-to-home"><i class="fas fa-home me-2"></i>Retour à l'accueil</a>
    </div>

    <button class="btn btn-add" data-bs-toggle="modal" data-bs-target="#addFactureModal">
        <i class="fas fa-plus me-2"></i>Ajouter une Facture
    </button>

    <div class="table-responsive">
        <table id="facturesTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient</th>
                    <th>Date</th>
                    <th>Montant</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be loaded via AJAX -->
            </tbody>
        </table>
    </div>
</div>

<!-- Add Facture Modal -->
<div class="modal fade" id="addFactureModal" tabindex="-1" aria-labelledby="addFactureModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFactureModalLabel">Ajouter une Facture</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addFactureForm">
                    <div class="mb-3">
                        <label for="patient" class="form-label">Patient</label>
                        <select class="form-select" id="patient" name="patient" required>
                            <!-- Options will be loaded via AJAX -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="montant" class="form-label">Montant</label>
                        <input type="number" step="0.01" class="form-control" id="montant" name="montant" required>
                    </div>
                    <div class="mb-3">
                        <label for="statut" class="form-label">Statut</label>
                        <select class="form-select" id="statut" name="statut" required>
                            <option value="payé">Payé</option>
                            <option value="impayé">Impayé</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize DataTable
        var table = $('#facturesTable').DataTable({
            ajax: {
                url: 'ajax/get_factures.php',
                dataSrc: ''
            },
            columns: [
                { data: 'id' },
                { data: 'patient' },
                { data: 'date' },
                { data: 'montant' },
                { data: 'statut' },
                {
                    data: null,
                    render: function(data, type, row) {
                        return `
                            <button class="btn action-btn view" data-id="${row.id}"><i class="fas fa-eye"></i></button>
                            <button class="btn action-btn delete" data-id="${row.id}"><i class="fas fa-trash"></i></button>
                        `;
                    }
                }
            ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json'
            }
        });

        // Load patients for select
        $.ajax({
            url: 'ajax/get_patients.php',
            success: function(response) {
                $('#patient').html(response);
            }
        });

        // Add Facture Form Submission
        $('#addFactureForm').submit(function(e) {
            e.preventDefault();
            const formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: 'ajax/add_facture.php',
                data: formData,
                success: function(response) {
                    if (response === 'success') {
                        $('#addFactureModal').modal('hide');
                        table.ajax.reload();
                    } else {
                        alert('Une erreur s\'est produite. Veuillez réessayer.');
                    }
                },
                error: function() {
                    alert('Une erreur s\'est produite. Veuillez réessayer.');
                }
            });
        });

        // Delete Facture
        $('#facturesTable').on('click', '.action-btn.delete', function() {
            const factureId = $(this).data('id');

            if (confirm('Êtes-vous sûr de vouloir supprimer cette facture ?')) {
                $.ajax({
                    type: 'POST',
                    url: 'ajax/delete_facture.php',
                    data: { id: factureId },
                    success: function(response) {
                        if (response === 'success') {
                            table.ajax.reload();
                        } else {
                            alert('Une erreur s\'est produite. Veuillez réessayer.');
                        }
                    },
                    error: function() {
                        alert('Une erreur s\'est produite. Veuillez réessayer.');
                    }
                });
            }
        });
    });
</script>
</body>
</html>
