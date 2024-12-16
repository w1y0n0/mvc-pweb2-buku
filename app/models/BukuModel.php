<?php
// app/models/User.php
require_once '../config/database.php';

class Buku {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllBuku() {
        $query = $this->db->query("SELECT * FROM tabel_buku");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_buku) {
        $query = $this->db->prepare("SELECT * FROM tabel_buku WHERE id_buku = :id_buku");
        $query->bindParam(':id_buku', $id_buku, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($id_buku, $judul_buku, $pengarang, $tahun) {
        $query = $this->db->prepare("INSERT INTO tabel_buku (id_buku, judul_buku, pengarang, tahun) VALUES (:id_buku, :judul_buku, :pengarang, :tahun)");
        $query->bindParam(':id_buku', $id_buku);
        $query->bindParam(':judul_buku', $judul_buku);
        $query->bindParam(':pengarang', $pengarang);
        $query->bindParam(':tahun', $tahun);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id_buku, $data) {
        $query = "UPDATE tabel_buku SET judul_buku = :judul_buku, pengarang = :pengarang, tahun = :tahun WHERE id_buku = :id_buku";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_buku', $id_buku);
        $stmt->bindParam(':judul_buku', $data['judul_buku']);
        $stmt->bindParam(':pengarang', $data['pengarang']);
        $stmt->bindParam(':tahun', $data['tahun']);
        return $stmt->execute();
    }
    

    // Delete user by ID
    public function delete($id_buku) {
        $query = "DELETE FROM tabel_buku WHERE id_buku = :id_buku";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_buku', $id_buku);
        return $stmt->execute();
    }
    public function getBukuById($id_buku)
    {
        $stmt = $this->db->prepare("SELECT * FROM tabel_buku WHERE id_buku = :id_buku");
        $stmt->bindParam(':id_buku', $id_buku);
        $stmt->execute();
    
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}
