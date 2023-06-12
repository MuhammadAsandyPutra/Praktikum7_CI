<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = new UserModel();
        $model->insert([
            "username" => "user1",
            "email" => "user1@gmail.com",
            "password" => password_hash("12345",PASSWORD_DEFAULT)
        ]);
    }
}
