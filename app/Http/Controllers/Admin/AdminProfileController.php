<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function show()
    {
        $id = Auth::user()->id;

        $user = User::findOrFail($id);

        return view('pages.admin.profile.show', ['user' => $user]);
    }

    public function change(Request $request)
    {

        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'image.image' => 'File should be an Image.',
            'image.mimes' => 'File should be jpeg, png, jpg, gif, svg.',
            'image.max' => 'Maximum Image size is 2048'
        ]);

        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $slugName = Str::slug($user->name, '_');



        // get form image within variable
        $image = $request->file('image');

        if (isset($image)) {
            if ($user->image) {
                $dbImageName = explode('.', $user->image);
                $imageName = $dbImageName[0] . '.' . $image->getClientOriginalExtension();
            } else {
                $imageName = $slugName . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            }
            $request->image->move(('assets/images/users'), $imageName);
            $data = array(
                'image' => $imageName,
                'updated_at' => date('Y-m-d')
            );
            $result = User::where('id', $id)->update($data);
            if ($result) {
                Toastr::success('Profile image successfully updated.', 'success');
                return redirect()->back();
            } else {
                Toastr::warning('W00ps! Something went wrong. Operation failed.', 'warning');
                return redirect()->back();
            }
        } else {
            Toastr::warning('W00ps! Something went wrong. No image found.', 'warning');
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {

        $id = Auth::user()->id;
        $user = User::select('id', 'email', 'mobile')->where('id', $id)->first();
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'mobile' => 'required|unique:users,mobile,' . $user->id
        ], [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Email field should contain an valid email',
            'email.unique' => 'This email address already used.',
            'mobile.required' => 'Mobile Number is required.',
            'mobile.unique' => 'Mobile number already exists.'
        ]);

        $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'updated_at' => date('Y-m-d')
        );
        /*
        echo "<pre>";
        print_r($data);
        die();
*/
        $result = User::where('id', $id)->update($data);

        if ($result) {
            Toastr::success('Profile has successfully updated.', 'success');
            return redirect()->back();
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }

    public function change_password(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required',
            'new_password' => 'required',
            'conf_new_password' => 'required | same:new_password'
        ], [
            'current_password.required' => 'Current password is required',
            'new_password.required' => 'New Password field is required.',
            'conf_new_password.required' => 'confirm password field is required.',
            'conf_new_password.same' => 'Both password fields are not match.',
        ]);

        $password = $request->input('current_password');

        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        if (password_verify($password, $user->password)) {
            $newPassword = $request->input('new_password');
            $hash_pass = password_hash($newPassword, PASSWORD_DEFAULT);
            $updateResult = User::where('id', $id)->update(['updated_at' => date('Y-m-d'), 'password' => $hash_pass]);
            if ($updateResult) {
                Toastr::success('Password has successfully changed.', 'success');
                return redirect()->back();
            } else {
                Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
                return redirect()->back();
            }
        } else {
            Toastr::warning('W00ps! Incorrect current password.', 'warning');
            return redirect()->back();
        }
    }
}
