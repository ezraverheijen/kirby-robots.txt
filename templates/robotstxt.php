<?php

header::type('text/plain');
header('X-Robots-Tag: noindex');

if($page->rules()->isNotEmpty()) {
  echo $page->rules();
} else {
  echo '# allow all robots complete access' . PHP_EOL;
  echo 'User-agent: *' . PHP_EOL;
  echo 'Disallow:';
}

echo PHP_EOL;
