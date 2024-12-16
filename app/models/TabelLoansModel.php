<?php
// app/models/TabelLoansModel.php

// Mengimpor konfigurasi database
require_once '../config/database.php';

class Loans {
    private $db;

    // Konstruktor untuk menginisialisasi koneksi database
    public function __construct() {
        $this->db = (new Database())->connect(); // Menginisialisasi objek PDO melalui class Database
    }

    // Method untuk mendapatkan semua data dari tabel_loans
    public function getAllLoans() {
        $query = $this->db->query("SELECT * FROM tabel_loans"); // Menjalankan query SELECT
        return $query->fetchAll(PDO::FETCH_ASSOC); // Mengembalikan hasil sebagai array asosiatif
    }

    // Method untuk mencari satu data berdasarkan id_loans
    public function find($id_loans) {
        $query = $this->db->prepare("SELECT * FROM tabel_loans WHERE id_loans = :id_loans");
        $query->bindParam(':id_loans', $id_loans, PDO::PARAM_INT); // Mengikat parameter :id_loans
        $query->execute(); // Menjalankan query
        return $query->fetch(PDO::FETCH_ASSOC); // Mengembalikan data sebagai array asosiatif
    }

    // Method untuk menambahkan data baru ke tabel_loans
    public function add($id_loans, $id_buku, $id_user, $tgl_pinjam, $tgl_kembali) {
        $query = $this->db->prepare("INSERT INTO tabel_loans (id_loans, id_buku, id_user, tgl_pinjam, tgl_kembali) 
                                    VALUES (:id_loans, :id_buku, :id_user, :tgl_pinjam, :tgl_kembali)");
        // Mengikat parameter dengan nilai yang diberikan
        $query->bindParam(':id_loans', $id_loans);
        $query->bindParam(':id_buku', $id_buku);
        $query->bindParam(':id_user', $id_user);
        $query->bindParam(':tgl_pinjam', $tgl_pinjam);
        $query->bindParam(':tgl_kembali', $tgl_kembali);
        return $query->execute(); // Menjalankan query INSERT
    }

    // Method untuk memperbarui data berdasarkan id_loans
    public function update($id_loans, $data) {
        $query = "UPDATE tabel_loans 
                    SET id_buku = :id_buku, 
                        id_user = :id_user,
                        tgl_pinjam = :tgl_pinjam,
                        tgl_kembali = :tgl_kembali 
                    WHERE id_loans = :id_loans";

        $stmt = $this->db->prepare($query); // Menyiapkan query
        // Mengikat parameter dengan nilai dari array $data
        $stmt->bindParam(':id_buku', $data['id_buku']);
        $stmt->bindParam(':id_user', $data['id_user']);
        $stmt->bindParam(':tgl_pinjam', $data['tgl_pinjam']);
        $stmt->bindParam(':tgl_kembali', $data['tgl_kembali']);
        $stmt->bindParam(':id_loans', $id_loans);
        return $stmt->execute(); // Menjalankan query UPDATE
    }

    // Method untuk menghapus data berdasarkan id_loans
    public function delete($id_loans) {
        $query = "DELETE FROM tabel_loans WHERE id_loans = :id_loans";
        $stmt = $this->db->prepare($query); // Menyiapkan query DELETE
        $stmt->bindParam(':id_loans', $id_loans); // Mengikat parameter :id_loans
        return $stmt->execute(); // Menjalankan query DELETE
    }
}
