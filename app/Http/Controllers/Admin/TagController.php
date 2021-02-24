<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::latest()->get();
        return view('pages.admin.tag.index', ['tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | unique:tags'
        ], [
            'name.required' => 'Name is required.',
            'name.unique' => 'This Tag name is already exists.',
        ]);

        $data = array(
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name'), '_'),
            'created_at' => date('Y-m-d')
        );

        $result = Tag::create($data);

        if ($result) {
            Toastr::success('New tag name saved.', 'success');
            return redirect()->route('admin.tag.index');
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Tag::find($id)->delete();

        if ($result) {
            Toastr::success('Tag has deleted.', 'success');
            return redirect()->route('admin.tag.index');
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }
}
