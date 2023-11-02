<?php

declare(strict_types=1);

use Faker\Factory;
use Faker\Generator;

require __DIR__ . '/vendor/autoload.php';

$faker = Factory::create();

function generate_worker_bee(Generator $faker): array
{
    $fname = $faker->firstName();
    $lname = $faker->lastName();

    return [
        'fname' => $fname,
        'lname' => $lname,
        'email' => strtolower($fname . '.' . $lname . '@' . $faker->safeEmailDomain()), 
        'dob' => $faker->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
        'job_title' => array_rand(array_flip(['Graduate Developer', 'Developer I', 'Developer II', 'Senior Developer', 'Lead Developer'])),
        'country_iso' => array_rand(array_flip(['US', 'GB', 'NZ', 'FR', 'DE'])),
        'salary' => $faker->numberBetween(28000, 100000),
    ];
}

$headers = array_keys(generate_worker_bee($faker)); // You are all disposable. see `Cattle not Pets`

$fhandle = fopen(__DIR__ . '/worker_bees.csv', 'w+');
fputcsv($fhandle, $headers);

$i = 1;
do {
    fputcsv($fhandle, array_values(generate_worker_bee($faker)));
    $i++;
} while ($i < 42069);

fclose($fhandle);
