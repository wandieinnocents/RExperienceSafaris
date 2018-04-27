<?php

$factory->define(App\Models\Accomodation::class, function (Faker\Generator $faker) {
    return [

        'title'    => ucfirst($faker->unique()->sentence()),
        'description'  => $faker->text(800),
        'image'     => 'uploads/Buganda-cultural-dance.jpg',
    ];
});
