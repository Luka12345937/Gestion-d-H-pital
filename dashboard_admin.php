<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Admin - Hôpital Moderne</title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            margin-left: 250px;
            padding: 40px;
            transition: margin-left 0.3s;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background-color: var(--primary-color);
            color: white;
            padding: 20px;
            transition: width 0.3s;
            overflow-y: auto;
        }

        .sidebar.collapsed {
            width: 80px;
        }

        .sidebar .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar .logo img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .sidebar .nav-link {
            color: white;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .sidebar .nav-link:hover {
            background-color: var(--hover-color);
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        .sidebar.collapsed .nav-link span {
            display: none;
        }

        .sidebar.collapsed .logo span {
            display: none;
        }

        .toggle-sidebar {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1000;
        }

        .dashboard-card {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .dashboard-card h3 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .dashboard-card p {
            font-size: 1.2rem;
            color: var(--secondary-color);
        }

        .back-to-home {
            display: inline-block;
            margin-top: 30px;
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

<!-- Toggle Sidebar Button -->
<button class="toggle-sidebar" id="toggleSidebar">
    <i class="fas fa-bars"></i>
</button>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="logo">
        <img src="assets/img/logo.png" alt="Logo">
        <span>Hôpital Moderne</span>
    </div>
    <nav>
        <a href="dashboard_admin.php" class="nav-link active">
            <i class="fas fa-tachometer-alt"></i>
            <span>Tableau de Bord</span>
        </a>
        <a href="patients.php" class="nav-link">
            <i class="fas fa-users"></i>
            <span>Patients</span>
        </a>
        <a href="medecins.php" class="nav-link">
            <i class="fas fa-user-md"></i>
            <span>Médecins</span>
        </a>
        <a href="factures.php" class="nav-link">
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Factures</span>
        </a>
        <a href="analyses.php" class="nav-link">
            <i class="fas fa-vial"></i>
            <span>Analyses</span>
        </a>
        <a href="radiologie.php" class="nav-link">
            <i class="fas fa-x-ray"></i>
            <span>Radiologie</span>
        </a>
        <a href="index.php" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
            <span>Déconnexion</span>
        </a>
    </nav>
</div>

<!-- Main Content -->
<div class="main-content">
    <h1><i class="fas fa-tachometer-alt me-2"></i>Tableau de Bord Administrateur</h1>

    <div class="row">
        <div class="col-md-3">
            <div class="dashboard-card">
                <h3><i class="fas fa-users me-2"></i>Patients</h3>
                <p>1,250</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-card">
                <h3><i class="fas fa-user-md me-2"></i>Médecins</h3>
                <p>75</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-card">
                <h3><i class="fas fa-file-invoice-dollar me-2"></i>Factures</h3>
                <p>450</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-card">
                <h3><i class="fas fa-vial me-2"></i>Analyses</h3>
                <p>850</p>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="dashboard-card">
                <h3><i class="fas fa-chart-line me-2"></i>Statistiques des Patients</h3>
                <canvas id="patientsChart"></canvas>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dashboard-card">
                <h3><i class="fas fa-chart-pie me-2"></i>Répartition des Analyses</h3>
                <canvas id="analysesChart"></canvas>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="index.php" class="back-to-home"><i class="fas fa-home me-2"></i>Retour à l'accueil</a>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Toggle Sidebar
    const toggleSidebar = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');

    toggleSidebar.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
    });

    // Chart.js Initialization
    const patientsChart = new Chart(document.getElementById('patientsChart'), {
        type: 'line',
        data: {
            labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
            datasets: [{
                label: 'Patients',
                data: [120, 150, 180, 200, 190, 220],
                borderColor: '#007BFF',
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const analysesChart = new Chart(document.getElementById('analysesChart'), {
        type: 'pie',
        data: {
            labels: ['Sang', 'Urine', 'Microbiologie', 'Biopsie', 'Génétique'],
            datasets: [{
                label: 'Analyses',
                data: [300, 200, 150, 100, 50],
                backgroundColor: ['#007BFF', '#28a745', '#ffc107', '#dc3545', '#6610f2']
            }]
        },
        options: {
            responsive: true,
        }
    });
</script>
</body>
</html>
