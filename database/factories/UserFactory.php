<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'user_type' => 'customers',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $title= $faker->name,
        'slug' => str_slug($title),
        'status' => $faker->numberBetween(0,1),
    ];
});

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'name' => $title= $faker->name,
        'slug' => str_slug($title),
        'status' => $faker->numberBetween(0,1),
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'category_id' => App\Category::all()->random()->id,
        'tag_id' => App\Tag::all()->random()->id,
        'name' => $title= $faker->name,
        'slug' => str_slug($title),
        'description' => $faker->text(50),
        'status' => $faker->numberBetween(0,1),
        'image' => $faker->image('public/image',640,480, null, false),
    ];
});

$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
        'category_id' => App\Category::all()->random()->id,
        'tag_id' => App\Tag::all()->random()->id,
        'product_id' => App\Product::all()->random()->id,
        'user_name' => App\User::all()->random()->name,
        'review_text' => $faker->text(50),
        'rating' => $faker->numberBetween(0,10),
    ];
});
