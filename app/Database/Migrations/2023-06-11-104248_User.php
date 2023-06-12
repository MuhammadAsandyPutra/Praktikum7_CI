<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $fields = [
            "id" =>[
                "type" => "INT",
                "constraint" => 5,
                "auto_increment" => true
            ],
            "username" => [
                "type" => "VARCHAR",
                "constraint" => 100
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 100
            ],
            "password" => [
                "type" => "TEXT",
            ]
        ];

        $this->forge->addField($fields);
        $this->forge->addKey("id", true);
        $this->forge->createTable("users");
    }

    public function down()
    {
        $this->forge->dropTable("users");
    }
}
