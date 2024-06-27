<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $this->authorize('manager',User::class);
            $users=User::whereNot('id',auth()->id())->get();
            return view('admin.users.index',compact('users'));



    }
    public function destroy(User $user){
        $this->authorize('manager',User::class);
        $user->delete();
        return redirect()->route('admin.users.index')->with('success','user deleted successful');
    }
}
