<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Post extends Controller
{
    function listing(Request $request)
    {
        $data['result'] = DB::table('posts')->orderBy('id', 'desc')->get();

        //    echo '<pre>';
        //    print_r($data);
        return view('admin/post/list', $data);
    }

    function edit(Request $request, $id)
    {
        $data['result'] = DB::table('posts')->where('id', $id)->get();
        return view('admin/post/edit', $data);
    }

    function add()
    {
        return view('admin/post/add');
    }

    function submit(Request $request)
    {
        // first we have to validate the data
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts',

            'short_desc' => 'required',
            'long_desc' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
            'post_date' => 'required'
        ]);


        //1 this is on of the two ways to upload image
        // --but the problem here s that it also sends the path along with the 
        // orignal file name
        // $image=$request->file('image')->store('public/posts');

        //    2another way to upload file is below.
        //  the advantage here is that will will give it temprary name

        $image = $request->file('image');
        $extension = $image->extension();
        $image_file = time() . '.' . $extension;
        $image->storeAs('/public/posts/', $image_file);

        // after validation we have to submit data inot our DB
        // creating an associative array to retrieve all the data
        $data = array(
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),

            'short_desc' => $request->input('short_desc'),
            'long_desc' => $request->input('long_desc'),
            'post_date' => $request->input('post_date'),
            'status' => '1',
            'image' => $image_file,
            'blog_date' => date('Y-m-d h:i:s')
        );

        // Now we have to insert it to table
        DB::table('posts')->insert($data);
        $request->session()->flash('msg', 'Data saved succesfully');
        return redirect('/admin/post');
    }

    // a function to delete a post based on its id
    function delete(Request $request, $id)
    {
        DB::table('posts')->where('id', $id)->delete();
        $request->session()->flash('msg', 'Data deleteed succesfully');
        return redirect('/admin/post');
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',

            'short_desc' => 'required',
            'long_desc' => 'required',
            'image' => 'mimes:jpg,png,jpeg',
            'post_date' => 'required'
        ]);



        $data = array(
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),

            'short_desc' => $request->input('short_desc'),
            'long_desc' => $request->input('long_desc'),
            'post_date' => $request->input('post_date'),
            'status' => '1',
            'blog_date' => date('Y-m-d h:i:s')
        );

        // here we have to check whether user has change the picture or not
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $image_file = time() . '.' . $ext;
            $image->storeAs('/public/posts/', $image_file);
            $data['image'] = $image_file;

        }


        DB::table('posts')->where('id', $id)->update($data);
        $request->session()->flash('msg', 'Data Updated succesfull');
        return redirect('/admin/post');
    }
}
