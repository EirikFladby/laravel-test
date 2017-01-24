<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Faker extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'faker';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $faker = Faker\Factory::create();
        // $this->info($faker->name);
        echo 'Could not get Faker\Factory library. The intended code is in Faker.php.' . PHP_EOL;
    }
}
