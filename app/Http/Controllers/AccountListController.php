<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AccountListController extends Controller
{
   public function index()
   {

      $users = User::all(); 
      return view('components.account-list', compact('users'));

   }
}
