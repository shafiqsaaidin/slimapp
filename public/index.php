<?php
  /*
    title: Restful API with PHP & MySQL
    date: 22/9/2017
    reference: https://youtu.be/DHUxnUX7Y2Y
  */

  use \Psr\Http\Message\ServerRequestInterface as Request;
  use \Psr\Http\Message\ResponseInterface as Response;

  require '../vendor/autoload.php';
  require '../src/config/db.php';

  $app = new \Slim\App;
  $app->get('/hello/{name}', function (Request $request, Response $response) {
      $name = $request->getAttribute('name');
      $response->getBody()->write("Hello, $name");

      return $response;
  });

  // Customer Route
  require '../src/routes/customers.php';

  $app->run();

?>
