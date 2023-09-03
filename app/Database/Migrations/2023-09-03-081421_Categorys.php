<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Categorys extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'created_at' => [
                'type'      => 'TIMESTAMP',
                'default'   => new RawSql('CURRENT_TIMESTAMP')
            ],
            'updated_at' => [
                'type'      => 'TIMESTAMP',
                'default'   => new RawSql('CURRENT_TIMESTAMP')
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('categorys');
    }

    public function down()
    {
        $this->forge->dropTable('categorys');
    }
}
