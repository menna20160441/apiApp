<?php

namespace Database\Factories\Model;

use App\Model\Product;
use Faker\Generator as Facker;
use App\Model\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReviewFactory extends Factory
{
  
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'product_id' => function(){
                return Product::all()->random();
            },

            'customer' => $this->faker->name,

            'review' => $this->faker->text,
            
            'star' => $this->faker->numberBetween($min = 0, $max = 5) 
        ];
    }
}
