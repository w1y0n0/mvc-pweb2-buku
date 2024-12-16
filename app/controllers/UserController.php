<?php
// app/controllers/UserController.php
require_once '../app/models/UserModel.php';

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    //metod index untuk menampilkan userModel yang memiliki metod getAllUser supaya tampil file index yang ada di folder view
    public function index()
    {
        $users = $this->userModel->getAllUsers(); 
        require_once '../app/views/user/index.php';
    }

    public function create()
    {
        require_once '../app/views/user/create.php';
    }

    //mengambil data dari function add nampilin index
    public function store()
    {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $no_anggota = $_POST['no_anggota'];
        $this->userModel->add($nama, $email, $password, $no_anggota);
        header('Location: /user/index');
    }
    // Show the edit form with the user data
  // UserController.php

public function edit($id_user) {
    $user = $this->userModel->getUserById($id_user); // Mengambil data pengguna berdasarkan ID
    require_once __DIR__ . '/../views/user/edit.php';
}


    // Process the update request
    public function update($id_user, $data)
    {
        $updated = $this->userModel->update($id_user, $data);
        if ($updated) {
            header("Location: /user/index"); // Redirect to user list
        } else {
            echo "Failed to update user.";
        }
    }

    // Process delete request
    public function delete($id_user)
    {
        $deleted = $this->userModel->delete($id_user);
        if ($deleted) {
            header("Location: /user/index"); // Redirect to user list
        } else {
            echo "Failed to delete user.";
        }
    }
    public function detail($id_user) {
        $user = $this->userModel->getUserById($id_user);
        require_once '../app/views/user/detail.php'; // View untuk detail pengguna
    }
}
