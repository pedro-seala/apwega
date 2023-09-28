<?php

namespace App\Http\Controllers;

use App\Models\FinePercentage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FinePercentageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('config.finePercentage.index', [
            'finePercentage' => FinePercentage::fine_percentage()
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
        $stored = FinePercentage::store($request);
        alert('Sucesso', $stored['message'], $stored['type']);

        return redirect(route('fine-percentage.index'));
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\FinePercentage $finePercentage
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, FinePercentage $finePercentage): RedirectResponse
    {
        $updated = $finePercentage->_update($request);
        alert('Sucesso', $updated['message'], $updated['type']);

        return redirect(route('fine-percentage.index'));
    }
}
