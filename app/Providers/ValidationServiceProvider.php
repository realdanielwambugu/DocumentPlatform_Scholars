<?php

Namespace App\providers;

use Xcholars\Validation\ValidationServiceProvider as ServiceProvider;


class ValidationServiceProvider extends ServiceProvider
{
   /**
    * The Validation rules mappings for the application.
    *
    * @var array
    */
    protected $mappings = [
        'signup' => \App\Validation\ForSignup::class,
        'login' => \App\Validation\ForLogin::class,
        'upload' => \App\Validation\ForUpload::class,
        'contact' => \App\Validation\ForContact::class,
    ];
}
