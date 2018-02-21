<?php

$app->get('/hello/:name', function ($name) use($app) {

   $referer = $app->request->headers('referer');
    
   $output = json_encode(array(
       'hostname' =>  $referer,
       'name' => $name
    ));
    
    $app->response->write($output);

});
