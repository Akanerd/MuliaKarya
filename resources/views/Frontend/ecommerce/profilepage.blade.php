@extends('Frontend.components.layouts.master')

@section('main')
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Profile</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile</div>
                    <div class="card-body text-center">
                        <img class="img-account-profile rounded-circle mb-2" height="200" width="200"
                            src="http://bootdey.com/img/Content/avatar/avatar1.png" alt />
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username</label el>
                                <input class="form-control" id="inputUsername" type="text"
                                    placeholder="Enter your username" value="" />
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputFirstName">Nama</label>
                                    <input class="form-control" id="inputFirstName" type="text"
                                        placeholder="Enter your first name" value="" />
                                </div>
                            </div>

                            <div class="row gx-3 mb-3">            
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputLocation">Alamat</label>
                                    <input class="form-control" id="inputLocation" type="text"
                                        placeholder="Enter your location" value="" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control" id="inputEmailAddress" type="email"
                                    placeholder="Enter your email address" value="" />
                            </div>

                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Kontak</label>
                                    <input class="form-control" id="inputPhone" type="tel"
                                        placeholder="Enter your phone number" value="" />
                                </div>

                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Tanggal Lahir</label>
                                    <input class="form-control" id="inputBirthday" type="text" name="birthday"
                                        placeholder="Enter your birthday" value="" />
                                </div>
                            </div>

                            <button class="btn btn-primary" type="button">
                                Save changes
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="pt-5 pb-5">
            </div>
        </div>
    </div>
@endsection
