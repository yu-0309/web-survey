<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function create(){
        $roles = \App\Role::orderBy('id','asc')->pluck('name');
        $roles = $roles -> prepend('権限', '');

        return view('roles.create')->with(['roles' => $roles]);
    }
}
