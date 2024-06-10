<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use App\Models\Account;

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function register()
    {
        return view("register");
    }

    public function forgotpassword()
    {
        return view("forgotpassword");
    }

    public function forgotpasswordrequest(Request $request)
    {
        // Validate both username and email
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
        ]);

        $userData = $request->only(["username", "email"]);

        // Check if the email matches the username provided
        $account = Account::where('username', $userData['username'])
            ->where('email', $userData['email'])
            ->first();

        if ($account !== null) {
            // Storing only necessary data in session
            $request->session()->put('username', $userData['username']);
            $request->session()->put('email', $userData['email']);

            return view('newpassword', compact('account'));
        } else {
            return redirect('/forgotpassword')->with('error', 'Username or email is incorrect! Please try again.');
        }
    }

    public function loginrequest(Request $request)
    {
        // Validate the request
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:5'
        ]);

        $user = $request->only("username", "password");

        // Query the database for the user
        $account = Account::Where('username', '=', $user['username'])->first();

        // Determine if the 'remember me' option was checked
        $remember = $request->has('remember');

        // Check if the user was found and verify the password
        if ($account !== null) {
            if ($request->password === $account->password) {
                if ($remember) {
                    // Set cookies if 'remember me' is checked
                    Cookie::queue('id_account', $account->id_account, 60 * 24 * 7);
                    Cookie::queue('username', $account->username, 60 * 24 * 7);
                    Cookie::queue('password', $account->password, 60 * 24 * 7);
                    Cookie::queue('role', $account->ROLES, 60 * 24 * 7);
                } else {
                    // Store user data in the session
                    $request->session()->put('id_account', $account->id_account);
                    $request->session()->put('username', $account->username);
                    $request->session()->put('password', $account->password);
                    $request->session()->put('role', $account->ROLES);
                }
                if ($account->ROLES === 'Admin') {
                    return redirect('/admincatalog')->with('success', 'Login Successful');
                } else {
                    return redirect('/')->with('success', 'Login Successful');
                }
            } else {
                return redirect('login')->with('error', 'Login Failed! Please Try Again.');
            }
        } else {
            return redirect('login')->with('error', 'Login Failed! Please Try Again.');
        }
    }

    public function logoutrequest(Request $request)
    {
        if (session()->has('id_account') || Cookie::get('id_account') != null) {
            session()->pull('id_account');
            session()->pull('username');
            session()->pull('password');
            session()->pull('role');

            Cookie::queue(Cookie::forget('id_account'));
            Cookie::queue(Cookie::forget('username'));
            Cookie::queue(Cookie::forget('password'));
            Cookie::queue(Cookie::forget('role'));
        }
        return redirect('/')->with('success', 'Account succesfuly logout');
    }



    public function registerrequest(Request $request)
    {
        // Validate the request
        $request->validate([
            'nama' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'tanggal_lahir' => ['required', 'date'],
            'nomor_telepon' => ['required', 'regex:/^\d+$/'],
            'username' => ['required', 'string', 'unique:account,username', 'max:20'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        // Create a new customer record
        $customer = Account::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nomor_telepon' => $request->nomor_telepon,
            'username' => $request->username,
            'password' => $request->password,
        ]);

        // Check if the customer was created successfully
        if (!$customer) {
            return redirect()->route('/register')->with('error', 'Registration not successful.');
        }

        // Redirect to login page with success message
        return redirect()->route('/login')->with('success', 'Registration successful.');

    }

    public function changePassword(Request $request)
    {
        // Validate the request data
        $request->validate([
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        // Retrieve the authenticated user
        $user = auth()->user();

        // Update the user's password
        $user->password = $request->password;
        $user->save();

        // Redirect the user after changing the password
        return redirect('/login')->with('success', 'Password changed successfully!');
    }

}
