<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::with('address')->where('client_status', '!=', 0)->get();
        return Inertia::render('Clients/Index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:246',
            'document' => 'required|max:18',
            'contact' => 'required|max:16'
        ]);

        if(strlen($request->input('contact')) == 11) {
            $request->request->add(['type_document' => 'cpf']);
        } else {
            $request->request->add(['type_document' => 'cnpj']);
        }

        $request->request->add(['client_status' => 1]);

        $client = new Client($request->input());
        $client->save();
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $client = Client::find($id);
        $client->fill($request->input())->saveOrFail();
        return redirect()->route('client.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $address = Address::where('client_id', $client->id);
        $address->delete();
        $client->delete();
        return redirect()->route('client.index');
    }
}
