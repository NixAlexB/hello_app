<?php

$app->get('/hello/:name', function ($name) use($app) {

   $hostname = gethostname();
   $output = array("message" => "Hello $name from $hostname");
    
    $app->response->write(json_encode($output));

});
