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
                                            <div class="image-container">
                                                <!-- Placeholder text -->
                                                <div class="placeholder-text">Upload Here</div>
                                                <!-- Input for uploading the image -->
                                                <input type="file" accept="image/*" onchange="loadFile(event)">
                                                <!-- Image preview -->
                                                <img id="output" />
                                            </div>
                                        </div>

                                        <div class="my_listing_single">
                                            <label>Banner</label>
                                            <div class="image-container">
                                                <!-- Placeholder text -->
                                                <div class="placeholder-text2">Upload Here</div>
                                                <!-- Input for uploading the image -->
                                                <input type="file" accept="image/*" onchange="loadFile2(event)">
                                                <!-- Image preview -->
                                                <img id="output2" />
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


                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        /* Custom CSS styles go here */
        .image-container {
            position: relative;
            height: 300px;
            border: 3px dotted #fff;
            /* Set border style to dotted and color to white */
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border-spacing: 20px;
            /* Increase distance between dots */
        }

        .image-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 3px dotted #fff;
            /* Set additional border style to dotted and color to white */
            border-spacing: 20px;
            /* Increase distance between dots */
        }

        .image-container input[type="file"] {
            position: absolute;
            /* Position the input element absolutely within the container */
            top: 0;
            /* Position at the top */
            left: 0;
            /* Position at the left */
            width: 100%;
            /* Cover the entire width of the container */
            height: 100%;
            /* Cover the entire height of the container */
            opacity: 0;
            /* Make the input element invisible */
            cursor: pointer;
            /* Change cursor to pointer when hovering */
        }

        .image-container img {
            max-width: 100%;
            /* Ensure the image does not exceed the container width */
            max-height: 100%;
            /* Ensure the image does not exceed the container height */
        }

        .image-container button {
            position: absolute;
            /* Position the button absolutely within the container */
            top: 50%;
            /* Position the button at the vertical center */
            left: 50%;
            /* Position the button at the horizontal center */
            transform: translate(-50%, -50%);
            /* Center the button horizontally and vertically */
            z-index: 1;
            /* Ensure the button is above the input */
        }

        .placeholder-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #666;
            /* Adjust color as needed */
            font-size: 16px;
            /* Adjust font size as needed */
            font-weight: bold;
            /* Adjust font weight as needed */
        }

        .placeholder-text2 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #666;
            /* Adjust color as needed */
            font-size: 16px;
            /* Adjust font size as needed */
            font-weight: bold;
            /* Adjust font weight as needed */
        }
    </style>
    <script>
        // JavaScript functions
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output');
                output.src = reader.result;
                output.style.border = '3px solid #fff';
                // Change placeholder text to "Change Picture"
                var placeholderText = document.querySelector('.image-container .placeholder-text');
                if (placeholderText) {
                    placeholderText.textContent = "Change Picture";
                }
            };
            reader.readAsDataURL(event.target.files[0]);
        };

        var loadFile2 = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output2');
                output.src = reader.result;
                output.style.border = '3px solid #fff';
                // Change placeholder text to "Change Picture"
                var placeholderText = document.querySelector('.image-container .placeholder-text2');
                if (placeholderText) {
                    placeholderText.textContent = "Change Picture";
                }
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
@endsection
