<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $address = Address::all();

        return Address::collection($address);
    }

    public function store()
    {
        //
    }

    public function show()
    {
       //
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
