<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBlog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => ['type' => 'INT', 'auto_increment' => true],
            'judul'        => ['type' => 'VARCHAR', 'constraint' => 255],
            'gambar'       => ['type' => 'VARCHAR', 'constraint' => 255],
            'isi_artikel'  => ['type' => 'TEXT'],
            'created_at'   => ['type' => 'DATETIME', 'null' => true],
            'updated_at'   => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true); // primary key
        $this->forge->createTable('blog');
    }

    public function down()
    {
        $this->forge->dropTable('blog');
    }
}
