<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PetitionLinks;
use Faker\Generator as Faker;

$factory->define(PetitionLinks::class, function (Faker $faker) {
    return [
        'title' => 'Lorem Ipsum Petition',
        'description' => $faker->paragraph,
        'link' => $faker->url,
        'outcome' => $faker->paragraph,
        'image_url' => 'https://say-their-names.fra1.cdn.digitaloceanspaces.com/petition.png',
        'status' => 1
    ];
});
