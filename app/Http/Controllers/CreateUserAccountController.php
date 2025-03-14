<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateUserAccountController extends Controller
{
    public function index()
    {
        return view('components.create-account');
    }

    public function createUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_number'   => 'required|integer|unique:users,user_number',
            'first_name'    => 'required|string|max:255',
            'middle_name'   => 'required|string|max:255',
            'last_name'     => 'required|string|max:255',
            'age'           => 'required|integer',
            'birthdate'     => 'required|date',
            'contact'       => 'required|integer',
            'email_address' => 'required|email|unique:users,email_address',
            'user_email'    => 'required|string|max:255|unique:users,user_email',
            'password'      => 'required|string|min:8',
            'department'    => 'required|string|max:50',
            'role'          => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            return redirect()->back() 
                ->withErrors($validator) 
                ->withInput(); 
        }

        $user = User::create([
            'user_number'   => $request->user_number,
            'first_name'    => $request->first_name,
            'middle_name'   => $request->middle_name,
            'last_name'     => $request->last_name,
            'age'           => $request->age,
            'birthdate'     => $request->birthdate,
            'contact'       => $request->contact,
            'email_address' => $request->email_address,
            'user_email'    => $request->user_email,
            'password'      => Hash::make($request->password),
            'role'          => $request->role,
            'department'    => $request->department,
        ]);

        return redirect()->route('page.user.create')
                        ->with('success', 'User created successfully!');

    }

}
