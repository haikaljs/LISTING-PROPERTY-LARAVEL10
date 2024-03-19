<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\ProfileUpdateRequest;

class ProfileController extends Controller
{
    use FileUploadTrait;

    function index() : View{
        $user = Auth::user();
        return view('admin.profile.index', compact('user'));

    }
    function update(ProfileUpdateRequest $request) : RedirectResponse{
       $avatarPath = $this->uploadImage($request, 'avatar', $request->old_avatar);
       $bannerPath = $this->uploadImage($request, 'banner', $request->old_banner);

       $user = Auth::user();

       $user->avatar = !empty($avatarPath) ? $avatarPath : $request->old_avatar;
       $user->banner = !empty($bannerPath) ? $bannerPath : $request->old_banner;

       $user->name = $request->name;
       $user->email = $request->email;
       $user->phone = $request->phone;
       $user->address = $request->address;
       $user->about = $request->about;
       $user->website = $request->website;
       $user->fb_link = $request->fb_link;
       $user->x_link = $request->x_link;
       $user->in_link = $request->in_link;
       $user->wa_link = $request->wa_link;
       $user->instra_link = $request->instra_link;
       $user->save();

       toastr()->success('Updated successfully!');
       return redirect()->back();

    }
}
