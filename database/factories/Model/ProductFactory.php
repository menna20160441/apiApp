<?php

namespace Database\Factories\Model;
use Faker\Provider\Base;
use App\Model\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition( )
    {
        
        return [

            'name' => $this->faker->word,

            'detail' => $this->faker->text,

            'price' => $this->faker->numberBetween($min = 100, $max = 1000) ,

            'stock' => $this->faker->randomDigit,

            'discount' => $this->faker->numberBetween($min = 2, $max = 30) 
        ];
    }
}
