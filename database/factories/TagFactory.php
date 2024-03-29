<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Craftworks\TaskManager\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->word()
    ];
});
