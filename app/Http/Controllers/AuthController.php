<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        Route: :get('/me', function ()
        {
                return response()-> json(
                   [
                        'NIS'       => '3103119017',
                        'Nama'      => 'Amalia Dwi N',
                        'Gender'    => 'Female',
                        'Phone'     => '085850187283',
                        'Class'     => 'XII RPL 1'
                    ]
                   );
        }
    }
}