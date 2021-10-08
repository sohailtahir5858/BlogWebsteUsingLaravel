<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Providers\SweetAlertServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;


class Admin_auth extends Controller
{

    function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email|min:3|max:50',
            'password' => 'required'
        ]);
        
        $email = $request->input('email');
        $password = $request->input(('password'));

        $result = DB::table('users')->where(array('email' => $email, 'password' => $password))->get();

        if (isset($result[0]->id)) {
            if ($result[0]->status == 1) {
                $request->session()->put('BLOG_USER_ID', $result[0]->id);
                $request->session()->put('BLOG_USER_NAME', $result[0]->name);
                $request->session()->put('BLOG_USER_EMAIL', $email);

                return redirect('/admin/post');
            } else {
                $request->session()->flash('msg', 'User Account is Deactivated');
                return redirect('/admin/login');
            }
        } else {
            toast('Info Toast','info');
            return redirect('/admin/login');
        }
    }
}
