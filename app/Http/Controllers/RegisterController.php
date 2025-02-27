<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class RegisterController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() 
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //dd($request);
        //dd($request->get('username'));

        /** VALIDACION */
        $request->validate( [
            'name' => 'required|max:30',
        ]);
    }
}
