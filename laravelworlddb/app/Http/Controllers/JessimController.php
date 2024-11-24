<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class JessimController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function showJessim()
    {
        return view('jessim');
    }
}
