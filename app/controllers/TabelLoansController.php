<?php
// app/controllers/TabelLoansController.php

// Mengimpor file dari folder models yaitu TabelLoansModel untuk digunakan dalam controller
require_once '../app/models/TabelLoansModel.php';
require_once '../app/models/BukuModel.php';
require_once '../app/models/UserModel.php';

class LoansController {
    private $TabelLoansModel;
    private $BukuModel;
    private $UserModel;

    // Konstruktor untuk menginisialisasi instance dari model Loans
    public function __construct() {
        $this->TabelLoansModel = new Loans();
        $this->BukuModel = new Buku();
        $this->UserModel = new User();
    }

    // Method index untuk mendapatkan semua data pinjaman dan memuat view "index"
    public function index() {
        $TabelLoansController = $this->TabelLoansModel->getAllLoans();
        require_once '../app/views/loans/index.php';
    }

    // Method untuk memuat view formulir "create"
    public function create() {
        $BukuController = $this->BukuModel->getAllBuku();
        $UserController = $this->UserModel->getAllUsers();
        require_once '../app/views/loans/create.php';
    }

    // Method untuk menyimpan data pinjaman baru
    public function store() {
        // Mengambil data dari form POST
        $id_loans = $_POST['id_loans'];
        $id_buku = $_POST['id_buku'];
        $id_user = $_POST['id_user'];
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        
        // Menambahkan data ke database melalui model
        $this->TabelLoansModel->add($id_loans, $id_buku, $id_user, $tgl_pinjam, $tgl_kembali);
        
        // Redirect ke halaman index setelah berhasil menambah data
        header('Location: /loans/index');
    }

    // Method untuk menampilkan formulir edit dengan data spesifik berdasarkan ID
    public function edit($id) {
        $loans = $this->TabelLoansModel->find($id); // Mengambil data pengguna berdasarkan ID
        require_once __DIR__ . '/../views/loans/edit.php';
    }

    // Method untuk memproses permintaan update data
    public function update($id, $data) {
        $updated = $this->TabelLoansModel->update($id, $data); // Memperbarui data melalui model
        if ($updated) {
            header("Location: /loans/index"); // Redirect ke halaman index jika berhasil
        } else {
            echo "Failed to update loans."; // Menampilkan pesan error jika gagal
        }
    }

    // Method untuk memproses penghapusan data
    public function delete($id) {
        $deleted = $this->TabelLoansModel->delete($id); // Menghapus data melalui model
        if ($deleted) {
            header("Location: /loans/index"); // Redirect ke halaman index jika berhasil
        } else {
            echo "Failed to delete loans."; // Menampilkan pesan error jika gagal
        }
    }
}
