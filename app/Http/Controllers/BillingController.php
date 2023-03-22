<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Tools\CalcularDataVencimentoController;
use App\Models\Billing;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $billings = Billing::with('client')->get();
        return Inertia::render('Billings/Index', ['billings' => $billings]);
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
            'method_payment' => 'required',
            'amount' => 'required',
        ]);

        $contract = $request->input('client.contract');
        $method_payment = $request->input('method_payment');
        $amount = $request->input('amount');

        $billingData = [
            'client_id' => $contract['client_id'], 
            'contract_id' => $contract['id'],
            'type_billing' => $method_payment,
            'amount' => $amount,
            'expiration_date' => CalcularDataVencimentoController::calcularDataVencimento(),
            'billing_status' => 1
        ];

        $billing = new Billing($billingData);
        $billing->save();

        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function show(Billing $billing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function edit(Billing $billing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function update(Billing $billing)
    {
        $billing->billing_status = 0;
        $billing->saveOrFail();

        return redirect()->route('billing.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Billing $billing)
    {
        //
    }
}
