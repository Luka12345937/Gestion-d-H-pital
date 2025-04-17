<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Hôpital Moderne</title>
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

        .sidebar {
            background-color: #007BFF;
            color: white;
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
            transition: width 0.3s;
        }

        .sidebar.collapsed {
            width: 80px;
        }

        .sidebar .nav-link {
            color: white;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            transition: background-color 0.3s;
        }

        .sidebar .nav-link:hover {
            background-color: #0056b3;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        .sidebar.collapsed + .main-content {
            margin-left: 80px;
        }

        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .stats-card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }

        .stats-card i {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .stats-card h3 {
            font-size: 2rem;
            margin: 0;
        }

        .stats-card p {
            margin: 0;
            color: #666;
        }

        .chart-container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .toggle-sidebar {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: #007BFF;
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
    </style>
</head>
<body>

<!-- Toggle Sidebar Button -->
<button class="toggle-sidebar" id="toggleSidebar">
    <i class="fas fa-bars"></i>
</button>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="text-center py-4">
        <img src="assets/img/logo.png" alt="Logo" width="50" height="50">
        <h5 class="mt-2">Hôpital Moderne</h5>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="patients.php">
                <i class="fas fa-users"></i>
                <span>Patients</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="medecins.php">
                <i class="fas fa-user-md"></i>
                <span>Médecins</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="rendez_vous.php">
                <i class="fas fa-calendar-alt"></i>
                <span>Rendez-vous</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">
                <i class="fas fa-sign-out-alt"></i>
                <span>Déconnexion</span>
            </a>
        </li>
    </ul>
</div>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <h1 class="mb-4">Dashboard</h1>

        <!-- Statistics Row -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="stats-card bg-primary text-white">
                    <i class="fas fa-users"></i>
                    <h3>150</h3>
                    <p>Patients</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card bg-success text-white">
                    <i class="fas fa-user-md"></i>
                    <h3>25</h3>
                    <p>Médecins</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card bg-warning text-dark">
                    <i class="fas fa-calendar-alt"></i>
                    <h3>45</h3>
                    <p>Rendez-vous</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card bg-danger text-white">
                    <i class="fas fa-bed"></i>
                    <h3>10</h3>
                    <p>Lits disponibles</p>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="row">
            <div class="col-md-6">
                <div class="chart-container">
                    <h5>Rendez-vous par mois</h5>
                    <canvas id="appointmentsChart"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="chart-container">
                    <h5>Patients par service</h5>
                    <canvas id="patientsByServiceChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Toggle Sidebar
    const toggleSidebar = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');

    toggleSidebar.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
    });

    // Chart.js Initialization
    const appointmentsChart = new Chart(document.getElementById('appointmentsChart'), {
        type: 'bar',
        data: {
            labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
            datasets: [{
                label: 'Rendez-vous',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: '#007BFF',
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

    const patientsByServiceChart = new Chart(document.getElementById('patientsByServiceChart'), {
        type: 'pie',
        data: {
            labels: ['Cardiologie', 'Pédiatrie', 'Orthopédie', 'Neurologie'],
            datasets: [{
                label: 'Patients',
                data: [30, 25, 20, 15],
                backgroundColor: ['#007BFF', '#28a745', '#ffc107', '#dc3545'],
            }]
        },
        options: {
            responsive: true,
        }
    });
</script>
</body>
</html>
