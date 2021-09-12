<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Image;
use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {

        $user = \App\Models\User::factory()->create();
        $image = Image::factory()->create();
        return [
            'nome' => $this->faker->name,
            'descrizione' => $this->faker->text('70'),
            'citta' => $this->faker->city,
            'indirizzo' =>$this->faker->address,
            'data_ora_inizio' =>'2020-12-15 08:00:00',
            'data_ora_fine' =>'2020-12-20 23:00:00',
            'tipologia' => 'Concerto',
            'policy' => 'nessuna policy',
            'max_iscritti' => $this->faker->numberBetween('10','500'),
            'tipologia_iscrizione' =>'0',
            'prezzo' =>$this->faker->numberBetween('1','1000'),
            'stato' => '0',
            'id_organizzatore' => $user->id,
            'id_copertina' => $image->id
        ];
    }
}
