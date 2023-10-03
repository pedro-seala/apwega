<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BankController extends Controller
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
        $banks = Bank::items();

        return view('config.bank.index', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $banks = Bank::items(6);
        return view('config.bank.create', compact('banks'));
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $stored = Bank::store($request);
        toast($stored['message'], $stored['type']);

        return redirect(route('banks.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Bank $bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Bank $bank
     * @return \Illuminate\View\View
     */
    public function edit(Bank $bank): View
    {
        return view('config.bank.edit', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Bank $bank
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Bank $bank): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $updated = $bank->_update($request);
        toast($updated['message'], $updated['type']);

        return redirect(route('banks.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Bank $bank
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Bank $bank): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $destroyed = $bank->_destroy();
        toast($destroyed['message'], $destroyed['type']);

        return redirect(route('banks.index'));
    }
}
