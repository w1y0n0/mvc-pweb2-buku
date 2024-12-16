<?php
// routes.php

require_once 'app/controllers/UserController.php';
require_once 'app/controllers/BukuController.php';
require_once 'app/controllers/TabelLoansController.php';
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/NavController.php';

// Inisialisasi objek controller
$userController = new UserController();
$bukuController = new BukuController();
$loansController = new LoansController();
$homeController = new HomeController();
$navController = new NavController();

$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Routing untuk UserController
if ($url == '/home' || $url == '/') {
    $homeController->home();
}elseif ($url == '/user/index' || $url == '/user') {
        $userController->index();
} elseif ($url == '/user/create' && $requestMethod == 'GET') {
    $userController->create();
} elseif ($url == '/user/store' && $requestMethod == 'POST') {
    $userController->store();
} elseif (preg_match('/\/user\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $userController->edit($userId);
} elseif (preg_match('/\/user\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $userController->update($userId, $_POST);
} elseif (preg_match('/\/user\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $userController->delete($userId);
} 

// Routing untuk BukuController
elseif ($url == '/buku/index' || $url == '/buku') {
    $bukuController->index();
} elseif ($url == '/buku/create' && $requestMethod == 'GET') {
    $bukuController->create();
} elseif ($url == '/buku/store' && $requestMethod == 'POST') {
    $bukuController->store();
} elseif (preg_match('/\/buku\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $bukuId = $matches[1];
    $bukuController->edit($bukuId);
} elseif (preg_match('/\/buku\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $bukuId = $matches[1];
    $bukuController->update($bukuId, $_POST);
} elseif (preg_match('/^\/buku\/detail\/(\d+)$/', $url, $matches) && $requestMethod == 'GET') {
    $id_buku = $matches[1]; 
    $bukuController->detail($id_buku);
} elseif (preg_match('/\/buku\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $bukuId = $matches[1];
    $bukuController->delete($bukuId);
} 

// Routing untuk TabelLoansController
elseif ($url == '/loans/index' || $url == '/loans') {
    $loansController->index();
} elseif ($url == '/loans/create' && $requestMethod == 'GET') {
    $loansController->create();
} elseif ($url == '/loans/store' && $requestMethod == 'POST') {
    $loansController->store();
} elseif (preg_match('/\/loans\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $loanId = $matches[1];
    $loansController->edit($loanId);
} elseif (preg_match('/\/loans\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $loanId = $matches[1];
    $loansController->update($loanId, $_POST);
} elseif (preg_match('/\/user\/detail\/(\d+)/', $url, $matches)) {
    $id_user = $matches[1];
    $userController->detail($id_user);
} elseif (preg_match('/\/loans\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $loanId = $matches[1];
    $loansController->delete($loanId);
} 

// Jika tidak ada route yang cocok
else {
    http_response_code(404);
    echo "404 Not Found";
}
