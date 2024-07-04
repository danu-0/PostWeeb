<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AnjayPOS | Register</title>
    <link rel="stylesheet" href="../../css/auth.css" />
  </head>
  <body class="register">
    <div class="register-container">
      <div class="register-text">
        <h1>Register Dulu Bang</h1>
        <form action="../../database/auth/register.php" method="POST">
          <label for="">Username</label>
          <input type="text" name="nama" placeholder="Masukan Username-nya Bang" />
          <label for="">Email</label>
          <input type="email" name="email" placeholder="Masukan Email-nya Bang" />
          <label for="">Password</label>
          <input type="password" name="password" placeholder="Masukan Password-nya Bang" />
          <br />
          <button type="submit" class="cbtn">Register</button>

          <div class="text-info">
            <p>
              Udah punya Akun?
              <span><a href="./login.php">Tinggal Login Bjirr</a></span>
            </p>
          </div>
        </form>
      </div>
      <div class="register-anjay">
        <h1>ANJAYPOS</h1>
        <h1>ANJAYPOS</h1>
        <h1>ANJAYPOS</h1>
        <h1>ANJAYPOS</h1>
        <h1>ANJAYPOS</h1>
      </div>
    </div>
  </body>
</html>
