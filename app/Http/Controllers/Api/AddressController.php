<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $address = Address::all();

        return AddressResource::collection($address);
    }


    public function store()
    {
        //
    }

    public function show($address)
    {
        $address = Address::get();

        return response()->json($address);

    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }

}
