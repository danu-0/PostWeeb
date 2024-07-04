<?php
class Auth
{
    private $db;

    public function __construct($conn)
    {
        $this->db = $conn;
    }

    public function login($email, $password)
    {
        $query = "SELECT * FROM tbl_pengguna WHERE email = ? AND password = ?";
        $exec = $this->db->prepare($query);

        $exec->bind_param('ss', $email, $password);
        $exec->execute();

        $result = $exec->get_result();
        if ($result->num_rows == 1) {
            $akun = $result->fetch_assoc();

            session_start();
            $_SESSION['id_pengguna'] = $akun['id_pengguna'];
            $_SESSION['nama'] = $akun['nama'];
            $_SESSION['role'] = $akun['role'];

            return true;
        } else {
            $errors['login'] = 'Akun tidak ditemukan';
            return $errors;
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('Location:../../views/auth/index.php');
        exit;
    }
}
?>
