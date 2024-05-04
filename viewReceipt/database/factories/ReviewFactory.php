<?php
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition()
    {
        return [
            'customer_name' => $this->faker->name,
            'service_rating' => $this->faker->numberBetween(1, 5),
            'review_text' => $this->faker->paragraph,
        ];
    }
}
