<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120117,
            'Name' => 'Jordan Angkawijaya',
            'Phone' => '089658087331',
            'Class' => 'XII RPL 4'
        ];
    }
}
