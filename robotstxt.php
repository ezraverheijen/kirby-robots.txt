<?php

$kirby->set('template',  'robotstxt', __DIR__ . DS . 'templates'  . DS .'robotstxt.php');
$kirby->set('blueprint', 'robotstxt', __DIR__ . DS . 'blueprints' . DS .'robotstxt.yml');

$site = site();
if(!$site->find('robotstxt')) {
  try {
    $site->children()->create('robotstxt', 'robotstxt', array(
      'title' => 'Robots.txt'
    ));
  } catch(Exception $e) {
    echo $e->getMessage();
  }
}

kirby()->routes(array(
  array(
    'pattern' => 'robots.txt',
    'action'  => function() {
      return page('robotstxt');
    }
  ),
  array(
    'pattern' => 'robotstxt',
    'action'  => function() {
      return page('error');
    }
  )
));
