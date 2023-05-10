<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Rida', 'Female', '2018-03-04', 'Gregory Samson', 'samson.victorgregory@auf.edu.ph', 'San Fernando, Pampanga', '0987654321');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Dog1',
			'gender' => 'Male',
			'birthdate' => '2020-01-01',
			'owner' => 'John',
			'email' => 'John@email.com',
			'address' => 'CSFP',
			'contact_number' => '1111111111'
		],
		[
			'name' => 'Cat1',
			'gender' => 'Female',
			'birthdate' => '2022-05-10',
			'owner' => 'Cat Lady',
			'email' => 'CatLady@email.com',
			'address' => 'Angeles City, Pampanga',
			'contact_number' => '123456789'
		]
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

