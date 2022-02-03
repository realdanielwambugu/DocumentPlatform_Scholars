<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Settings;

use Xcholars\Support\Proxies\Auth;

use Xcholars\Support\Proxies\Mail;

class ContactUsController extends Controller
{
    use \App\Traits\HasValidation;

    public function sendEmail(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'contact'))
        {
            return $error;
        }

        $user = Auth::user();

        $data = array_merge($user->getAttributes(), $request->all());

        Mail::send('HelpEmail', $data, function ($mail) use($request, $user)
        {
            $mail->from($user->email, $user->fullName);

            $mail->to('pairplanet@gmail.com', app_name() . ' Customer Care Agent');

            $mail->subject('Scholars Customer: ' . $request->subject);
        });

        return $response->withSuccess('Email sent. Plaese Check your inbox for reply');
    }

}
