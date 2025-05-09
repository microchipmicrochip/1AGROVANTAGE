<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Plants'],
            ['name' => 'Farming Materials'],
            ['name' => 'Tools'],
            ['name' => 'Seeds'],
        ];

        $this->db->table('categories')->insertBatch($data);
    }
}
