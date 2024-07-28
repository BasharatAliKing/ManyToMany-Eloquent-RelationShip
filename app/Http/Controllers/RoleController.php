<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $roles=Role::find(2);
        $roles=Role::get();
        //return $role->user;
        foreach($roles as $role){
            echo $role->role_name . "<br>";
            foreach($role->user as $user){
                echo $user->user_name . "<br>";
            }
            echo "<hr>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
      $role=Role::find(3);
      $users=[1,3];
      return $role->user()->sync($users);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
