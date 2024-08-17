<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTabelaArtigo extends Migration {
    public function up() {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'null' => false,
                'auto_increment' => true
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => false
            ],
            'conteudo' => [
                'type' => 'TEXT',
                'null' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('artigo');
    }

    public function down() {
        $this->forge->dropTable('artigo');
    }
}