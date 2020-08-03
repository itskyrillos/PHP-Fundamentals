<?php
// ARRAY

$family = array('Rudy', 'Geneviève', 'Cyrille');
echo '<pre>';
print_r($family);
echo '</pre>';

$recipe = array('Salade', 'Tomates', 'Rognons');
echo '<pre>';
print_r($recipe);
echo '</pre>';

$movies = array('Spiderman', 'Batman', 'Superman');
echo '<pre>';
print_r($movies[2]);
echo '</pre>';

// ASSOCIATIVE ARRAYS

$me = array(
    'firstname' => 'Cyrille',
    'lastname' => 'Guillaume',
    'age' => 23,
    'city' => 'Namur',
    'movies' => array('Spiderman', 'Batman', 'Superman')
);

$me['hobbies'] = ['Music'];

//MULTIDIMENSIONAL ARRAYS

$mother = array(
    'firstname' => 'Geneviève',
    'lastname' => 'Christophe',
    'age' => 52,
    'city' => 'Namur',
    'movies' => array('Deadpool', 'Madmax', 'Titanic'),
    'hobbies' => array('Shopping', 'Movies',)
);

$me['mother'] = $mother;

echo '<pre>';
print_r($me);
echo '</pre>';

$mother_hobbies = count($mother["hobbies"]);
$me_hobbies = count($me["hobbies"]);
$total_hobbies = $mother_hobbies + $me_hobbies;

echo $mother_hobbies . "<br/>";
echo $me_hobbies . "<br/>";
echo $total_hobbies . "<br/>";

// $me["hobbies"][] = "Taxidermy";

$me["hobbies"][] =  "Taxidermy";

echo '<pre>';
print_r($me);
echo '</pre>';

$me["lastname"] = "Durand";

echo '<pre>';
print_r($me);
echo '</pre>';
