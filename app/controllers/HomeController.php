<?php
// app/controllers/TabelLoansController.php

class HomeController {
    // Method index untuk mendapatkan semua data pinjaman dan memuat view "index"
    public function home() {
        require_once '../app/views/home.php';
    }
}