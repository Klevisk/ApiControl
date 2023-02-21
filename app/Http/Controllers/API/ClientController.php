<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Client::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveClientRequest $request)
    {
        Client::create($request->all());

    return response()->json([
        'res' => True,
        'msg' => 'Cliente Guardado Correctamente'
    ],200);

    }
    

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
    
        return response()->json([
            
            'res' => true,
            'client' => $client,

        ],200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Cliente Actualizado Con EXITO'

        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Cliente Eliminado Con EXITO'

        ],200);
    }
}
