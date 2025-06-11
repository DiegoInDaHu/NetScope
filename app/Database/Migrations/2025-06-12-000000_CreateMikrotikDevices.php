<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMikrotikDevices extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'ddns_hostname' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'api_port' => [
                'type'       => 'INT',
                'constraint' => 5,
                'default'    => 8728,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'notes' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('mikrotik_devices');
    }

    public function down()
    {
        $this->forge->dropTable('mikrotik_devices');
    }
}
