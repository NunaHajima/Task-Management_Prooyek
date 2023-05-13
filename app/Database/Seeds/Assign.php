<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Assign extends Seeder
{
    public function run()
    {
        $data = [
            'taskname' => 'Membuat fitur CRUD pada APP',
            'assignedemployees' => 'Rahman',
            'date'    => '2023-07-01',
            'comments'    => 'CRUD basic',
        ];

        // Simple Queries
        $this->db->table('assign')->insert($data);
    }
}
