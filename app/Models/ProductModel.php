<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $allowedFields = ['name', 'description', 'price'];
    protected $useTimestamps = true;
}
