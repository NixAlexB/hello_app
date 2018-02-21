<?php

$app->get('/hello/:name', function ($name) use($app) {

   $referer = $app->request->headers('referer');
    
   $output = json_encode(array(
       'message' => "Hello $name from ". gethostname()
      
    ));
    
    $app->response->write($output);

});
