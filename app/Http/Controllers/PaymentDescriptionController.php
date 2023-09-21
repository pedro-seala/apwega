<?php

namespace App\Http\Controllers;

use App\Models\PaymentDescription;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentDescriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $paymentDescriptions = PaymentDescription::items();

        return view('config.paymentDesc.index', compact('paymentDescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $paymentDescriptions = PaymentDescription::items(4);

        return view('config.paymentDesc.create', compact('paymentDescriptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $stored = PaymentDescription::store($request);
        toast($stored['message'], $stored['type']);

        return redirect(route('payment-descriptions.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentDescription $paymentDescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\PaymentDEscription $paymentDescription
     * @return \Illuminate\View\View
     */
    public function edit(PaymentDescription $paymentDescription): View
    {
        return view('config.paymentDesc.edit', compact('paymentDescription'));
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PaymentDescription $paymentDescription
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(
        Request $request, PaymentDescription $paymentDescription
    ): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $updated = $paymentDescription->_update($request);
        toast($updated['message'], $updated['type']);

        return redirect(route('payment-descriptions.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\PaymentDescription $paymentDescription
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(
        PaymentDescription $paymentDescription
    ): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $destroyed = $paymentDescription->_destroy();
        toast($destroyed['message'], $destroyed['type']);

        return redirect(route('payment-descriptions.index'));
    }
}
