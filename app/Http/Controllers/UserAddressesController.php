<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAddress;
use App\Http\Requests\UserAddressRequest;

class UserAddressesController extends Controller
{
    public function index(Request $request)
    {
        $addresses = $request->user()->addresses;

        return view('user_addresses.index', compact('addresses'));
    }


    public function create(Request $request,UserAddress $address)
    {
        return view('user_addresses.create_and_edit', compact('address'));
    }


    public function store(UserAddressRequest $request)
    {
        $address = $request->validated();

        $request->user()->addresses()->create($address);

        return redirect()->route('user_addresses.index');
    }


    public function edit(UserAddress $user_address)
    {
        $this->authorize('own', $user_address);

        return view('user_addresses.create_and_edit', ['address' => $user_address]);
    }

    public function update(UserAddressRequest $request, UserAddress $user_address)
    {
        $this->authorize('own', $user_address);

        $address = $request->validated();

        $user_address->update($address);

        return redirect()->route('user_addresses.index');
    }

    public function destroy(UserAddress $user_address)
    {
        $this->authorize('own', $user_address);

        $user_address->delete();

        return [];
    }
}
