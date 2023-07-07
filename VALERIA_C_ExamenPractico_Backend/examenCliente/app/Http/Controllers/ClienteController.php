<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientito = Cliente::all();
        return response()->json($clientito,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newClientito = new Cliente([
            'name_complete'=> $request->get('name_complete'),
            'birthdate'=> $request->get('birthdate'),
            'address'=> $request->get('address'),
            'city_CP'=> $request->get('city_CP'),
            'phone'=> $request->get('phone'),
            'e_address'=> $request->get('e_address'),
            'client_grup'=> $request->get('client_grup'),

        ]);
        $newClientito->save();
        return response()->json($newClientito,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $showCilentito = Cliente::find($id);
        return response()->json($showCilentito,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $upClientito = Cliente::find($id);
        $upClientito->name_complete=$request->get('name_complete');
        $upClientito->birthdate=$request->get('birthdate');
        $upClientito->address=$request->get('address');
        $upClientito->city_CP=$request->get('city_CP');
        $upClientito->phone=$request->get('phone');
        $upClientito->e_address=$request->get('e_address');
        $upClientito->client_grup=$request->get('client_grup');
        $upClientito->save();
        return response()->json($upClientito,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroyClientito = Cliente::find($id);
        $destroyClientito->delete();
        return response()->json($destroyClientito,200);
    }
}
