<?php

namespace App\Http\Controllers\Admin;

use App\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscribe::latest()->get();
        return view('pages.admin.subscribe.index', ['subscribers' => $subscribers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'email' => 'required | email | unique:subscribes'
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Subscribe field contains only email.',
            'email.unique' => 'This email address is already exists.',
        ]);

        $subscribe = new Subscribe();
        $subscribe->email = $request->input('email');
        $subscribe->created_at = date('Y-m-d');

        $result = $subscribe->save();
        if ($result) {
            Toastr::success('Subscription complete.', 'success');
            return redirect()->back();
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show(Subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscribe $subscribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscribe $subscribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscribe $subscribe)
    {
        $result = $subscribe->delete();
        if ($result) {
            Toastr::success('Delete complete.', 'success');
            return redirect()->back();
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }
}
