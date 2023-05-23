<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function boot(){
        $router->pattern('id', '[0-9]+');

        parent::boot();
    }
}
