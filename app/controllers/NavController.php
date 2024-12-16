<?php
// app/controllers/TabelLoansController.php

class NavController {
    // Konstruktor untuk menginisialisasi instance dari model Loans
    public function nav() {
        require_once '../app/views/nav/navbar.php';
    }

    public function footer() {
        require_once '../app/views/nav/footer.php';
    }
}