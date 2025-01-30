
<?php
/*
*Artisan migration command=>
php artisan make:migration create_tablename_table
then
database->migrations->tablename page->add table field name
then
php artisan migrate

*Migration structure=>
 public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });
    }

*Laravel migration rollback=>php artisan migrate:rollback

*Database Seeding=>
php artisan make:seeder UserSeeder
<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
   /* public function run(): void
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}

*/