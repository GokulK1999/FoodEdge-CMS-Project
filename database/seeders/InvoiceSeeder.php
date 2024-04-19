<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InvoiceModel;
use Faker\Factory as Faker;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            InvoiceModel::create([
                'id' => $faker->unique()->randomNumber(8),  // Unique invoice number
                'invoice_number' => $faker->unique()->randomNumber(8),  // Unique invoice number
                'total_amount' => $faker->randomFloat(2, 100, 1000),  // Random amount between $100 and $1000
                'created_at' => $faker->dateTimeThisYear(),
                'updated_at' => now(),
                'name' => $faker->name,
                'item' => $faker->word,
                'totalPaid' => $faker->randomFloat(2, 0, $this->calculateTotalPaid($faker->randomFloat(2, 100, 1000))),  // Random amount paid between 0 and total amount
                'description' => $faker->sentence,
                'status' => $faker->boolean, // Randomly mark invoice as paid (true) or unpaid (false)
            ]);
        }
    }
    private function calculateTotalPaid($totalAmount) {
        // Optional logic to adjust totalPaid based on your requirements (e.g., random percentage of total amount)
        return $totalAmount * (float) rand(0, 100) / 100;  // Random percentage between 0% and 100% of total amount
    }
}
