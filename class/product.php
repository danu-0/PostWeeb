<?php

// class/Mahasiswa.php

class Product
{
    private $db;
    private $table_name = "tbl_produk";

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

    public function create($nama, $image, $harga, $deskripsi, $kategori, $stok)
    {
        $files = [
            'image' => $image
        ];
        $dataimage = $this->uploadFiles($files, $nama);
        $path = htmlspecialchars(strip_tags($dataimage['image']));

        $query = "INSERT INTO tbl_produk (nama, harga, deskripsi, kategori, stok, image) VALUES (?,?,?,?,?,?)";
        $exec  = $this->db->prepare($query);

        $exec->bind_param('sissis', $nama, $harga, $deskripsi, $kategori, $stok, $path);
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

    public function update($id, $nama, $harga, $deskripsi, $kategori, $stok, $image)
    {
        $files = [
            'image' => $image
        ];
        if ($files['image']['name'] == '') {
            $query = "UPDATE tbl_produk SET nama = ?, harga = ?, deskripsi = ?, kategori=?, stok = ? WHERE id_produk = ?";
            $exec  = $this->db->prepare($query);

            $exec->bind_param('sissii', $nama, $harga, $deskripsi, $kategori, $stok, $id);
            return $exec->execute();
        }
        $dataimage = $this->uploadFiles($files, $nama);
        $path = htmlspecialchars(strip_tags($dataimage['image']));

        $query = "UPDATE tbl_produk SET nama = ?, harga = ?, deskripsi = ?, kategori=?, stok = ?, image = ? WHERE id_produk = ?";
        $exec  = $this->db->prepare($query);

        $exec->bind_param('sissisi', $nama, $harga, $deskripsi, $kategori, $stok, $path, $id);
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

    public function uploadFiles($files, $nama)
    {
        $target_dir = "../uploads/";
        // Create user-specific directory if it doesn't exist
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $responses = [];
        $datatosave = [];

        // Loop through each file and attempt to upload
        foreach ($files as $key => $file) {
            $target_file = $target_dir . $nama . "-" . $key . substr(basename($file["name"]), -4);
            $target_file_with_extension = str_replace("../", "", $target_file, $file_extension);
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                // $datatosave["name_" . $key] = basename($file["name"]);
                $datatosave[$key] = $target_file_with_extension;
                $responses[] = "The file " . basename($file["name"]) . " has been uploaded.";
            } else {
                $responses[] = "Sorry, there was an error uploading your file: " . basename($file["name"]);
            }
        }

        return $datatosave;
    }
}
