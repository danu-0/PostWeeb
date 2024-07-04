<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <link rel="stylesheet" href="../../css/autentification.css">
</head>
<body>
    <div class="login-container">
    <div class="info-box">
            <div class="image-box">
                <div class="box-content">
                <div class="slide-right">
                        <h1>ANJAY POST ANJAY POST ANJAY POST ANJAY POS</h1>
                        <h1>ANJAY POST ANJAY POST ANJAY POST ANJAY POS</h1>
                        
                </div>
                <div class="slide-left">
                        <h1>ANJAY POST ANJAY POST ANJAY POST ANJAY POS</h1>
                        <h1>ANJAY POST ANJAY POST ANJAY POST ANJAY POS</h1>
                       
                </div>
                <div class="slide-right">
                        <h1>ANJAY POST ANJAY POST ANJAY POST ANJAY POS</h1>
                        <h1>ANJAY POST ANJAY POST ANJAY POST ANJAY POS</h1>
                      
                </div>
                <div class="slide-left">
                        <h1>ANJAY POST ANJAY POST ANJAY POST ANJAY POS</h1>
                        <h1>ANJAY POST ANJAY POST ANJAY POST ANJAY POS</h1>
                       
                </div>
                <div class="slide-right">
                        <h1>ANJAY POST ANJAY POST ANJAY POST ANJAY POS</h1>
                        <h1>ANJAY POST ANJAY POST ANJAY POST ANJAY POS</h1>
                      
                </div>
                </div>
            </div>
        </div>
        <div class="login-form">
            <h2>Register</h2>
            <p>Silahkan daftarkan akun anda</p>
            <form action="../../database/auth/register.php" method="POST">
                <input type="text" id="nama" name="nama" placeholder="nama" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <button type="submit" >Daftar</button>
            </form>
            <p>Sudah punya akun? <a href="./index.php">Login</a></p>
        </div>
    </div>
</body>

</html>
