<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;


class AddressController extends Controller
{
    public function index(Request $request){
        $addresses = Address::all();
        return  response()->json($addresses,200);
    }

    public function findOne(Request $request){
        $addresses = Address::find($request->id);
        return $addresses;
    }

    public function store(Request $request){
        $data = $request->only(['address']);

        $address = Address::create($data);
        return response()->json($address, 200);

    }
}
