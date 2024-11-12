<?php include 'includes/header.php';?>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Admin Registration Form</h2>
        <form action="Dashboard.php" method="POST">
            <div class="form-group">
                <label for="admin_id">Admin ID:</label>
                <input type="text" id="admin_id" name="admin_id" required>
            </div>
            <div class="form-group">
                <label for="full_name">Full Name:</label>
                <input type="text" id="full_name" name="full_name" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="tel" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="location_id">Location ID:</label>
                <input type="text" id="location_id" name="location_id" required>
            </div>
            <div class="form-group">
                <label for="gender_id">Gender:</label>
                <select id="gender_id" name="gender_id">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="serial_no">Serial Number:</label>
                <input type="text" id="serial_no" name="serial_no" required>
            </div>
            <div class="form-group">
                <label for="profile">Profile:</label>
                <textarea id="profile" name="profile" rows="4" cols="50" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </form>
    </div>
<?php include 'includes/footer.php';?>