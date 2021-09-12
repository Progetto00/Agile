<?php

namespace Database\Factories;

use App\Models\Artist;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image = Image::factory()->create();
        return [
            'nome' => $this->faker->firstName(),
            'cognome' => $this->faker->lastName(),
            'nome_arte' => $this->faker->userName(),
            'data_di_nascita' => now(),
            'luogo_di_nascita' => $this->faker->city(),
            'biografia' => 'grande artista',
            'id_copertina' => $image->id
        ];
    }
}
