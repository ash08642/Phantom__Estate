<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Property::create([
            'title' => 'Fully Furnished Home',
            'street' => 'alendestarassw',
            'city' => 'Islamabad',
            'state' => 'punjab',
            'country' => 'Pakistan',
            'plz' => '54354',
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 100,
            'price' => 20000,
            'propertytype' => 'Home',
            'purchasetype' => 'Rent',
            'description' => 'great home to live in with beutiful furniture and modern things',
            'agentfirstname' => 'bob',
            'agentlastname' => 'the first',
            'agentemail' => 'bobfirst@mail.com',
        ]);

        \App\Models\Property::create([
            'title' => 'Fully Furnished Apartment',
            'street' => 'alendestarassw',
            'city' => 'Islamabad',
            'state' => 'punjab',
            'country' => 'Pakistan',
            'plz' => '54354',
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 100,
            'price' => 20000,
            'propertytype' => 'Apartment',
            'purchasetype' => 'Buy',
            'description' => 'great Apartment to live in with beutiful furniture and modern things',
            'agentfirstname' => 'jake',
            'agentlastname' => 'the second',
            'agentemail' => 'jakesecond@mail.com',
        ]);
    }
}
