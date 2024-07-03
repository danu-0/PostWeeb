<?php
// File : class/Auth.php

class Auth
{
    private $db;

    public function __construct($conn)
    {
        $this->db = $conn;
    }

    public function login($nim, $password)
    {
        // $errors = [];
        // if (!preg_match('/^\d{10}$/', $nim)) {
        //     $errors['nim'] = '<b>NIM</b> harus 10 angka';
        // }
        // if (strlen($password) < 6) {
        //     $errors['password'] = '<b>password</b> minimal 6 karakter';
        // }

        // if (!empty($errors)) {
        //     return $errors;
        // }

        $query = "SELECT * FROM mahasiswa WHERE mahasiswa_nim = ? AND mahasiswa_password = ?";
        $exec  = $this->db->prepare($query);

        $password = sha1($password);
        $exec->bind_param('ss', $nim, $password);
        $exec->execute();

        $result = $exec->get_result();
        if ($result->num_rows == 1) {
            $akun = $result->fetch_assoc();

            session_start();
            $_SESSION['mahasiswa_nim']    = $akun['mahasiswa_nim'];
            $_SESSION['mahasiswa_nama']   = $akun['mahasiswa_nama'];
            $_SESSION['mahasiswa_login']  = true;

            return true;
        } else {
            $errors['login'] = '<b>Akun tidak ditemukan/valid</b>';
            return $errors;
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        header('Location: /pem_web/view/template/login.php');
    }
}
