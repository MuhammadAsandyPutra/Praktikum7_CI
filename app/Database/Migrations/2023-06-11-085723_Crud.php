<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Crud extends Migration
{
    public function up()
    {
        $fields = [
            "id"=>[
                "type"=>"BIGINT",
                "constraint"=>5,
                "auto_increment"=>true,
            ],
            "judul"=>[
                "type"=>"VARCHAR",
                "constraint"=>100
            ],
            "penulis"=>[
                "type"=>"VARCHAR",
                "constraint"=>100
            ],
            "penerbit"=>[
                "type"=>"VARCHAR",
                "constraint"=>100
            ],
            "tahun_terbit"=>[
                "type"=>"YEAR",
                
            ]
        ];

        $this->forge->addField($fields);
        $this->forge->addKey("id", true);
        $this->forge->createTable("daftar");
    }

    public function down()
    {
        $this->forge->dropTable("daftar",true);
    }
}
