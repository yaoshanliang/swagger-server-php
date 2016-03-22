<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

$app = new Silex\Application();

    
        
            

$app->GET('/estimates/price', function(Application $app, Request $request) {
            $start_latitude = $request->get('start_latitude');    $start_longitude = $request->get('start_longitude');    $end_latitude = $request->get('end_latitude');    $end_longitude = $request->get('end_longitude');    
            
            return new Response('How about implementing estimatesPriceGet as a GET method ?');
            });

            

$app->GET('/estimates/time', function(Application $app, Request $request) {
            $start_latitude = $request->get('start_latitude');    $start_longitude = $request->get('start_longitude');    $customer_uuid = $request->get('customer_uuid');    $product_id = $request->get('product_id');    
            
            return new Response('How about implementing estimatesTimeGet as a GET method ?');
            });

            
        
    
        
            

$app->GET('/products', function(Application $app, Request $request) {
            $latitude = $request->get('latitude');    $longitude = $request->get('longitude');    
            
            return new Response('How about implementing productsGet as a GET method ?');
            });

            
        
    
        
            

$app->GET('/history', function(Application $app, Request $request) {
            $offset = $request->get('offset');    $limit = $request->get('limit');    
            
            return new Response('How about implementing historyGet as a GET method ?');
            });

            

$app->GET('/me', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing meGet as a GET method ?');
            });

            
        
    

$app->run();
