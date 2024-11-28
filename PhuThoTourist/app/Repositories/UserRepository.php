<?php 
// app/Repositories/UserRepository.php
namespace App\Repositories;
namespace App\Models;

class UserRepository {
    public function getAllUsers() {
        return User::all();
    }
}

