<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Products extends BaseController
{
    public function index()
    {
        echo "<h1>Products Page</h1>";
        echo "<p>This is the products page.</p>";
    }
}