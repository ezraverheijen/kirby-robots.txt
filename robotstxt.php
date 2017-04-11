<?php

$kirby->set('template',  'robotstxt', __DIR__ . DS . 'templates'  . DS . 'robotstxt.php');
$kirby->set('blueprint', 'robotstxt', __DIR__ . DS . 'blueprints' . DS . 'robotstxt.yml');

// try to create Robots.txt panel page
if(!site()->find('robotstxt')) {
  try {
    site()->children()->create('robotstxt', 'robotstxt', [
      'title' => 'Robots.txt',
      'rules' => "# allow all robots complete access\nUser-agent: *\nDisallow:"
    ]);
  } catch(Exception $e) {
    echo $e->getMessage();
  }
}

kirby()->routes([
  [
    'pattern' => 'robots.txt',
    'action'  => function() {
      return page('robotstxt');
    }
  ],
  [
    'pattern' => 'robotstxt',
    'action'  => function() {
      return site()->visit(site()->errorPage());
    }
  ]
]);
