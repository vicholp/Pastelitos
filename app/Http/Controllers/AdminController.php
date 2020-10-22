<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function main(){
        return view('admin.main', ['user' => 'Josefita']);
    }
}
