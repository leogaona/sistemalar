<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTable([
            "users",
            "entradas",
            "comentarios"
        ]);
        // $this->call(UserSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EntradasTableSeeder::class);
    }
    public function truncateTable(array $tables){
        foreach($tables as $table){
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            DB::table($table)->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
    }
}
