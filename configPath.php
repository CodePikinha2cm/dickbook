<?php
$env = fopen('./.env', 'r');

while (!feof($env)) {
    $cursor = fgets($env);
    putenv($cursor);
}

fclose($env);
