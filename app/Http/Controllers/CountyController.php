<?php

namespace App\Http\Controllers;

use App\Models\County;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\View;

class CountyController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new County;
    }

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
        $provinces = $this->model->provinces();

        return view('config.county.create', compact('counties', 'provinces'));
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
        $stored = County::store($request);
        toast($stored['message'], $stored['type']);

        return redirect(route('counties.index'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\County $county
     * @return \Illuminate\View\View
     */
    public function edit(County $county): View
    {
        $provinces = $this->model->provinces();

        return view('config.county.edit', compact('county', 'provinces'));
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\County $county
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, County $county): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $updated = $county->_update($request);
        toast($updated['message'], $updated['type']);

        return redirect(route('counties.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\County $county
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(County $county): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $destroyed = $county->_destroy();
        toast($destroyed['message'], $destroyed['type']);

        return redirect(route('counties.index'));
    }
}
