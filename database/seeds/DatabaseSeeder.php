<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \Illuminate\Support\Facades\DB::table('users')->insert([
            [
                'first_name' => 'My',
                'last_name' => 'Name',
                'username' => 'test',
                'location' => 'vi-VN',
                'type' => \App\Models\User::TYPE_FREE,
                'gender' => \App\Models\User::MALE,
                'role' => \App\Models\User::ROLE_ADMIN,
                'email' => 'test@hocnhantuong.com',
                'password' => bcrypt('test'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ]);
        $this->command->info('[Seeded] User');
        \Illuminate\Support\Facades\DB::table('oauth_clients')->insert([
            [
                'user_id' => 1,
                'name' => 'Mobile',
                'secret' => 'uDBHmSKOv2mTgiXIk5bAP71GU1RBeeURwgF2Fkba',
                'password_client' => true,
                'personal_access_client' => true,
                'redirect' => url()->to('/'),
                'revoked' => false,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ]);
        $this->command->info('[Seeded] OAuth Client');

        \Illuminate\Support\Facades\DB::table('courses')->insert([
            [
                'name' => 'Nhân tướng học',
                'order' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Tâm lý học',
                'order' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Kỹ năng quan sát',
                'order' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Quản trị nhân sự',
                'order' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ]);
    }
}
