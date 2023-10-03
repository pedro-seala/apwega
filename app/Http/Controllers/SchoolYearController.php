<?php

namespace App\Http\Controllers;

use App\Models\SchoolYear;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SchoolYearController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $schoolYears = SchoolYear::items();

        return view('config.schoolYear.index', compact('schoolYears'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $schoolYears = SchoolYear::items(6);

        return view('config.schoolYear.create', compact('schoolYears'));
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
        $stored = SchoolYear::store($request);
        toast($stored['message'], $stored['type']);

        return redirect(route('school-years.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(SchoolYear $schoolYear)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\SchoolSubject $schoolYear
     * @return \Illuminate\View\View
     */
    public function edit(SchoolYear $schoolYear): View
    {
        return view('config.schoolYear.edit', compact('schoolYear'));
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SchoolSubject $schoolYear
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, SchoolYear $schoolYear): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $updated = $schoolYear->_update($request);
        toast($updated['message'], $updated['type']);

        return redirect(route('school-years.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\SchoolSubject $SchoolYear
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(SchoolYear $schoolYear): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $destroyed = $schoolYear->_destroy();
        toast($destroyed['message'], $destroyed['type']);

        return redirect(route('school-years.index'));
    }
}
