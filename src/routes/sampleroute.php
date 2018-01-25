<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

include "../models/samplemodel.php";
include "../controller/samplecontroller.php";


$app->get('/api/sample[/{Mid}[/{store}]]',function(Request $request, Response $response){
  $Mid= $request -> getAttribute('Mid');
  $store = $request -> getAttribute('store');

  try {
    $returnable = getAllMerchantbyPOS($Mid,$store);
    return json_encode($returnable);
  }
  catch (PDOExcemption $e) {
    echo '{"error": {"text": '.$e->getMessage().'}';
  }

});

