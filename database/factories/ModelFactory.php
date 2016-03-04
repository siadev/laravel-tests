<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
$localisedFaker = Faker\Factory::create("en_AU");

$factory->define(LaravelExamples\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(LaravelExamples\Flyer::class, function (Faker\Generator $faker) {
    return [
        'street'      => $faker->streetAddress,
        'city'        => $faker->city,
        'postcode'    => $faker->postcode,
        'state'       => $faker->state,
        'country'     => $faker->country,
        'price'       => $faker->numberBetween(10000, 5000000),
        'description' => $faker->paragraph(3),
    ];
});

$factory->define(LaravelExamples\Photo::class, function (Faker\Generator $faker) {
   return [
        'flyer_id'  => $faker->randomElement($array = array (1,2,3,4,5)),
        'path'      => $faker->randomElement($array = array (
                                                        '/img/home-carousel/access_anywhere.jpg',
                                                        '/img/home-carousel/android.jpg',
                                                        '/img/home-carousel/builders.jpg',
                                                        '/img/home-carousel/workers.jpg'))

   ];
});

$factory->define(LaravelExamples\cmsTemplate::class, function (Faker\Generator $faker) {
    return [
        'template_name'       => $faker->word,
        'template_path'       => $faker->word . '.' . $faker->word,
    ];
});

$factory->define(LaravelExamples\cmsArticle::class, function (Faker\Generator $faker) {
    return [
        'page_id'             => '1',
        'user_id'             => '1',
        'vertical_order'      => $faker->numberBetween(1,10),
        'horizontal-order'    => $faker->numberBetween(1,10),
        'article_excerpt'     => $faker->sentence,
        'article_header'      => $faker->words(3, true),
        'article_body'        => $faker->paragraph(2),
        'article_footer'      => $faker->paragraph(1),
    ];
});


$factory->define(LaravelExamples\cmsPage::class, function (Faker\Generator $faker) {
    return [
        'lug'                 => $faker->word,
        'instructions'        => $faker->sentence(5),
        'details'             => $faker->word,
        'menu_order'          => $faker->numberBetween(1,10),
        'page_header'         => $faker->words(3, true),
        'page_title'          => $faker->words(3, true),
        'page_banner'         => $faker->url,
        'template_id'         => 1,
        'keywords'            => $faker->url,
        'live'                => $faker->numberBetween(0,1),
        'date_activating'     => $faker->url,
        'date_deactivating'   => $faker->url,
    ];
});


$factory->define(LaravelExamples\cmsMenu::class, function (Faker\Generator $faker) {
   return [
       'key'              => $faker->word,
       'url'              => $faker->url,
       'icon'             => $faker->word,
       'permission'       => $faker->numberBetween(1,5),
       'name'             => $faker->word,
       'description'      => $faker->sentence(5),
       'open'             => 'Same',
       'has_sub'          => $faker->boolean(),
       'order'            => $faker->numberBetween(1,10),
       'status'           => $faker->boolean(),
   ];
});