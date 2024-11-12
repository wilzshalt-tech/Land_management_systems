<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Sidebar Section -->
    <div class="sidebar">
        <h2 class="sidebar-title">Land Management System</h2>
        <ul>
            <li><a href="#" class="active">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="Landowner.php">Land Records</a></li>
            <li><a href="survey.php">Survey Data</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content Section -->
    <div class="main-content">
        <header>
            <div class="header">
                <h1>Welcome, Land Board Admin</h1>
                <div class="header-right">
                    <p><strong>Role:</strong> Admin</p>
                    <p><strong>Date:</strong> 2024-11-12</p>
                </div>
            </div>
        </header>

        <!-- Role-Specific Dashboard Widgets -->
        <div class="dashboard-widgets">
            <div class="widget">
                <h3>Land Board Admin</h3>
                <p>Manage all land records, approve survey data, and oversee land allocations.</p>
                <button>View Records</button>
            </div>

            <div class="widget">
                <h3>Land Surveyor</h3>
                <p>Conduct land surveys and submit data for verification.</p>
                <button>Submit Survey</button>
            </div>

            <div class="widget">
                <h3>LC1</h3>
                <p>Oversee community land issues and verify local ownership.</p>
                <button>Verify Land</button>
            </div>

            <div class="widget">
                <h3>Landowner</h3>
                <p>View land ownership records and apply for land-related services.</p>
                <button>View My Land</button>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>