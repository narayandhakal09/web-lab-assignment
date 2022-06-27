<?php

$car = [[
    'mustang' => '$55123',
    'tesla' => '$5555123',
    'ford' => '$55555',
    'toyata' => '$1235555'

], [
    'mustang' => '$55123',
    'tesla' => '$5555123',
    'ford' => '$55555',
    'toyata' => '$1235555'

],];

foreach ($car[1] as $casr => $price) {
    echo "The price $casr is $price ." . '<br>';
}
