<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Land Management System - Login</title>
    <link rel="stylesheet" href="assests/css/style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Land Management System</h2>
            <form action="/login" method="POST">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="serial-number">Serial Number</label>
                    <input type="text" id="serial-number" name="serial-number" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <button type="submit" class="login-btn">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
