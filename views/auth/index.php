<?php
session_start();
if (isset($_SESSION['id_pengguna'])) {
    header('Location: /post/PostWeeb/views/dashboard/index.php');
    exit;
}

include '../../database/koneksi.php'; // Adjust path as needed
include '../../database/auth/Auth.php'; // Adjust path as needed

$error_message = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $conn = $db->getConnection();
    $auth = new Auth($conn);

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $auth->login($email, $password);
    if ($result === true) {
        header('Location: /post/PostWeeb/views/dashboard/index.php');
        exit;
    } else {
        $error_message = $result;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="../../css/autentification.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2>Login</h2>
            <p>Silahkan login dengan akun anda</p>
            <form action="" method="POST">
                <?php if (!empty($error_message) && isset($error_message['login'])): ?>
                    <div class="alert alert-danger">
                        <?php echo $error_message['login']; ?>
                    </div>
                <?php endif; ?>
                <input type="email" id="email" name="email" placeholder="email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Ingat Saya?</label>
                </div>
                <button type="submit">Login</button>
            </form>
            <p>Belum punya akun? <a href="./register.php">Daftar</a></p>
        </div>
        <div class="info-box">
            <div class="image-box">
                <div class="box-content">
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
                    <div class="slide-left">
                        <h1>ANJAY POST ANJAY POST ANJAY POST ANJAY POS</h1>
                        <h1>ANJAY POST ANJAY POST ANJAY POST ANJAY POS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
