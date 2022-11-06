<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use DB;
class LoginController extends Controller
{

    public function index()
    {
        return view("admin.users.login", [
            'title'=> 'Đăng nhập hệ thống'
        ]);
    }


    /**
     * @throws ValidationException
     */

    public function store(): \Illuminate\Http\RedirectResponse
    {
//        $this->validate($request, [
//            'email' => 'required|email:filter',
//            'password' => 'required'
//        ]);
//
//        if (Auth::attempt([
//            'email' => $request->input('email'),
//            'password' => $request->input('password')
//        ])) {
//            return redirect()->route('admin');
//        }
//
//        return redirect()->back();

      //return redirect()->route('admin');

        $user = DB::select('SELECT * FROM test');
        dd($user);
    }
}
