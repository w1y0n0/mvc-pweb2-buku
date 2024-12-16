<?php
// app/models/UserModel.php
require_once '../config/database.php';

class User
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function getAllUsers()
    {
        $query = $this->db->query("SELECT * FROM tabel_user");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    //function find mengambil id 
    public function find($id_user)
    {
        $query = $this->db->prepare("SELECT * FROM tabel_user WHERE id_user = :id_user");
        $query->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }


    public function add($nama, $email, $password, $no_anggota)
    {
        $query = $this->db->prepare("INSERT INTO tabel_user (nama, email, password, no_anggota) VALUES (:nama, :email, :password, :no_anggota)");
        $query->bindParam(':nama', $nama);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        $query->bindParam(':no_anggota', $no_anggota);
        return $query->execute();
    }

    // Update user data by Id_user
    public function update($id_user, $data)
    {
        $query = "UPDATE tabel_user SET nama = :nama, email = :email, password = :password, no_anggota = :no_anggota WHERE id_user = :id_user";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama', $data['nama']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':password', $data['password']);
        $stmt->bindParam(':no_anggota', $data['no_anggota']);
        $stmt->bindParam(':id_user', $id_user);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id_user)
    {
        $query = "DELETE FROM tabel_user WHERE id_user = :id_user";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_user', $id_user);
        return $stmt->execute();
    }
    public function getUserById($id_user) {
        $stmt = $this->db->prepare("SELECT * FROM tabel_user WHERE id_user = :id_user");
        $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
