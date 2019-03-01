<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
      'title' => $this->faker->sentence,
            'overview' => $this->faker->paragraph,
            'badge' => $this->faker->numberBetween(1,9),
            'assigned_user_id' => factory('App\User')->create()->id
        
    ];
});
