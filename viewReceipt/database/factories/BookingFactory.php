<?php
namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'bookingID' => 'BK' . $this->faker->unique()->randomNumber(5),
            'customer_name' => $this->faker->name,
            'date' => $this->faker->dateTimeBetween('+1 week', '+1 month')->format('Y-m-d'),
            'price' => $this->faker->randomFloat(2, 50, 200),
            // Define other fields as needed
        ];
    }
}
