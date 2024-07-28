<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $users=User::find(1);
         $users=User::get();
       // return $users->roles;
      foreach($users as $user){
        echo $user->user_name . "<br>" ;
        foreach ($user->roles as $roles){
           echo $roles->role_name .  "<br> ";
       }
       echo "<hr>";
      }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //  make new connection between user and role
       $user=User::find(3);
      // return $user->roles()->attach([1,2,3]);
      // return $user->roles()->detach([1,2,3]);

      $roles=[1,2,3];
     return $user->roles()->sync($roles);
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
