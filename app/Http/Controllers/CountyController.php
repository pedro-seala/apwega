<?php

namespace App\Http\Controllers;

use App\Models\County;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\View;

class CountyController extends Controller
{
    /**
     * * Get paginated rows for select2
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function search(Request $request): LengthAwarePaginator
    {
        return County::search($request);
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $counties = County::items();

        return view('config.county.index', compact('counties'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $counties = County::items(6);
        $provinces = County::provinces();

        return view('config.county.create', compact('counties', 'provinces'));
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\County $county
     * @return \Illuminate\View\View
     */
    public function edit(County $county): View
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\County $county
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, County $county): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\County $county
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(County $county): RedirectResponse
    {
        //
    }
}
