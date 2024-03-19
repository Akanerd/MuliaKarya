<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Display a listing of the resource on customer.
     */
    public function customerprofile()
    {
        $customers = Customer::with('user')->where('user_id', auth()->user()->id)->get();
        return view('Frontend.ecommerce.profilepage', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function updateorcreate(Request $request, $id)
    {

        $customers = Customer::where('user_id', $id)->first();

        if (!is_null($customers)) {
            $this->validate($request, [
                'name' => 'sometimes',
            ]);
            //check jika image kosong
            if ($request->file('avatar') == '') {

                //update data tanpa image
                $customers->update([
                    'name'   => $request->name,
                ]);
            } else {

                //hapus image lama
                Storage::disk('local')->delete('public/avatar/' . basename($customers->avatar));

                //upload image baru
                $image = $request->file('avatar');
                $image->storeAs('public/avatar', $image->hashName());

                //update dengan image baru
                $customers->update([
                    'name' => $request->input('name'),
                    // 'address' => $request->input('address'),
                    'avatar' => $image->hashName(),
                ]);
            }
        } else {
            $this->validate($request, [
                'avatar' => 'sometimes|image|mimes:jpeg,jpg,png|max:2000',
            ]);
            //upload image
            if ($request->hasFile('avatar')) {
                if ($request->file('avatar')->isValid()) {
                    $image = $request->file('avatar');
                    $image->storeAs('public/avatar', $image->hashName());
                    $customers = Customer::create([
                        'name' => $request->input('name'),
                        // 'address' => $request->input('address'),
                        'avatar' => $image->hashName(),
                        'user_id' => auth()->user()->id,
                    ]);
                }
            }
            $customers = Customer::create([
                'name' => $request->input('name'),
                // 'address' => $request->input('address'),
                // 'avatar' => $image->hashName(),
                'user_id' => auth()->user()->id,
            ]);
        }

        // dd($image);
    }
}
