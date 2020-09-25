<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $year = rand(2009, 2016);
        $month = rand(1, 12);
        $day = rand(1, 28);

        $date = Carbon::create($year, $month, $day, 0, 0, 0);

        return [
            'title'         =>  $title,
            'url'           =>  Str::slug($title, '-'),
            'excerpt'       =>  $this->faker->text(200),
            'published_at'  =>  $date->addWeeks(rand(1, 52))->format('Y-m-d')
        ];
    }
}
