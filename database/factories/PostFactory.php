<?php

use Faker\Generator as Faker;

$factory->define(Blog\Post::class, function (Faker $faker) {
    return [
    	'user_id' => function() {
    		return factory(Blog\User::class)->create()->id;
    	},
        'title' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});
