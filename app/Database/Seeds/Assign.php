<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Assign extends Seeder
{
    public function run()
    {
        $data = [
            'taskname' => 'Membuat fitur CRUD pada APP',
            'assignedto' => 'Wisnu Murti',
            'date'    => '2023-07-01',
            'comment'    => 'CRUD basic',
            'status'    => 'pending',
        ];

        // Simple Queries
        $this->db->table('assign')->insert($data);
    }
}
