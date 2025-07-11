<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nama tabel database
    protected $allowedFields = ['username', 'password']; // Kolom yang boleh diisi
    protected $useTimestamps = true; // Otomatis isi created_at dan updated_at
}
