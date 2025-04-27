<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Hash Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }
        .form-container {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 4px;
            word-break: break-all;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Password Hash Generator</h2>
        <?php
        $hashedPassword = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
            $password = trim($_POST['password']);
            if (!empty($password)) {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            }
        }
        ?>
        <form method="POST">
            <div class="form-group">
                <label for="password">Enter Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Generate Hash</button>
        </form>
        
        <?php if ($hashedPassword): ?>
        <div class="result">
            <strong>Hashed Password:</strong><br>
            <?php echo htmlspecialchars($hashedPassword); ?>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>