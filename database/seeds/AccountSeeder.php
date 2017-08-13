<?php

class AccountSeeder extends BaseSeeder
{
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            \App\Models\Account::query()->create([
                'username' => $this->fake()->userName . $i,
                'password' => $this->fake()->password,
                'points' => $this->fake()->numberBetween(-3, 157),
            ]);
        }
    }
}
