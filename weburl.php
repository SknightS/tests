<?php

// Read the whole file.
$lines = file('https://www.seoclerk.com/php-programming/477841/Website-Value-Calculator-PHP-WEBSITE');

// Go through every line ..
while ($line = array_shift($lines)) {

        // Stop when you find the label we're looking for.
        if (strpos($line, 'for') !== false) break;

}

// The next line has your value on it.
$line = array_shift($lines);
echo $line;
// Print the first word on the line.
$values = explode(' ', $line);
echo $values[0];
?>