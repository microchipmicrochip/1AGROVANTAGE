<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table      = 'orders';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $allowedFields = ['user_id', 'status', 'total'];
}
