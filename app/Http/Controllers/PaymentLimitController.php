<?php

namespace App\Http\Controllers;

use App\Models\PaymentLimit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentLimitController extends Controller
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
        return view('config.paymentLimit.index', [
            'paymentLimit' => PaymentLimit::payment_limit()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function store(Request $request): RedirectResponse
    {
        $stored = PaymentLimit::store($request);
        alert('Sucesso', $stored['message'], $stored['type']);

        return redirect(route('payment-limit.index'));
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PaymentLimit $paymentLimit
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, PaymentLimit $paymentLimit): RedirectResponse
    {
        $updated = $paymentLimit->_update($request);
        alert('Sucesso', $updated['message'], $updated['type']);

        return redirect(route('payment-limit.index'));
    }
}
