<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Contact extends Controller
{
    function listing(Request $request)
    {
        $data['result'] = DB::table('contacts')->orderBy('id', 'desc')->get();

        //    echo '<pre>';
        //    print_r($data);
        return view('admin/contact/list', $data);
    }
}
