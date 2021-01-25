<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->class = User::class;
        $this->rota = $this->componenteRota($this->class);
    }


}
