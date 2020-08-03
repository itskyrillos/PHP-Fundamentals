<?php

$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

foreach ($pronouns as $key) {
    if ($key == "He/She") {
        "<pre>";
        echo $key . " codes" . "<br>";
        "</pre>";
    } else {
        "<pre>";
        echo $key . " code" . "<br>";
        "</pre>";
    }
}


$number = 1;

while ($number <= 120) {
    "<pre>";
    echo $number . "<br>";
    "</pre>";
    $number++;
}

for ($num = 1; $num <= 120; $num++) {
    "<pre>";
    echo $num . "<br>";
    "</pre>";
}


$names = array("Steve", "Angélique", "Léna", "Stéphane", "Jonathan");

foreach ($names as $name) {
    "<pre>";
    echo $name . "<br>";
    "</pre>";
}




?>
<form action="">
    <select id="COUNTRY" name="countries">
        <option value="" disabled>--Choose a country--</option>
        <?php
        $countries = array("BE" => "Belgique", "FR" => "France", "ES" => "Espagne", "IT" => "Italie", "CN" => "Chine", "CA" => "Canada", "US" => "USA");

        foreach ($countries as $key => $country) {
            echo '<option value="' . $key . '">' . $country . '</option>';
        }
        ?>
    </select>
</form>