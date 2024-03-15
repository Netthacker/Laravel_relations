<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;
use App\Models\User;

class InvoiceController extends Controller
{
    public function index(Request $request){
        $invoice = Invoice::all();
        return  response()->json($invoice,200);
    }

    public function findOne(Request $request){
        $invoice = Invoice::find($request->id);
        return $invoice;
    }

    //Fazendo do meu jeito
    public function store(Request $request){
        //Protegendo os dados que recebo do usuário
        $data = $request->only(['description','value']);

        //Puxando o usuário através do ID que recebo
        $user = User::find($request->id);
        //Adicionando na array os itens user e addres para passar para gravar os dados
        $data['user_id'] = $user->id;
        $data['address_id']=$user->address_id;

        $invoice = Invoice::create($data);
        return response()->json($invoice,200);




    }
}
