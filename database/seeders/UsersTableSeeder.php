<?php




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User; // Make sure to adjust the namespace if necessary

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert a single user using Query Builder
        DB::table('users')->insert([
            'name' => 'meo sample',
            'email' => 'meo@example.com',
            'password' => bcrypt('secret'),
        ]);

        // Insert multiple users using Eloquent model factory
        User::factory(10)->create();
    }
}
