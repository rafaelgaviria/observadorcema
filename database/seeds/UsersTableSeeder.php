<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        // Eloquent::unguard();
    
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // $this->call('UsersTableSeeder');
        
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        factory(App\User::class, 20)->create();
        
        App\User::create([
            'name' => 'Rafael Gaviria',
            'email' => 'rafaelgaviria@gmail.com',
            'password' => bcrypt('123')
            ]);
        }
    }
