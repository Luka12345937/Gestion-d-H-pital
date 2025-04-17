<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Patients - Hôpital Moderne</title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .table-responsive {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }

        .btn-add {
            background-color: #007BFF;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            color: white;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-add:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .action-btn {
            margin: 0 5px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .action-btn.edit {
            background-color: #28a745;
            color: white;
        }

        .action-btn.edit:hover {
            background-color: #218838;
        }

        .action-btn.delete {
            background-color: #dc3545;
            color: white;
        }

        .action-btn.delete:hover {
            background-color: #c82333;
        }

        .dataTables_wrapper .dataTables_filter input {
            border-radius: 8px;
            padding: 10px;
            border: 1px solid #ced4da;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            border-radius: 8px;
            padding: 5px 10px;
            margin: 0 2px;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background-color: #007BFF;
            color: white !important;
            border: none;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background-color: #0056b3;
            color: white !important;
            border: none;
        }
    </style>
</head>
<body>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Gestion des Patients</h1>
            <button class="btn btn-add" data-bs-toggle="modal" data-bs-target="#addPatientModal">
                <i class="fas fa-plus me-2"></i>Ajouter un Patient
            </button>
        </div>

        <!-- Patients Table -->
        <div class="card">
            <div class="table-responsive">
                <table id="patientsTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Date de Naissance</th>
                            <th>Genre</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data will be loaded via AJAX -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Patient Modal -->
<div class="modal fade" id="addPatientModal" tabindex="-1" aria-labelledby="addPatientModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPatientModalLabel">Ajouter un Patient</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addPatientForm">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>
                    <div class="mb-3">
                        <label for="date_naissance" class="form-label">Date de Naissance</label>
                        <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <select class="form-select" id="genre" name="genre" required>
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
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
        var table = $('#patientsTable').DataTable({
            ajax: {
                url: 'ajax/get_patients.php',
                dataSrc: ''
            },
            columns: [
                { data: 'id' },
                { data: 'nom' },
                { data: 'prenom' },
                { data: 'date_naissance' },
                { data: 'genre' },
                { data: 'telephone' },
                { data: 'email' },
                {
                    data: null,
                    render: function(data, type, row) {
                        return `
                            <button class="btn action-btn edit" data-id="${row.id}"><i class="fas fa-edit"></i></button>
                            <button class="btn action-btn delete" data-id="${row.id}"><i class="fas fa-trash"></i></button>
                        `;
                    }
                }
            ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json'
            }
        });

        // Add Patient Form Submission
        $('#addPatientForm').submit(function(e) {
            e.preventDefault();
            const formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: 'ajax/add_patient.php',
                data: formData,
                success: function(response) {
                    if (response === 'success') {
                        $('#addPatientModal').modal('hide');
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

        // Delete Patient
        $('#patientsTable').on('click', '.action-btn.delete', function() {
            const patientId = $(this).data('id');

            if (confirm('Êtes-vous sûr de vouloir supprimer ce patient ?')) {
                $.ajax({
                    type: 'POST',
                    url: 'ajax/delete_patient.php',
                    data: { id: patientId },
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
