@extends('frontend.dashboard.index')

@section('contents')
    <section id="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('frontend.dashboard.sidebar')
                </div>
                <div class="col-lg-9">
                    <div class="dashboard_content">
                        <div class="my_listing">
                            <h4>basic information</h4>
                            <form method="POST" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xl-8 col-md-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="my_listing_single">
                                                    <label>Name<span class="text-danger">*</span></label>
                                                    <div class="input_area">
                                                        <input name="name" value="{{ $user->name }}" type="text"
                                                            placeholder="Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="my_listing_single">
                                                    <label>phone<span class="text-danger">*</span></label>
                                                    <div class="input_area">
                                                        <input name="phone" value="{{ $user->phone }}" type="text"
                                                            placeholder="1234">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="my_listing_single">
                                                    <label>email<span class="text-danger">*</span></label>
                                                    <div class="input_area">
                                                        <input name="email" value="{{ $user->email }}" type="Email"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="my_listing_single">
                                                    <label>Address<span class="text-danger">*</span></label>
                                                    <div class="input_area">
                                                        <input name="address" value="{{ $user->address }}" type="text"
                                                            placeholder="Address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="my_listing_single">
                                                    <label>About Me<span class="text-danger">*</span></label>
                                                    <div class="input_area">
                                                        <textarea name="about" cols="3" rows="3" placeholder="Your Text">{{ $user->about }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Website</label>
                                                    <div class="input_area">
                                                        <input name="website" value="{{ $user->website }}" type="text"
                                                            placeholder="Website URL">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Facebook</label>
                                                    <div class="input_area">
                                                        <input name="fb_link" value="{{ $user->fb_link }}" type="text"
                                                            placeholder="Facebook URL">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>X</label>
                                                    <div class="input_area">
                                                        <input name="x_link" value="{{ $user->x_link }}" type="text"
                                                            placeholder="Facebook URL">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Linkedin</label>
                                                    <div class="input_area">
                                                        <input name="in_link" value="{{ $user->in_link }}" type="text"
                                                            placeholder="Linkedin URL">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Whatsaap</label>
                                                    <div class="input_area">
                                                        <input name="wa_link" value="{{ $user->wa_link }}" type="text"
                                                            placeholder="Whatsaap URL">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Instagram</label>
                                                    <div class="input_area">
                                                        <input name="instra_link" value="{{ $user->instra_link }}"
                                                            type="text" placeholder="Instagram URL">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-5">
                                        <div class="my_listing_single">
                                            <label>Avatar</label>
                                            <div class="profile_pic_upload">
                                                <img src="{{ asset($user->avatar) }}" alt="img"
                                                    class="imf-fluid w-100">
                                                <input type="file">
                                                <input type="hidden" name="old_avatar" value="{{ $user->avatar }}">
                                            </div>
                                        </div>
                                        <div class="my_listing_single">
                                            <label>Banner</label>
                                            <div class="profile_pic_upload">
                                                <img src="{{ asset($user->banner) }}" alt="img"
                                                    class="imf-fluid w-100">
                                                <input type="file">
                                                <input type="hidden" name="old_banner" value="{{ $user->banner }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="read_btn">Update</button>
                                </div>
                            </form>
                        </div>
                        <div class="my_listing list_mar">
                            <h4>change password</h4>
                            <form>
                                <div class="row">
                                    <div class="col-xl-4 col-md-6">
                                        <div class="my_listing_single">
                                            <label>current password</label>
                                            <div class="input_area">
                                                <input type="password" placeholder="Current Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="my_listing_single">
                                            <label>new password</label>
                                            <div class="input_area">
                                                <input type="password" placeholder="New Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="my_listing_single">
                                            <label>confirm password</label>
                                            <div class="input_area">
                                                <input type="password" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="read_btn">upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="my_listing list_mar">
                            <form>
                                <h4>Profile Banner Image</h4>
                                <div class="row">
                                    <div class="col-xl-6 col-md-8 col-lg-6">
                                        <div class="profile_pic_upload banner_pic_upload">
                                            <img src="images/login_breadcrumb.jpg" alt="img"
                                                class="imf-fluid w-100">
                                            <input type="file">

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="read_btn">upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
