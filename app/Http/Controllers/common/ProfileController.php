<?php

namespace App\Http\Controllers\common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(){
        $id = Auth::user()->id;

        $user = User::findOrFail($id);

        echo "<pre>";
        print_r($user);
        die();

        return view('pages.common.show', ['user'=> $user]);
    }
}
