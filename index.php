<?php

declare(strict_types=1);

// VARIABLES

$age = 24;
$name = 'Sergio Leon';

// FUNCIONES

function hello(string $name, int $age, string $city): string
{
	return "Hello {$name}, Age {$age}, City {$city}";
}

// $saludo = hello($name, $age, 'Girardot');
// echo("{$saludo} <br>");

// $saludo = hello('Dairo Cardenas', 32, 'Bogotá');
// echo("{$saludo} <br>");

// ARRAYS

$data = [
	'name' => 'Dairo',
	'last_name' => 'Cardenas',
	'address' => [
		'street' => 'Calle 13',
		'city' => 'Bogotá',
		'country' => 'Colombia'
	]
];

// echo("Name: {$data['name']}, Last Name: {$data['last_name']}, Address: " . implode('/', $data['address']));

// OBJETOS

$data = (object) [
	'name' => 'Dairo',
	'last_name' => 'Cardenas',
	'address' => [
		'street' => 'Calle 13',
		'city' => 'Bogotá',
		'country' => 'Colombia'
	]
];

// echo("Name: {$data->name}, Last Name: {$data->last_name}, Address: " . implode('/', $data->address));

// CICLOS

$data = [1, 2, 3, 4, 5, 6];

for ($i = 0; $i < count($data); $i++) {
	echo(
		"{$data[$i]}, "
	);
}