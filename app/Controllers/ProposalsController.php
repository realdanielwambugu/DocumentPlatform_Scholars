<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

class ProposalsController
{

   public function show(Request $request, Response $response)
   {
        return $response->withView(
          'services/proposals',
          ['route' => $request->getShortRequestUri()]
        );
   }

}
