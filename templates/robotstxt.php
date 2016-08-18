<?php

header::type('text/plain');
header('X-Robots-Tag: noindex');

echo 'User-agents: *' . PHP_EOL;

if(!$page->rules()->empty()) {
  echo $page->rules();
} else {
  // allow all robots complete access
  echo 'Disallow:';
}

echo PHP_EOL;
