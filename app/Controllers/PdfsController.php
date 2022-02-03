<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Document;

class PdfsController
{

    public function show(Request $request, Response $response)
    {
        if ($request->post->has('id'))
        {
            return $response->withView(
                'services/partials/pdfs',
                [
                   'pdfs' => Document::where('type', 'pdf')
                                    ->where('id', '>', $request->id)
                                    ->take(6)->get()
                ]
            );
        }

         return $response->withView(
             'services/pdfs',
             [
                 'route'  => $request->getShortRequestUri(),
                 'pdfs' =>  Document::where('type', 'pdf')
                                    ->take(7)->get(),
                 'count' => Document::where('type', 'pdf')->count()
             ]
         );
    }

    public function open(Request $request, Response $response)
    {
         return $response->withView(
             'services/open-pdf',
             ['pdf' => Document::find($request->id)]
         );
    }

    public function search(Request $request, Response $response)
    {
         return $response->withView(
             'services/partials/pdfs',
             ['pdfs' => Document::where('type', "pdf")
                                  ->where('title', 'like', "%{$request->keyword}%")
                                  ->take(12)->get()]
         );
    }
}
