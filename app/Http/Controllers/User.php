<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PDO;
use App\Providers\SweetAlertServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;
class User extends Controller
{
    function index(Request $request)
    {
        alert()->error('Post Created', 'Successfully')->toToast();
        $data['result'] = DB::table('posts')->orderBy('id', 'desc')->get();

        return view('front/index', $data);
    }

    function about()
    {
        return view('front/about');
    }

    function contact()
    {
        return view('front/contact');
    }

    function contactSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'message' => 'required'
        ]);
       
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
        $data = array([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'message' => $request->input('message'),
            'added_on' => date('Y-m-d H:i:s')
        ]);

        DB::table('contacts')->insert($data);

        Alert::success('Contact Added succesfully', 'success');
        return redirect('front/contact');
    }

    function post(Request $request, $id)
    {
        $data['result'] = DB::table('posts')->where('slug', $id)->get();
        
        return view('front/post', $data);
    }

    public static function page_menu()
    {
       

        $result = DB::table('pages')->orderBy('id', 'desc')->get();
        return $result;
    }

    function page($id)
    {
        $data['result'] = DB::table('pages')->where(array('slug' => $id, 'status' => '1'))->get();


        return view('front/page', $data);
    }
}
