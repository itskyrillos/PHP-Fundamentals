<?php

$text = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";

echo $text . "<br>";

$textArray = explode(' ', $text);

foreach ($textArray as $word) {
    echo str_shuffle($word) . " ";
}

echo '<pre>';
echo ucfirst("hello world !");
echo '</pre>';

echo '<pre>';
echo date('Y');
echo '</pre>';

echo '<pre>';
echo date('Y, H:i:s');
echo '</pre>';

function sum($nbr1, $nbr2)
{
    if (is_numeric($nbr1) && is_numeric($nbr2)) {
        $result = $nbr1 + $nbr2;
        echo '<pre>';
        echo $result;
        echo '</pre>';
    } else {
        echo "Ce n'est pas un nombre";
    }
}

sum(18, "a");
