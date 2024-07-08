<?php
use Rudder\Rudder;

require_once realpath(__DIR__ . '/vendor/autoload.php');

Rudder::init("2eGdh9tE7jTfJK66eEjfzSXfQbx", array(
  "data_plane_url" => "https://techsomnqsihzp.dataplane.rudderstack.com",
  "consumer"       => "lib_curl",
  "debug"          => true,
  "max_queue_size" => 10000,
  "flush_at"       => 100
));

Rudder::identify(array(
  "userId" => "1hKOmRA4GRlm",
  "traits" => array(
    "email" => "sam@example.com",
    "name" => "Geetu Pawar",
    "friends" => 15
  )
));

Rudder::track(array(
  "userId" => "f4ca124291",
  "event" => "Article Updated",
  "properties" => array(
    "title" => "Future of AI",
    "subtitle" => "The future of AI",
    "author" => "Somnath Pawar"
  )
));

Rudder::page(array(
  "userId" => "f4ca124298",
  "category" => "Docs",
  "name" => "PHP library",
  "properties" => array(
    "url" => "https://rudderstack.com/libraries/php/"
  )
));

echo 'event tracked';
