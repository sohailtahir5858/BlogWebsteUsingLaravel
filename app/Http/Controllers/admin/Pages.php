<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Pages extends Controller
{
    function listing(Request $request)
    {
        $data['result'] = DB::table('pages')->orderBy('id', 'desc')->get();

        //    echo '<pre>';
        //    print_r($data);
        return view('admin/page/list', $data);
    }

    function edit(Request $request, $id)
    {
        $data['result'] = DB::table('pages')->where('id', $id)->get();
        return view('admin/page/edit', $data);
    }

    function add()
    {
        return view('admin/page/add');
    }

    function submit(Request $request)
    {
        // first we have to validate the data
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:pages',
            'description' => 'required',
        ]);

        // after validation we have to submit data inot our DB
        // creating an associative array to retrieve all the data
        $data = array(
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
            'status' => '1',
            'added_on' => date('Y-m-d h:i:s')
        );

        // Now we have to insert it to table
        DB::table('pages')->insert($data);
        $request->session()->flash('msg', 'Data saved succesfully');
        return redirect('admin/page');
    }

    // a function to delete a post based on its id
    function delete(Request $request, $id)
    {
        DB::table('pages')->where('id', $id)->delete();
        $request->session()->flash('msg', 'Data deleteed succesfully');
        return redirect('/admin/page');
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);


        $data = array(
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
            'status' => '1',
            'added_on' => date('Y-m-d h:i:s')
        );

        

        DB::table('pages')->where('id', $id)->update($data);
        $request->session()->flash('msg', 'Data Updated succesfull');
        return redirect('/admin/page');
    }
}
