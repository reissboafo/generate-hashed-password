<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Hash Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
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
        .copy-btn {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 40px;
        }
        .copy-btn:hover {
            background-color: #218838;
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
            <strong>Original Password:</strong><br>
            <span><?php echo htmlspecialchars($_POST['password']); ?></span>
            <hr style="margin: 10px 0; border-top: 1px solid #ccc;">
            <strong>Hashed Password:</strong><br>
            <span id="hashValue"><?php echo htmlspecialchars($hashedPassword); ?></span>
            <button onclick="copyHash()" class="copy-btn">Copy</button>
        </div>
        <?php endif; ?>
    </div>

    <script>
    function copyHash() {
        const hashValue = document.getElementById('hashValue');
        const textArea = document.createElement('textarea');
        textArea.value = hashValue.textContent;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
        
        // Optional: Visual feedback
        const copyBtn = document.querySelector('.copy-btn');
        const originalText = copyBtn.textContent;
        copyBtn.textContent = 'Copied!';
        setTimeout(() => {
            copyBtn.textContent = originalText;
        }, 2000);
    }
    </script>
</body>
</html>