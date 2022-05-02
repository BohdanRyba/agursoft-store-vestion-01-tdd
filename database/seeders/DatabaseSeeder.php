<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Concert;
use App\Models\Slider;
use App\Models\User;
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
        $this->call([
            BaseUserSeeder::class,
        ]);
        Concert::factory(100)->create();
        User::factory(10)->create();
        $user = User::whereEmail('user@user.com')->first();
//        Slider::factory(5)->belongsToUser($user->id)->create();
    }
}
