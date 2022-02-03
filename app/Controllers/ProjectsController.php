<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

class ProjectsController
{

   public function show(Request $request, Response $response)
   {
        return $response->withView(
          'services/projects',
          ['route' => $request->getShortRequestUri()]
        );
   }

}
