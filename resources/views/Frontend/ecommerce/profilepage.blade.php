@extends('Frontend.components.layouts.master')

@section('content')
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
            @forelse ($customers as $customer)
                <div class="col-xl-4">
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile</div>
                        <div class="card-body text-center">
                            @if ($customer)
                                <img class="img-account-profile rounded-circle mb-2" height="200" width="200"
                                    src="{{ $customer->avatar }}" />
                                <br>
                            @else
                                <img class="img-account-profile rounded-circle mb-2" height="200" width="200"
                                    src="{{ asset('storage/avatar/profile.png') }}" />
                                <br>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card mb-4">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data"
                                action={{ route('customer.updateorcreate', ['id' => Auth::id()]) }}>
                                @csrf
                                <div class="row gx-3 mb-3">
                                    <div class="mb-3">
                                        <label class="small mb-1">Nama</label>
                                        <input class="form-control" type="text" value="{{ $customer->user->email }}"
                                            aria-label="Disabled input example" disabled readonly>
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputFirstName">Nama</label>
                                        <input class="form-control" id="inputFirstName" type="text" name="name"
                                            placeholder="Enter your first name" value="" />
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputFirstName">Photo profile</label>
                                        <input class="form-control" id="inputFirstName" type="file" name="avatar" />
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputLocation">Alamat</label>
                                        <input class="form-control" id="inputLocation" type="text" name="address"
                                            placeholder="Enter your location" value="" />
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-12">
                                        <label class="small mb-1" for="inputPhone">Kontak</label>
                                        <input class="form-control" id="inputPhone" type="tel" name="contact"
                                            placeholder="Enter your phone number" value="" />
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">
                                    Save changes
                                </button>
                            </form>
                        @empty
                            <div class="col-xl-4">
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-header">Profile</div>
                                    <div class="card-body text-center">
                                        <img class="img-account-profile rounded-circle mb-2" height="200" width="200"
                                            src="" />
                                        <br>
                                        <div class="btn btn-primary btn-rounded">
                                            <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                            <input type="file" class="form-control d-none" name="avatar" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="card mb-4">
                                    <div class="card-header">Account Details</div>
                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data"
                                            action={{ route('customer.updateorcreate', ['id' => Auth::id()]) }}>
                                            @csrf
                                            <div class="row gx-3 mb-3">
                                                <div class="mb-3">
                                                    <label class="small mb-1">Nama</label>
                                                    <input class="form-control" type="text"
                                                        value="{{ $customer->user->email }}"
                                                        aria-label="Disabled input example" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="row gx-3 mb-3">
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputFirstName">Nama</label>
                                                    <input class="form-control" id="inputFirstName" type="text"
                                                        name="name" placeholder="Enter your first name"
                                                        value="" />
                                                </div>
                                            </div>
                                            <div class="row gx-3 mb-3">
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputFirstName">Nama</label>
                                                    <input class="form-control" id="inputFirstName" type="file"
                                                        name="avatar" />
                                                </div>
                                            </div>
                                            <div class="row gx-3 mb-3">
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputLocation">Alamat</label>
                                                    <input class="form-control" id="inputLocation" type="text"
                                                        name="address" placeholder="Enter your location"
                                                        value="" />
                                                </div>
                                            </div>
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-12">
                                                    <label class="small mb-1" for="inputPhone">Kontak</label>
                                                    <input class="form-control" id="inputPhone" type="tel"
                                                        name="contact" placeholder="Enter your phone number"
                                                        value="" />
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">
                                                Save changes
                                            </button>
                                        </form>
            @endforelse
        </div>
    </div>
    </div>
    <div class="pt-5 pb-5">
    </div>
    <div class="pt-5 pb-5">
    </div>
    </div>
    </div>
@endsection
