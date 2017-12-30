<?php

use Faker\Generator as Faker;

$factory->define(AppService\User::class, function (Faker $faker) {
  static $password;

  return [
    'name' => $faker->name,
    'email' => $faker->unique()->safeEmail,
    'password' => $password ?: $password = bcrypt('secret'),
    'remember_token' => str_random(10),
  ];
});


$factory->define(AppService\Entities\Table\Table::class, function (Faker $faker ){

    return [
      'table' => $faker->unique()->numberBetween(0, 100)
    ];

});
