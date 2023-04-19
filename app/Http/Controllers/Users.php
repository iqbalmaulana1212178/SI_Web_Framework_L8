<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    protected $fillable = [
        'name', 'username', 'email', 'password'
    ];
}
