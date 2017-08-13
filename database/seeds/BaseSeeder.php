<?php

use Faker\Generator;

class BaseSeeder extends \Illuminate\Database\Seeder
{
    /**
     * @var Generator
     */
    private $faker;

    public function __construct()
    {
        $this->faker = \Faker\Factory::create();
    }

    public function fake(): Generator
    {
        return $this->faker;
    }
}