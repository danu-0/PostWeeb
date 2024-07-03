<?php

// class/Mahasiswa.php

class Product
{
    private $db;

    // Konstruktor yang benar
    public function __construct($conn)
    {
        $this->db = $conn;
    }

    public function getAll($category = null)
    {
        $query  = "SELECT * FROM tbl_produk";
        if ($category) {
            $query .= " WHERE kategori = ?";
        }
        $stmt = $this->db->prepare($query);
        if ($category) {
            $stmt->bind_param("s", $category);
        }
        $stmt->execute();
        $result = $stmt->get_result();

        $products = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        }

        return $products;
    }

    public function create($nama, $harga, $deskripsi, $stok)
    {
        $query = "INSERT INTO tbl_produk (nama, harga, deskripsi, stok) VALUES (?,?,?,?)";
        $exec  = $this->db->prepare($query);

        $exec->bind_param('siss', $nama, $harga, $deskripsi, $stok);
        $result = $exec->execute();

        session_start();
        if ($result) {
            $_SESSION['pesan'] = 'Data berhasil disimpan';
        } else {
            $_SESSION['pesan'] = 'Data gagal disimpan';
        }

        return $result;
    }

    public function getDetail($id)
    {
        $query = "SELECT * FROM tbl_produk WHERE id_produk = ?";
        $exec  = $this->db->prepare($query);

        $exec->bind_param('i', $id);
        $exec->execute();

        $result = $exec->get_result();
        return $result->fetch_assoc();
    }

    public function update($id, $nama, $harga, $deskripsi, $kategori, $stok)
    {
        $query = "UPDATE tbl_produk SET nama = ?, harga = ?, deskripsi = ?, kategori=?, stok = ? WHERE id_produk = ?";
        $exec  = $this->db->prepare($query);

        $exec->bind_param('sissii', $nama, $harga, $deskripsi, $kategori, $stok, $id);
        return $exec->execute();
    }

    public function delete($id)
    {
        $query  = "DELETE FROM tbl_produk WHERE id_produk = ?";
        $exec   = $this->db->prepare($query);

        $exec->bind_param('i', $id);
        $result = $exec->execute();

        session_start();
        if ($result) {
            $_SESSION['pesan'] = 'Data berhasil dihapus';
        } else {
            $_SESSION['pesan'] = 'Data gagal dihapus';
        }

        return $result;
    }
}
