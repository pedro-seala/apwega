<?php

namespace App\Http\Controllers;

use App\Models\LastMonthPayment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LastMonthPaymentController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new LastMonthPayment;
    }


    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('config.lastMonthPayment.index', [
            'lastMonths' => LastMonthPayment::last_months()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param \App\Models\LastMonthPayment $lastMonthPayment
     * @return \Illuminate\View\View
     *
     */
    public function edit(LastMonthPayment $lastMonthPayment): View
    {
        return view('config.lastMonthPayment.edit', [
            'lastMonthPayment'  => $lastMonthPayment,
            'model'             => $this->model
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\LastMonthPayment $lastMonthPayment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, LastMonthPayment $lastMonthPayment): RedirectResponse
    {
        $updated = $lastMonthPayment->_update($request);
        alert('Sucesso', $updated['message'], $updated['type']);

        return redirect(route('last-month-payment.index'));
    }
}
