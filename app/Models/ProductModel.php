<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'description', 'price', 'image'];  //  For now, let's keep it without 'category_id' to simplify
}