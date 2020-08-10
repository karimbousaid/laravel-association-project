<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Association;
use App\User;
use Faker\Generator as Faker;

$factory->define(Association::class, function (Faker $faker) {
    return [

        'user_id'=> function() {
            return  User::all()->random();
        },
        'الإسم' => $faker->name(),
        'الوصف' => $faker->realText(100,2),
        'الهاتف' => $faker->phoneNumber(),
        'العنوان' => $faker->realText(100,2),
        'الشعار' => $faker->imageUrl(),
        'تاريخ_التأسيس' => $faker->date(),
        'القانون_الأساسي' => $faker->imageUrl(),
        'البريد_الإلكتروني' => $faker->email(),
        'الرئيس' => $faker->name(),
        'نائب_الرئيس' => $faker->name(),
        'الكاتب_العام' => $faker->name(),
        'نائب_الكاتب_العام' => $faker->name(),
        'أمين_المال' => $faker->name(),
        'نائب_أمين_المال' => $faker->name(),
        'المستشار_الأول' => $faker->name(),
        'المستشار_الثاني' => $faker->name(),
        ];
});
