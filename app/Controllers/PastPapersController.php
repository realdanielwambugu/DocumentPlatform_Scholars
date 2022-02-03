<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Document;

class PastPapersController
{

   public function show(Request $request, Response $response)
   {
        if ($request->post->has('id'))
        {
           return $response->withView(
               'services/partials/papers',
               [
                   'papers' => Document::where('type', 'past paper')
                                    ->where('id', '>', $request->id)
                                    ->take(6)->get()
               ]
           );
        }

        return $response->withView(
            'services/past-papers',
            [
                'route'  => $request->getShortRequestUri(),
                'papers' => Document::where('type', 'past paper')
                                    ->take(12)->get(),
                'count' => Document::where('type', 'past paper')->count()
            ]
        );
   }

    public function open(Request $request, Response $response)
    {
         return $response->withView(
             'services/open-paper',
             ['paper' => Document::find($request->id)]
         );
    }

   public function search(Request $request, Response $response)
   {
        return $response->withView(
            'services/partials/papers',
            ['papers' => Document::where('type', "past paper")
                                 ->where('title', 'like', "%{$request->keyword}%")
                                 ->take(12)->get()]
        );
   }
}
