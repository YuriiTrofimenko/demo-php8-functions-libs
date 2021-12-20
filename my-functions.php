<?php
require_once('./utils.php');
function parent (int $x) {
  // TODO добавить в массив $y элемент с ключем z,
  // значением которого будет квадрат числа из переменной $x
  $y = ['counter' => $x, 'z' => $x * $x];
  $y['counter'] = $y['counter'] + 1;
  return function () use ($y) {
    $y['counter'] = $y['counter'] + 1;
    $y['z'] = sin($y['z']);
    echo "{$y['counter']}, {$y['z']}\n"; // TODO заменить значение с ключем z на значение синуса от z
  };
}