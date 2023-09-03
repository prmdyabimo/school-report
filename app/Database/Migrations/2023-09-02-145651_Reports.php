<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Reports extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'auto_increment' => true
            ],
            'id_user' => [
                'type' => 'BIGINT'
            ],
            'location' => [
                'type' => 'TEXT'
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'topic' => [
                'type' => 'TEXT',
                'constraint' => 255
            ],
            'detail' => [
                'type' => 'TEXT'
            ],
            'image' => [
                'type' => 'TEXT'
            ],
            'response' => [
                'type' => 'TEXT'
            ],
            'status' => [
                'type' => 'TEXT',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('reports');

    }

    public function down()
    {
        $this->forge->dropTable('reports');
    }
}
