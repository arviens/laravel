<?php

use App\Models\User;

class UserSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAdmins();
    }

    private function createAdmins()
    {
        $query = User::query();

        if (!$query->where('username', 'admin')->first()) {
            $user = new User([
                'username' => 'admin',
                'password' => bcrypt('admin'),
            ]);
            $user->role = User::ROLE_ADMIN;
            $user->internal_name = 'Administrator';

            $user->saveOrFail();
        }
    }
}
