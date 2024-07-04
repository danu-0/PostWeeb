<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AnjayPOS | Login</title>
    <link rel="stylesheet" href="../../css/auth.css" />
  </head>
  <body class="login">
    <div class="login-container">
      <div class="login-anjay">
        <h1>ANJAYPOS</h1>
        <h1>ANJAYPOS</h1>
        <h1>ANJAYPOS</h1>
        <h1>ANJAYPOS</h1>
        <h1>ANJAYPOS</h1>
      </div>
      <div class="login-text">
        <h1>Login Dulu Bang</h1>
        <form action="../../database/auth/login.php" method="POST">
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="Masukan Email-nya Bang" />
          <label for="password">Password</label>
          <input type="password" name="password" placeholder="Masukan Password-nya Bang" />
          <br />
          <button type="submit" class="cbtn">Login</button>

          <div class="text-info">
            <p>
              Gak punya Akun? <span><a href="./register.php">Buatlah Bjirr</a></span>
            </p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
