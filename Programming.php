[<?php
array_map(function($l) {
  echo $l . PHP_EOL;
}, array_map(function($i) {
  $is_fizz = ($i % 3) === 0;
  $is_buzz = ($i % 5) === 0;
  return (!$is_fizz && !$is_buzz) ? $i : 
    ($is_fizz ? 'Fizz' : '') . ($is_buzz ? 'Buzz' : '');
}, range(1 , 150)));.]
