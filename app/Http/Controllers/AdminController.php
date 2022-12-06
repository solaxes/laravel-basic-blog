<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    /**
     * Logs out from the admin panel
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => "Logged out successfully!",
            'alert-type' => 'info'
        );
        return redirect('/login')->with($notification);
    }

    /**
     * view profile
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function profile(){
        $id = Auth::user()->id;

        $user = User::find($id);

        return view('admin.profile', ['user' => $user]);

    }

    /**
     * Edit profile of the user
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editProfile(){
        $id = Auth::user()->id;

        $user = User::find($id);

        return view('admin.profileEdit', ['user'=> $user]);
    }

    /**
     * Store edited profile
     *
     * @return void
     */
    public function storeProfile(Request $request){

        $id = Auth::user()->id;

        $data = User::find($id);

        $data->name =  $request->get('name');
        $data->email = $request->get('email');
        $data->username = $request->get('username');

        if ( $request->file('profile_image') ){
            $file = $request->file('profile_image');

            $filename = date('YmdHi') . $file->getClientOriginalName();

            $file->move(public_path('admin_images'), $filename);

            $data['profile_image'] = $filename;


        }

        $data->save();

        $notifications = array(
            'message' => 'Your profile updated successfully',
            'alert-type' => 'success'
        );

        return  redirect()->route('admin.profile')->with($notifications);

    }
}
