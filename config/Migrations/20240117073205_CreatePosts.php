<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePosts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('posts');
        $table
            ->addColumn('title', "string", [
                "imit" => 150,
                "null" => false
            ])
            ->addColumn("description", "text", [
                "imit" => 255
            ])
            ->addColumn("body", "test")
            ->addColumn("published", "boolean", [
                "default" => false
            ])
            ->addColumn("created", "datetime")
            ->addColumn("modified", "datetime")
            ->create();
    }
}