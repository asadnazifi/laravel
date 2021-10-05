<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
   public function index()
   {
       return view('Admin.admin_master.layoute_master_admin');
   }
   public function UserList()

   {
       $user_all = User::all();
       return view('user.UserList',compact('user_all'));
   }
}
