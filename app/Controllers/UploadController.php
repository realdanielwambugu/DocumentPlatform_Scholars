<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Document;

use Xcholars\Support\Proxies\Auth;

class UploadController extends Controller
{
    use \App\Traits\HasValidation;

    public function upload(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'upload'))
        {
            return $error;
        }

        $document = new Document;

        if (!$document->thumbnilIsValid())
        {
            return $response->withError('Thumbnil type should be png/jpg/jpeg');
        }

        if (!$document->documentIsValid())
        {
            return $response->withError('Document type should be pdf');
        }

        $document->create(
            array_merge(
                $request->only('title', 'type'),
                [   'user_id'  => Auth::id(),
                    'document' => $document->uploadDocument($request->type),
                    'thumbnil' => $document->uploadThumbnil($request->type)
                ]
            )
        );

        return $response->withSuccess('File Saved Successfully');
    }
}
