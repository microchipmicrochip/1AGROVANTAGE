<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Tomato Plant',
                'category_id' => 1,
                'description' => 'Fresh tomato plant for your garden.',
                'price' => 5.99,
                'image' => null,
            ],
            [
                'name' => 'Fertilizer Bag',
                'category_id' => 2,
                'description' => 'High-quality fertilizer for healthy crops.',
                'price' => 15.50,
                'image' => null,
            ],
            [
                'name' => 'Garden Shovel',
                'category_id' => 3,
                'description' => 'Durable shovel for all your gardening needs.',
                'price' => 12.00,
                'image' => null,
            ],
            [
                'name' => 'Corn Seeds',
                'category_id' => 4,
                'description' => 'Pack of corn seeds for planting.',
                'price' => 3.75,
                'image' => null,
            ],
        ];

        $this->db->table('products')->insertBatch($data);
    }
}
