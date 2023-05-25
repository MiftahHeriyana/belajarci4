<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'skincare',
            'category'    => 'utlities',
            'price'    => 20000,
            'stock'    => 500,
        ];

        // Simple Queries
        $this->db->table('products')->insert($data);
        
        $data = [
            'name' => 'bodylation',
            'category'    => 'utlities',
            'price'    => 30000,
            'stock'    => 500,
    ];
        // Using Query Builder
        $this->db->table('products')->insert($data);
}
}
