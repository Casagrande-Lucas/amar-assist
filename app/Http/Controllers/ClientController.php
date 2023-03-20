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
            'client.name' => 'required|max:246',
            'client.document' => 'required|max:18',
            'client.contact' => 'required|max:16',
            'address.postal_code' => 'required|max:9',
            'address.address_line1' => 'max:246',
            'address.city' => 'max:150',
            'address.state' => 'max:2',
        ]);

        $clientData = $request->input('client');
        $addressData = $request->input('address');

        if(strlen($clientData['contact']) == 11) {
            $clientData['type_document'] = 'cpf';
        } else {
            $clientData['type_document'] = 'cnpj';

        }

        $clientData['contact'] = preg_replace("/[^0-9]/", "", $clientData['contact']);
        $clientData['document'] = preg_replace("/[^0-9]/", "", $clientData['document']);
        $clientData['client_status'] = 1;

        $client = new Client($clientData);
        $client->save();

        $addressData['client_id'] = $client->id;
        $addressData['postal_code'] = preg_replace("/[^0-9]/", "", $addressData['postal_code']);
        $address = new Address($addressData);
        $address->save();

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
     * @param  \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->request->add(['contact' => preg_replace("/[^0-9]/", "", $request->input('contact'))]);
        $request->request->add(['document' => preg_replace("/[^0-9]/", "", $request->input('document'))]);

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
