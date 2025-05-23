<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table      = 'cart';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $allowedFields = ['user_id', 'product_id', 'quantity'];
}
