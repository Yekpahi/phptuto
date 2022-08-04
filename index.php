<?php
/*
$scores = [1, 2, 3];
$scores[] = 10;
$scores[5] = 12;
$scores[4] = 10;
unset($scores[5]);
echo '<pre>';
echo $scores[5];
echo '</pre>';
*/
/*
$asstab = [];

$asstab = [
    'nom' => "Yekpahi",
    'prenom' => "Prince"
];

foreach ($asstab as $as) {
    echo $as . '<br>';
}
*/
/*
$capitals = [
	'Japan' => 'Tokyo',
	'France' => 'Paris',
	'Germany' => 'Berlin',
	'United Kingdom' => 'London',
	'United States' => 'Washington D.C.'
];

foreach ($capitals as $country => $capital) {
	echo "The capital city of {$country} is $capital" . '<br>';
}
*/

/*
$user = [
	'username' => 'admin',
	'email' => 'admin@phptutorial.net',
	'is_active' => '1'
];

$properties = array_keys($user, 'admin');

print_r($properties);

*/

$message = 'Hi';
$say = function () use ($message) {
	$message = 'Hello';
	echo $message;
};

$say();
echo '<br>';
echo $message;