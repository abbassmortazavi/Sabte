<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserFindController extends Controller
{
    public function test(Request $request)
    {
        dd($request->user_id);
    }
}
